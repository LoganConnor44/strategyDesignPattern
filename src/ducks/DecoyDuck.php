<?php

namespace StrategyPatternTutorial\Ducks;

use StrategyPatternTutorial\DuckBehaviours\Quack;
use StrategyPatternTutorial\DuckBehaviours\FlyWithWings as FlyWithWings;

class DecoyDuck extends Duck {
	public function __construct() {
		$this->QuackBehaviour = new Quack();
		$this->FlyBehaviour = new FlyWithWings();
	}

	/**
	 * Returns text
	 * @return string
	 */
	public function display() {
		return "This is a Decoy Duck. I think hunters use this to kill deer... wolves... The world may never know.";
	}
}