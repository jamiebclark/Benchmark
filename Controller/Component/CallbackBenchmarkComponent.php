<?php
App::uses('Benchmark', 'Benchmark.Vendor');
class CallbackBenchmarkComponent extends Component {
	public $name = 'CallbackBenchmark';
	
	public function initialize(Controller $controller) {
		Benchmark::set('Beginning beforeFilter()');
		return parent::initialize($controller);
	}
	
	public function startup(Controller $controller) {
		Benchmark::set('Completed beforeFilter()');
		return parent::startup($controller);
	}
	
	public function beforeRender(Controller $controller) {
		Benchmark::set('Beginning beforeRender()');
		return parent::beforeRender($controller);
	}
}