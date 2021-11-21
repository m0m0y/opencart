<?php
namespace Template;
final class Template {
	private $data = array();
		
	public function add_data($data = false) {
		if (!$this->data) $this->data = $data;
		else $this->data = array_merge($this->data, $data);
	}
	
	public function set($key, $value) {
		$this->data[$key] = $value;
	}
	
	public function render($template) {
		$file = DIR_TEMPLATE . $template . '.tpl';

		if (is_file($file)) {
			extract($this->data);

			ob_start();

			require($file);

			return ob_get_clean();
		}

		throw new \Exception('Error: Could not load template ' . $file . '!');
		exit();
	}	
}
