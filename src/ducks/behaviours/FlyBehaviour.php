<?php

namespace StrategyPatternTutorial\DuckBehaviours;

/**
 * An interface for all fly behaviours to implement
 */
interface FlyBehaviour {

	/**
	 * An Abstract Method for any object that implements FlyBehaviour
	 * @return string
	 */
	public function fly();
}