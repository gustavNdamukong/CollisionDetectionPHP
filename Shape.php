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

	public function setType($type)
	{
		$this->type = $type;
	}

    public function getType()
	{
		return $this->type;
	}

    public function setXcoord($xCoord)
	{
		$this->xCoord = $xCoord;
	}

	public function getXcoord()
	{
		return $this->xCoord;
	}

    public function setYcoord($yCoord)
	{
		$this->yCoord = $yCoord;
	}

	public function getYcoord()
	{
		return $this->yCoord;
	}

}