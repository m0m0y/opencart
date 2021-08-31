<?php
/**
 * @package		OpenCart
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 * @link		https://www.opencart.com
*/

/**
* Event class
*
* Event System Userguide
*
* https://github.com/opencart/opencart/wiki/Events-(script-notifications)-2.2.x.x
*/
class Event {
	protected $registry;
	protected $data = array();
    protected $direct = array();

	/**
	 * Constructor
	 *
	 * @param	object	$route
 	*/
	public function __construct($registry) {
		$this->registry = $registry;
	}

    function &bank($trigger) {
	    $trigger = str_replace('?', '*', $trigger);

         if (($p = strpos($trigger, '*')) !== false) {
            $trigger = substr($trigger, 0, $p);

            if (!isset($this->data[$trigger])) {
                $this->data[$trigger] = array();
            }

            return $this->data[$trigger];
        }

        if (!isset($this->direct[$trigger])) {
            $this->direct[$trigger] = array();
        }

        return $this->direct[$trigger];
    }

	/**
	 *
	 *
	 * @param	string	$trigger
	 * @param	object	$action
	 * @param	int		$priority
 	*/
	public function register($trigger, Action $action, $priority = 0) {
	    $data = &$this->bank($trigger);

		$data[] = array(
			'trigger'  => $trigger,
			'action'   => $action,
			'priority' => $priority
		);
	}

	/**
	 *
	 *
	 * @param	string	$event
	 * @param	array	$args
 	*/
	public function trigger($event, array $args = array()) {
        if (!empty($this->direct[$event])) {
            $hooks = $this->direct[$event];
        } else {
            $hooks = array();
        }

        foreach ($this->data as $key => $data) {
            if (substr($event, 0, strlen($key)) == $key) {
                foreach ($data as $value) {
                    if (preg_match('/^' . str_replace(array('\*', '\?'), array('.*', '.'), preg_quote($value['trigger'], '/')) . '/', $event)) {
                        $hooks[] = $value;
                    }
                }
            }
        }

        if (count($hooks) > 1) {
            foreach ($hooks as $key => $value) {
                $sort_order[$key] = $value['priority'];
            }

            array_multisort($sort_order, SORT_ASC, $hooks);
        }

        foreach ($hooks as $value) {
            $result = $value['action']->execute($this->registry, $args);

            if (!is_null($result) && !($result instanceof Exception)) {
                return $result;
            }
        }
	}

	/**
	 *
	 *
	 * @param	string	$trigger
	 * @param	string	$route
 	*/
	public function unregister($trigger, $route) {
        $data = &$this->bank($trigger);

		foreach ($data as $key => $value) {
			if ($trigger == $value['trigger'] && $value['action']->getId() == $route) {
				unset($data[$key]);
			}
		}
	}

	/**
	 *
	 *
	 * @param	string	$trigger
 	*/
	public function clear($trigger) {
        $data = &$this->bank($trigger);

		foreach ($data as $key => $value) {
			if ($trigger == $value['trigger']) {
				unset($data[$key]);
			}
		}
	}
}