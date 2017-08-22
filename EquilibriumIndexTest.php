<?php

require_once("./EquilibriumIndex.php");

// phpunit 6 and up needs \PHPUnit\Framework\TestCase
class EquilibriumIndex extends \PHPUnit\Framework\TestCase
{
	public function testCase()
	{
		$arr = array(-7, 1, 5, 2, -4, 3, 0);
		$this->assertEquals(array(3,6), getEquilibriums($arr));
	}
}
