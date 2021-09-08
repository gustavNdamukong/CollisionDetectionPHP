<?php

trait CircleTrait {

	protected $radius;
  
  	public function setRadius($radius)
	{
		$this->radius = $radius;
	}

	public function getRadius()
	{
		return $this->radius;
	}

}