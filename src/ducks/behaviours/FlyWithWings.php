<?php

namespace StrategyPatternTutorial\DuckBehaviours;

/**
 * Concrete class of FlyWithWings for real ducks with wings
 */
class FlyWithWings implements FlyBehaviour {

	/**
	 * Returns the below message when the method is called
	 * @return string
	 */
	public function fly() {
		return "I'm flying because of my own two wings!!!";
	}
}