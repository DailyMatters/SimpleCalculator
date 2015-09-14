<?php

namespace package\Calculator;

class Calculator{

	public function add( $a1, $a2 ){
		return $a1 + $a2;
	}

	public function subtract( $a1, $a2 ){
		return $a1 - $a2;
	}

	public function multiply( $a1, $a2 ){
		return $a1 * $a2;
	}

	public function divide( $a1, $a2 ){

		if( $a2 === 0 ){
			return false;
		}

		return $a1 / $a2;
	}

}