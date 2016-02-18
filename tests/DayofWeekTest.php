<?php

	require_once 'src/DayOfWeek.php';

	class DayOfWeekTest extends PHPUnit_Framework_TestCase
	{

		function test_makeWeekDay_date()
		{
		//Arrange
		$test_DayOfWeek = new DayOfWeek(2, 18, 2016);

		//Act
		$result = $test_DayOfWeek->makeWeekDay();

		//Assert
		$this->assertEquals('Thursday', $result);
		}

	}

?>
