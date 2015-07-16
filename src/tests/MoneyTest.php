<?php

require_once('src/Dollar.php');
require_once('src/Franc.php');
require_once('src/Money.php');

class MoneyTest extends PHPUnit_Framework_TestCase {

    public function testMultiplication() {
        $five = Money::dollar(5);
        $this->assertEquals(5, $five->amount);
        
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);

		$product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

    public function testEquality() {
    	$d1 = Money::dollar(5);
    	$d2 = Money::dollar(5);
    	$d3 = Money::dollar(6);
    	$f1 = Money::franc(5);
    	$f2 = Money::franc(5);
    	$f3 = Money::franc(6);
    	$this->assertTrue($d1->equals($d2));
    	$this->assertFalse($d1->equals($d3));
    	
    	$this->assertTrue($f1->equals($f2));
    	$this->assertFalse($f1->equals($f3));

    	$this->assertFalse($f1->equals($d1));
    }

    public function testFrancMultiplication() {
        $five = Money::franc(5);
        $this->assertEquals(5, $five->amount);
        
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);

		$product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

    public function testCurrency() {
    	$d = Money::dollar(1);
    	$f = Money::franc(1);

    	$this->assertEquals("USD", $d->currency());
    	$this->assertEquals("CHF", $f->currency());
    }
}
