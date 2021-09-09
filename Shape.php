<?php

class Shape
{
    protected $type = '';
	protected $xCoord = 0;
	protected $yCoord = 0;

	public function __construct(string $type, int $xCoord, int $yCoord)
	{
		$this->type = $type;
		$this->xCoord = $xCoord;
		$this->yCoord = $yCoord;
	}

	public function setType(string $type)
	{
		$this->type = $type;
	}

    public function getType() : string
	{
		return $this->type;
	}

    public function setXcoord(int $xCoord)
	{
		$this->xCoord = $xCoord;
	}

	public function getXcoord() : int
	{
		return $this->xCoord;
	}

    public function setYcoord(int $yCoord)
	{
		$this->yCoord = $yCoord;
	}

	public function getYcoord() : int
	{
		return $this->yCoord;
	}

}