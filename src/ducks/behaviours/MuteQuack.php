<?php

namespace StrategyPatternTutorial\DuckBehaviours;

/**
 * Concrete class of MuteQuack for ducks that do no make a sound
 */
class MuteQuack implements QuackBehaviour {

	/**
	 * Returns the below string to the CLI
	 * @return string
	 */
	public function quack() {
		return "[[[crickets]]]";
	}
}