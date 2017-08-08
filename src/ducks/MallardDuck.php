<?php

namespace StrategyPatternTutorial\Ducks;

use StrategyPatternTutorial\DuckBehaviours\Quack;
use StrategyPatternTutorial\DuckBehaviours\FlyWithWings as FlyWithWings;

/**
 * Mallard Duck class to show different behaviours within this example
 */
class MallardDuck extends Duck {

	/**
	 * Instantiate a given behaviour for object
	 */
	public function __construct() {
		$this->QuackBehaviour = new Quack();
		$this->FlyBehaviour = new FlyWithWings();
	}

	/**
	 * Returns text
	 * @return string
	 */
	public function display() {
		return "This is a Mallard Duck. Quack Quack. I think Daffy was a Mallard...";
	}
}