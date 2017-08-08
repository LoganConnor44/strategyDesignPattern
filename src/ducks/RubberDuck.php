<?php

namespace StrategyPatternTutorial\Ducks;

use StrategyPatternTutorial\DuckBehaviours\FlyNoWay as FlyNoWay;
use StrategyPatternTutorial\DuckBehaviours\Squeak as Squeak;

class RubberDuck extends Duck {
	public function __construct() {
		$this->FlyBehaviour = new FlyNoWay();
		$this->QuackBehaviour = new Squeak();
	}

	/**
	 * Returns text
	 * @return string
	 */
	public function display() {
		return "This is a Rubber Duck. Like the giant ones that floats in prominent cities around the world.";
	}
}