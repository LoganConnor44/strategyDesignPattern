<?php

namespace StrategyPatternTutorial\DuckBehaviours;

interface QuackBehaviour {

	/**
	 * An Abstract Method for any object that implements FlyBehaviour
	 * @return void
	 */
	public function quack();
}