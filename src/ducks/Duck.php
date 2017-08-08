<?php

namespace StrategyPatternTutorial\Ducks;

/**
 * A parent abstract class for all children Ducks to pull from
 */
abstract class Duck {

	/**
	 * An object defining a Duck's fly behaviour
	 * @var FlyBehaviour
	 */ 
	protected $FlyBehaviour;

	/**
	 * An object defining a Duck's quack behaviour
	 * @var QuackBehaviour
	 */
	protected $QuackBehaviour;

	/**
	 * An abstract function to display a Duck object
	 */
	public abstract function display();

	/**
	 * Sets the fly behaviour of a Duck object if it needs to be changed
	 */
	public function setFlyBehaviour(FlyBehaviour $flyBehvr) {
		$this->FlyBehaviour = $flyBehvr;
	}

	/**
	 * Sets the quack behaviour of a Duck object if it needs to be changed
	 */
	public function setQuackBehaviour(QuackBehaviour $quackBehvr) {
		$this->QuackBehaviour = $quackBehvr;
	}

	/**
	 * Allows the Duck object to 'swim' via the CLI
	 * @return string
	 */
	public function swim(){
		return "We all float down here.";
	}

	/**
	 * Performs fly on a Duck object
	 * @return string
	 */
	public function performFly() {
		return $this->FlyBehaviour->fly();
	}

	/**
	 * Performs quack on a Duck object
	 * @return string
	 */
	public function performQuack() {
		return $this->QuackBehaviour->quack();
	}
}