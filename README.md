
# Demonstration of collision detection of two rectangles or circles in PHP
    - Run the code on the PHP CLI like so
 ```
    php -f collide.php
 ```

# How it works
    - When asked to enter the shape type; type in either 'rectangle' or 'circle' (without the quotes)

    - Depending on the shape you keyed in, you will be asked to type in the coordinates that will be used to establish the shape's position.

    - The rules for this are as follows:

        - Rectangles need 4 parameters: x coordinate, the y coordinate, and width and height of the rectangle (all integers)

        - Circles need just three parameters: the x coordinate, the y coordinate, and the radius of the circle (all integers)

        - Separate all parameters with commas like so: 50,80,30

        - Once you submit your coordinates; if your shape is a circle, the system will create a counter circle or random size and coordinates that

            your circle will be trying to collide with. Likewise, if your shape was a rectangle; the system will create a matching circle of random

            dimensions and coordinates for your rectangle to try and collide with.

        - The system-generated shape is shape1 while yours is shape2. The system will start moving your shape to random x-y coordinates in a

            loop while checking for a collision with rectangle 1 after every move iteration.

        - The program exits when a collision is detected, and it displays a report on the exact coordinates of both shapes when the collision happened,

            and the number of moves made.


