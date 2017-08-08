<?php

namespace StrategyPatternTutorial\DuckBehaviours;

interface FlyBehaviour {

	/**
	 * An Abstract Method for any object that implements FlyBehaviour
	 * @return string
	 */
	public function fly();
}