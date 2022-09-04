<?php

class Stepper {
	
	private int $points = 0;
	private int $price = 19900;
	private int $avg = 10;
	private int $stepsPerPoint = 1000;

	public function __construct($points) 
	{
		$this->points = $points;
	}
	
	//ile PUNKTÓW brakuje do nagrody
	public function missingPoints() : int
	{
		return $missingPoints = $this->price - $this->points;
	}

	//ile KROKÓW brakuje do nagrody
	public function missingSteps() : int
	{
		return $missingSteps = $this->missingPoints() * $this->stepsPerPoint;
	}
	
	//za ile DNI wpadnie nnagroda bez reklam
	public function dniPoKrokach(int $steps) : int
	{
		$dniPoKrokach = $this->missingSteps() / $steps;
		return floor($dniPoKrokach);
	}

	//za ile DNI wpadnie nnagroda z reklamami
	public function dniPoKrokachAds(int $steps) : int
	{
		$dniPoKrokachAds = $this->missingPoints() / $this->stepsToPointsAds($steps);
		return floor($dniPoKrokachAds);
	}

	//ile PUNKTÓW za kroki
	public function stepsToPoints($steps) {
		$points = $steps / $this->stepsPerPoint;
		return floor($points);
	}

	//ile PUNKTÓW za same reklamy
	public function bonusPoints($steps) {
		if ($steps < 5000 ) { $bonusPoints = 3; }
		elseif ($steps >= 5000 && $steps < 10000) { $bonusPoints = 5; }
		elseif ($steps >= 10000 && $steps < 15000) { $bonusPoints = 8; }
		elseif ($steps >= 15000 && $steps < 20000) { $bonusPoints = 13; }
		elseif ($steps >= 20000) { $bonusPoints = 23; }
		return $bonusPoints;
	}

	//ile PUNKTÓW za kroki plus reklamy
	public function stepsToPointsAds($steps)
	{
		$pointswithads = $this->stepsToPoints($steps) + $this->bonusPoints($steps);
		return $pointswithads;
	}

	public function kiedy(int $ile) {
		$date = new DateTime();
		$arg = '+'.$ile.' day';
		$date->modify($arg);
		$data = $date->format('Y-m-d');

		return $data;
	}

	public function getData(array $post = [])
	{
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
	}
}