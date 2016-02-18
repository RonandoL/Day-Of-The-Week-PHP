<?php
	 class DayOfWeek
		{
		private $month;
		private $day;
		private $year;

		function __construct($month, $day, $year)
		{
			$this->month = $month;
			$this->day = $day;
			$this->year = $year;
		}


		function makeWeekDay()
		{
			return date("l", mktime(0, 0, 0, $this->month, $this->day, $this->year));
		}

	 	function getMonth()
		{
			return $this->month;
		}

	 	function getDay()
		{
			return $this->day;
		}

	 	function getYear()
		{
			return $this->year;
		}
















	}
 ?>
