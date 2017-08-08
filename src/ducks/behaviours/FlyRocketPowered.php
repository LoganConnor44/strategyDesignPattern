<?php

namespace StrategyPatternTutorial\DuckBehaviours;

/**
 * Concrete class of FlyRocketPowered for ducks that want to be epic
 */
class FlyRocketPowered implements FlyBehaviour {

	/**
	 * Returns the below message when the method is called
	 * @return string
	 */
	public function fly() {
		return "Now launching via SpaceX.";
	}
}