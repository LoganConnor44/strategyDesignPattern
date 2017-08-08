<?php

namespace StrategyPatternTutorial\DuckBehaviours;

class FlyWithWings implements FlyBehaviour {

	/**
	 * Returns the below message when the method is called
	 * @return string
	 */
	public function fly() {
		return "I'm flying because of my own two wings!!!";
	}
}