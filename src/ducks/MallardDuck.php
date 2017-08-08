<?php

namespace StrategyPatternTutorial\Ducks;

use StrategyPatternTutorial\DuckBehaviours\Quack;
use StrategyPatternTutorial\DuckBehaviours\FlyWithWings as FlyWithWings;

class MallardDuck extends Duck {
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