<?php

trait RectangleTrait {

	protected $width;

	protected $height;


  	public function setWidth($width)
	{
		$this->width = $width;
	}

	public function getWidth()
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