<?php

namespace StrategyPatternTutorial\DuckBehaviours;

/**
 * Concrete class of FlyNoWay for ducks that do no fly
 */
class FlyNoWay implements FlyBehaviour {

	/**
	 * Returns the below message when the method is called
	 * @return string
	 */
	public function fly() {
		return "Unfortunately, I can't fly.";
	}
}