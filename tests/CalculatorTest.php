<?php

use package\Calculator\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {
 
  public function testAdd()
  {
    $calculator = new Calculator();
    $result = $calculator->add( 2, 3 );
    $this->assertEquals( $result, 5 );
  }

  public function testSubtract()
  {
  	$calculator = new Calculator();
    $result = $calculator->subtract( 6, 3 );
    $this->assertEquals( $result, 3 );
  }

  public function testMultiply()
  {
  	$calculator = new Calculator();
    $result = $calculator->multiply( 6, 3 );
    $this->assertEquals( $result, 18 );
  }

  public function testDivide()
  {
  	$calculator = new Calculator();
    $result = $calculator->divide( 6, 3 );
    $this->assertEquals( $result, 2 );
  }

  public function testDivideByZero()
  {
    $calculator = new Calculator();
    $result = $calculator->divide( 6, 0 );
    $this->assertFalse( $result );
  }

  public function testPercentage(){
    $calculator = new Calculator();
    $result = $calculator->percentage( 2, 50 );
    $this->assertEquals( $result, 4 );
  }

  public function testPi(){
    $calculator = new Calculator();
    $result = $calculator->pi();
    $this->assertEquals( $result, pi() );
  }

  public function testLog(){
    $calculator = new Calculator();
    $result = $calculator->log(10);
    $this->assertEquals( $result, 1 );
  }
 
}