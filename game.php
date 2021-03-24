<?php

abstract class Transport {
	protected function moveForward() {}
	protected function moveBackward() {}
}

interface SpecialMove {
	public function specialMove() {}
}

class Excavator implements SpecialMove {
	protected function specialMove() {}
}

class Tank implements SpecialMove {
	protected function specialMove() {}
	protected function fire() {}
}

class Car implements SpecialMove {
	protected function specialMove() {}
	protected function beep() {}
	protected function moveWindow() {}
	protected $color = '';
	protected $model = '';
	protected $luxSalon = '';

	function __construct (string $col, string $mod, string $lux) {
		$color = $col;
		$model = $mod;
		$luxSalon = $lux;
	}
}

function race (Car $car) {
	$car->moveForward();
	$car->moveBackward();
	$car->specialMove();
}

function shooter (Tank $tank) {
	$tank->moveForward();
	$tank->moveBackward();
	$tank->specialMove();
	$tank->fire();
}

?>