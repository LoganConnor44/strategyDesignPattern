<?php

namespace StrategyPatternTutorial\DuckBehaviours;

class MuteQuack implements QuackBehaviour {

	/**
	 * Prints the below string to the CLI
	 */
	public function quack() {
		print "[[[crickets]]]";
	}
}