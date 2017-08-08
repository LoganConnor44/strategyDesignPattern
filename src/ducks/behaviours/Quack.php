<?php

namespace StrategyPatternTutorial\DuckBehaviours;

class Quack implements QuackBehaviour {

	/**
	 * Returns the below string
	 * @return string
	 */
	public function quack() {
		return "Quack";
	}
}