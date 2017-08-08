<?php

namespace StrategyPatternTutorial\Ducks;

use StrategyPatternTutorial\DuckBehaviours\Quack as Quack;
use StrategyPatternTutorial\DuckBehaviours\FlyWithWings as FlyWithWings;

/**
 * Redhead Duck class to show different behaviours within this example
 */
class RedheadDuck extends Duck {

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
		return "This is a Redhead Duck. I legitimately had no idea this was a type of real duck.";
	}
}