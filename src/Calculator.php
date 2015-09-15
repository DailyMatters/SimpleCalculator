<?php

namespace package\Calculator;

class Calculator{

	/**
	* BASIC OPERATIONS
	*/
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

	/*
	* PERCENTAGE
	*/
	public function percentage( $a1, $a2 ){
		//This will return $a1 percent of $a2
		return ( $a1 / $a2 ) * 100;
	}

}