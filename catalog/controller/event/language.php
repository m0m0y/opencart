<?php
class ControllerEventLanguage extends Controller {
	public function index(&$route, &$args) {
		$args = array_merge($this->language->data, $args);
	}	
	
	// 1. Before controller load store all current loaded language data
	public function before(&$route, &$output) {
		$this->language->set('backup', $this->language->all());
	}
	
	// 2. After contoller load restore old language data
	public function after(&$route, &$args, &$output) {
		$data = $this->language->get('backup');
		
		if (is_array($data)) $this->language->set_all($data);
	}
}