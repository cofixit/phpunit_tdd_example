<?php

require('src/Fibonacci.php');

class FibonacciTest extends PHPUnit_Framework_TestCase {

	public function testFibonacci() {
		$cases = array(
			array(0, 0),
			array(1, 1),
			array(2, 1),
			array(3, 2),
			array(4, 3), 
			array(5, 5), 
			array(6, 8),
		);
		$f = new Fibonacci();
		foreach($cases as $case) {
			$this->assertEquals($case[1], $f->fib($case[0]));
		}
	}
}