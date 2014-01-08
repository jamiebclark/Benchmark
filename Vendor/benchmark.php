<?php
class Benchmark {
	public static $times = array();
	
	private static $lastTime;
	
	protected static $_started = false;
	protected static $_startTime;
	protected static $_totalTime;
	
	public static function setStarted() {
		$val = null;
		if (!empty($_SERVER['REQUEST_START_TIME'])) {
			$val = $_SERVER['REQUEST_START_TIME'];
		}
		self::$_started = true;
		self::$_startTime = self::set('Startup', $val);
		return self::$_startTime;
	}

	public static function setStopped() {
		self::set('Stopped');
		self::$_started = false;
	}
	
	public static function getTimes() {
		self::setStopped();
		$times = self::$times;
		
		$benchmarks = array();
		$startTime = null;
		foreach ($times as $timeInfo) {
			list($label, $time) = $timeInfo;
			if (empty($lastTime)) {
				$lastTime = self::$_startTime;
			}
			$benchmarks[] = array(
				'label' => $label,
				'time' => $time,
				'increment' => $time - $lastTime,
				'age' => $time - self::$_startTime,
			);
			$lastTime = $time;
		}
		return $benchmarks;
	}
	
	public static function resetTimes() {
		self::$times = array();
	}
	
	public static function getTotalTime() {
		return self::$_totalTime;
	}
	
	public static function set($label, $val = null) {
		if (!self::$_started) {
			self::setStarted();
		}
		if (empty($val)) {
			$val = microtime(true);
		}
		self::$_totalTime = $val - self::$_startTime;
		self::$times[] = array($label, $val);
		return $val;
	}
}