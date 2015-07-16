<?php

abstract class Money {
	public $amount;
	public $currency;

	public function equals($other) {
		return get_class($this) == get_class($other) && $this->amount == $other->amount;
	}

	abstract function times($factor);
	
	function currency() {
		return $this->currency;
	}

	public static function dollar($amount) {
		return new Dollar($amount);
	}
	
	public static function franc($amount) {
		return new Franc($amount);
	}
}