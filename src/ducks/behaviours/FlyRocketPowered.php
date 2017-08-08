<?php

namespace StrategyPatternTutorial\DuckBehaviours;

class FlyRocketPowered implements FlyBehaviour {

	/**
	 * Returns the below message when the method is called
	 * @return string
	 */
	public function fly() {
		return "Now launching via SpaceX.";
	}
}