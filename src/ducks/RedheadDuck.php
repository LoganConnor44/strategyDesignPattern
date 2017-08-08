<?php

namespace StrategyPatternTutorial\Ducks;

use StrategyPatternTutorial\DuckBehaviours\Quack as Quack;
use StrategyPatternTutorial\DuckBehaviours\FlyWithWings as FlyWithWings;

class RedheadDuck extends Duck {
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