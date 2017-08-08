<?php

namespace StrategyPatternTutorial\DuckBehaviours;

/**
 * Concrete class of Quack for ducks that make the expected quack sound
 */
class Quack implements QuackBehaviour {

	/**
	 * Returns the below string
	 * @return string
	 */
	public function quack() {
		return "Quack";
	}
}