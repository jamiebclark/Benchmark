<?php
App::uses('Benchmark', 'Benchmark.Vendor');
class BenchmarkComponent extends Component {
	public $name = 'Benchmark';
	
	public function initialize(Controller $controller) {
		Benchmark::benchmark('Initialized');
	}
	
	public function startup(Controller $controller) {
		Benchmark::benchmark('Startup Complete');
	}
	
	public function beforeRender(Controller $controller) {
		Benchmark::benchmark('Before Render');
	}
	
	public function shutdown(Controller $controller) {
		Benchmark::benchmark('Shutdown');
	}	
}