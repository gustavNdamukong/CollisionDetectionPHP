<?php

class Circle extends Shape
{

	use CircleTrait;


	public function __construct(int $xCoord, int $yCoord, int $radius)
	{
		parent::__construct('circle', $xCoord, $yCoord);

		$this->setRadius($radius);
	}

	

}