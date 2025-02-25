<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment 03</title>
</head>
<body>
    <h1>Isosceles Triangles</h1>
<?php 
$triangle_size =3; //the size of the triangle
 
//use to create class for isosclese triangle
class isoscelestriangle{
    private $size;
    public function __construct($size){
        $this->size = $size;
    }
        public function displaysize(){
            echo "Side of isosceles triangle is " . $this->size . "<br>";
        }
}

//conditional statements use to identify if the size is between 2 to 10
if ($triangle_size < 2){
    echo"Size of isosceles triangle should be from 2 to 10";
 $triangle = new isoscelestriangle($triangle_size);
 $triangle -> displaysize();
    echo"Square with side ". $triangle_size . " is below the minimum dimension";
}
elseif($triangle_size > 10){
   echo"Size of isosceles triangle should be from 2 to 10";
   $triangle = new isoscelestriangle($triangle_size);
   $triangle -> displaysize();
   echo "Square with side " . $triangle_size . " exceeds the side dimension";
}

?>  
</body>
</html>
