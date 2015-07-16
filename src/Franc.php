<?php

require_once('src/Money.php');

class Franc extends Money {

	public function __construct($amount) {
		$this->amount = $amount;
		$this->currency = "CHF";
	}

	public function times($multiplier) {
		return new self($this->amount * $multiplier);
	}
}