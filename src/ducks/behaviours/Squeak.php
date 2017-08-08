<?php

namespace StrategyPatternTutorial\DuckBehaviours;

class Squeak implements QuackBehaviour {

	/**
	 * Prints the below string to the CLI
	 */
	public function quack() {
		print "Squeak";
	}
}