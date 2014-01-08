Benchmark for CakePHP
=====================

Benchmarking script in CakePHP

This is a small CakePHP plugin I wrote to quickly track how long my code was taking to run.

Installation
------------
1. Copy the contents into your <code>app/Plugin/</code> directory
2. Load the plugin in your <code>bootstrap.php</code> file

Use
---
1. Include <code>App::uses('Benchmark', 'Benchmark.Vendor');</code> wherever you want to use the function. For app-wide use, include it in your <code>bootstrap.php</code> file
2. Include <code>Benchmark::set('[BENCHMARK LABEL]');</code> wherever you'd like to track your progress
3. Output your progress by including the PHP code <code>echo $this->element('Benchmark.table'); </code>
4. Optionally you can use the component <code>CallbackBenchmarkComponent.php</code> for some automatically generated benchmarks based on callbacks
