<?php

trait RectangleTrait {

	protected $width;

	protected $height;


  	public function setWidth(int $width)
	{
		$this->width = $width;
	}

	public function getWidth() : int
	{
		return $this->width;
	}

	public function setHeight(int $height)
	{
		$this->height = $height;
	}

	public function getHeight() : int
	{
		return $this->height;
	}
}