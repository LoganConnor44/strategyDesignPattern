<?php

use StrategyPatternTutorial\Ducks\MallardDuck;
use StrategyPatternTutorial\Ducks\RubberDuck;
use StrategyPatternTutorial\Ducks\RedheadDuck;
use StrategyPatternTutorial\Ducks\DecoyDuck;

class DuckTest extends \PHPUnit_Framework_TestCase {

	/**
	 * Example of how to mock an abstract class if needed
	 */
	public function testAbstractDuck() {
		$MockDuck = $this->getMockForAbstractClass('StrategyPatternTutorial\Ducks\Duck');
		$MockDuck->expects($this->any())
			->method('display')
			->will($this->returnValue(NULL));
		$this->assertEquals(NULL, $MockDuck->display());
	}

	/**
	 * Verifies that the printed text is the same for all Ducks
	 */
	public function testSwim() {
		$MallardDuck = new MallardDuck();
		$RubberDuck = new RubberDuck();
		$this->assertSame($RubberDuck->swim(), $MallardDuck->swim());
	}

	/**
	 * Verifies that the returned text is not the same for two Ducks
	 */
	public function testDisplay() {
		$RedheadDuck = new RedheadDuck();
		$DecoyDuck = new DecoyDuck();
		$this->assertThat(
			$RedheadDuck->display(),
			$this->logicalNot(
				$this->equalTo(
					$DecoyDuck->display()
				)
			)
		);
	}

	/**
	 * Verifies that the property $FlyBehaviour is an object and that we are returned expected results
	 */
	public function testFlyBehaviour() {
		$RedheadDuck = new RedheadDuck();

		$Reflection = new ReflectionClass($RubberDuck);
		$ReflecProperty = $Reflection->getProperty('FlyBehaviour');
		$ReflecProperty->setAccessible(TRUE);
		$this->assertTrue(is_object($ReflecProperty));

		$expected = "I'm flying because of my own two wings!!!";
		$this->assertEquals($RedheadDuck->performfly(), $expected);
	}

	public function testQuack() {
		$MallardDuck = new MallardDuck();
		$DecoyDuck = new DecoyDuck();

		$this->assertSame($MallardDuck->performfly(), $DecoyDuck->performfly());
	}
}