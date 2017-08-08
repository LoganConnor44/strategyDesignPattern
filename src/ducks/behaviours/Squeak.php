<?php

namespace StrategyPatternTutorial\DuckBehaviours;

/**
 * Concrete class of Squeak for false ducks... also referred to as "The One"
 */
class Squeak implements QuackBehaviour {

	/**
	 * Returns the below string to the CLI
	 * @return string
	 */
	public function quack() {
		return "Squeak";
	}
}