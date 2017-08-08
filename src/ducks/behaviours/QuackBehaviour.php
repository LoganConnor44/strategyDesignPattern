<?php

namespace StrategyPatternTutorial\DuckBehaviours;

/**
 * An interface for all quack behaviours to implement
 */
interface QuackBehaviour {

	/**
	 * An Abstract Method for any object that implements FlyBehaviour
	 * @return string
	 */
	public function quack();
}