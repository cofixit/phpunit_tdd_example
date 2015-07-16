<?php

class Clemens {

	protected $_req;

	function __construct($myReq) {
		$this->_req = $myReq;
	}

	function projectManagement() {
		echo $this->_req->doRequest();
	}
}

class HTTPReq {
	function doRequest() {
		$request = get("abc");
		return $request;
	}
}

class HTTPReqMocker extends HTTPReq {
	function doRequest() {
		return 1;
	}
}

$oClemens = new Clemens(new HTTPReqMocker);