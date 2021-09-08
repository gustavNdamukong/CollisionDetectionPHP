<?php

class Rectangle extends Shape
{

	use RectangleTrait;


	public function __construct(int $xCoord, int $yCoord, int $width, int $height)
	{
		parent::__construct('rectangle', $xCoord, $yCoord);

		$this->setWidth($width);
		$this->setHeight($height);

	}

}