<?php

require_once('src/Money.php');

class Dollar extends Money {

	public function __construct($amount) {
		$this->amount = $amount;
		$this->currency = "USD";
	}

	public function times($multiplier) {
		return new self($this->amount * $multiplier);
	}
}