<?php

trait CircleTrait {

	protected $radius;
  
  	public function setRadius(int $radius)
	{
		$this->radius = $radius;
	}

	public function getRadius() : int
	{
		return $this->radius;
	}

}