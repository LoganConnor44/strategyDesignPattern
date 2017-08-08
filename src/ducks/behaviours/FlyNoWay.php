<?php

namespace StrategyPatternTutorial\DuckBehaviours;

class FlyNoWay implements FlyBehaviour {

	/**
	 * Returns the below message when the method is called
	 * @return string
	 */
	public function fly() {
		return "Unfortunately, I can't fly.";
	}
}