<?php

include("Setup.php");
include("Shape.php");
include("CircleTrait.php");
include("RectangleTrait.php");
include("Circle.php");
include("Rectangle.php");


//initialise some vars
$name;
$type = "";
$parametersPrompt = "";
$parameters;
$ShapeTypePrompt  = "Enter type of shape eg rectangle or circle: ";

$setup = new Setup();
echo $ShapeTypePrompt;
$name = $setup->readline();

//check what kind of shape it is. If circle, ask them to enter x, & y coords and the radius
//If shape is rectangle, ask them to enter x, & y coords, and width, height
if (strtolower($name) == 'circle')
{
	$type = ucfirst($name);
	$parametersPrompt = "Enter the circle x and y coordinates and the radius eg 10,10,30 : ";
}
else if (strtolower($name) == 'rectangle')
{
	$type = ucfirst($name);
	$parametersPrompt = "Enter the rectangle x and y coordinates, and width and height eg 20,20,40,30 : ";
}
else
{
	echo "The shape $name does not exist! It must be one of the following: "
		.$setup->showShapeTypes().'. Try again. ';
	exit();
}

echo $parametersPrompt;
$parameters = $setup->readline();

//create the the shapes depending on the type of shape they entered
if ($type == 'Rectangle')
{
	//create the two rectangles
	//rectangle 1
	$rec1x = rand(5, 50);
	$rec1y = rand(5, 50);
	$rec1width = rand(10, 50);
	$rec1height = rand(10, 50);
	$rectangle1 = new Rectangle($rec1x, $rec1y, $rec1width, $rec1height);

	//rectangle 2
	$captured = explode(',', $parameters);
	$rec2x = $captured[0];
	$rec2y = $captured[1];
	$rec2width = $captured[2];
	$rec2height = $captured[3];
	$rectangle2 = new Rectangle($rec2x, $rec2y, $rec2width, $rec2height);

	//start moving rectangle 2 randomly in a loop, checking for a collision with rectangle 1 after every move.
	//exit when collision is detected.
	echo $setup->coordsCheck($rectangle1, $rectangle2);
	while ($setup->collision($rectangle1, $rectangle2) == false)
	{
		$toX = rand(25, 100);
		$toY = rand(25, 100);
		echo $setup->coordsCheck($rectangle1, $rectangle2);
		$setup->move($rectangle2, $toX, $toY);
	}

	echo $setup->collisionReport($rectangle1, $rectangle2);
}

if ($type == 'Circle')
{
	//create the two circles
	//circle 1
	$circle1x = rand(5, 50);
	$circle1y = rand(5, 50);
	$circle1radius = rand(10, 50);
	$circle1 = new Circle($circle1x, $circle1y, $circle1radius);

	//circle 2
	$captured = explode(',', $parameters);
	$xCoord = $captured[0];
	$yCoord = $captured[1];
	$radius = $captured[2];
	$circle2 = new Circle($xCoord, $yCoord, $radius);

	//start moving rectangle 2 randomly in a loop, checking for a collision with rectangle 1 after every move.
	//exit when collision is detected.
	echo $setup->coordsCheck($circle1, $circle2);
	while ($setup->collision($circle1, $circle2) == false)
	{
		$toX = rand(25, 100);
		$toY = rand(25, 100);
		echo $setup->coordsCheck($circle1, $circle2);
		$setup->move($circle2, $toX, $toY);
	}

	echo $setup->collisionReport($circle1, $circle2);
}

exit();



