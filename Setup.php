<?php


class Setup
{
	protected $shape1;
	protected $shape2;
	public $numMoves = 0;
	protected $shapeTypes = [
		'Circle',
		'Rectangle'
	];

	function checkShape($shape)
	{
		if (class_exists($shape)) {
			return true;
		}
		else {
			false;
		}
	}

	function setShape1($shape1)
	{
		$this->shape1 = $shape1;
	}


	function setShape2($shape2)
	{
		$this->shape2 = $shape2;
	}

	public function showShapeTypes()
	{
		$nameString = implode(', ', $this->shapeTypes);

		return $nameString;
	}





	public function terminateMove()
	{
		$this->endMove = true;
	}

    public function readline()
	{
		return rtrim(fgets(STDIN));
	}



	/**
	 * Manages the moves. The rules are:
	 * Shape2 is the only shape moving. Shape1 stays put until shape2 collides with it at which point the move 
     * ends. Move the shape to the given x-y coordinates.
	 */
	function move(&$shape2, $toX, $toY)
	{
		$shape2->setXcoord($toX);
		$shape2->setYcoord($toY);
		$this->numMoves++;
	}



	public function coordsCheck($shape1, $shape2)
	{
		$type = ucfirst($shape1->getType());

		$shape1Report = $type."1 is at x: ".$shape1->getXcoord()." y: ".$shape1->getYcoord()." ";
		$shape2Report = $type."2 is at x: ".$shape2->getXcoord()." y: ".$shape2->getYcoord()." ";

		$scoreString = $shape1Report.$shape2Report.PHP_EOL;

		return $scoreString;
	}


	/**
	 * @param $type
	 * @param $shape1
	 * @param $shape2
	 * @return bool
	 */
	public function collision($shape1, $shape2) : bool
	{
		if (strtolower($shape1->getType()) == 'rectangle')
		{
			if ($shape1->getXcoord() < $shape2->getXcoord() + $shape2->getWidth() &&
				$shape1->getXcoord() + $shape1->getWidth() > $shape2->getXcoord() &&
				$shape1->getYcoord() < $shape2->getYcoord() + $shape2->getHeight() &&
				$shape1->getYcoord() + $shape1->getHeight() > $shape2->getYcoord()) {
				// collision detected!
				return true;
			}
			else
			{
				return false;
			}
		}
		else if (strtolower($shape1->getType()) == 'circle')
		{
			$dx = $shape1->getXcoord() - $shape2->getXcoord();
			$dy = $shape1->getYcoord() - $shape2->getYcoord();
			$distance = sqrt($dx * $dx + $dy * $dy);

			if ($distance < $shape1->getRadius() + $shape2->getRadius()) {
				// collision detected!
				return true;
			}
			else
			{
				return false;
			}
		}
		return false;
	}



	public function collisionReport($shape1, $shape2)
	{
		$type = ucfirst($shape1->getType());
		$numberOfMoves = "Number of moves: ".$this->numMoves.PHP_EOL;
		$shape1Report = $type." 1 coords: x: ".$shape1->getXcoord()." y: ".$shape1->getYcoord();
		$shape2Report = $type." 2 coords: x: ".$shape2->getXcoord()." y: ".$shape2->getYcoord();

		$scoreString = "A Collision happened at: ".$shape1Report." ".$shape2Report." .".$numberOfMoves.PHP_EOL;

		return $scoreString;
	}

}