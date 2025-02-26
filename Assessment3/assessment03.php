<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment 03: Web Page Creation</title>
</head>
<body>
    <h1>Isosceles Triangles</h1>
    <h3>Size of isosceles triangle should be from 2 to 10. </h3>
<?php 
$triangle_size =6; //the size of the triangle
 
//use to create class for isosclese triangle
class isoscelestriangle{
    private $size;
    public function __construct($size){
        $this->size = $size;
    }
        public function displaysize(){
            echo "<h3>Side of isosceles triangle is " . $this->size . "</h3> ";
        }
}

//conditional statements use to identify if the size is between 2 to 10
if ($triangle_size < 2){
 $triangle = new isoscelestriangle($triangle_size);
 $triangle -> displaysize();
    echo"<h4>Square with side ". $triangle_size . " is below the minimum dimension.</h4>";
}
elseif($triangle_size > 10){
   $triangle = new isoscelestriangle($triangle_size);
   $triangle -> displaysize();
   echo "<h4>Square with side " . $triangle_size . " exceeds the side dimension.</h4>";
}
else{
    $triangle = new isoscelestriangle($triangle_size);
    $triangle -> displaysize();
    echo "<pre>"; // use to maintain the shape of the triangles
        
    //Triangle 1
    for ($i = 0; $i < $triangle_size; $i++) {
    // Inner loop to handle number of columns
    for ($j = 0; $j <= $i; $j++) {
        // Printing stars
        echo "* ";
    }
    // Just to break line, after loop for each row is completed
    echo "\n";
}
 
    echo"<br>";
      //Triangle 2
for ($i = $triangle_size; $i > 0; $i--) { 
    // Inner loop to print stars
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo "\n"; //For new line
}

echo"<br>";

  //Triangle 3
for ($i = $triangle_size; $i > 0; $i--) { 
    // For spaces  
    for ($k = 0; $k < ($triangle_size - $i); $k++) {
        echo "&nbsp;&nbsp;"; // Two spaces for alignment
    }
    // Print stars
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }

    echo "<br>";  //For new line
}
echo"<br>";
  //Triangle 4
for ($i = 1; $i <= $triangle_size; $i++) { 
    // For spaces  
    for ($k = 0; $k < ($triangle_size - $i); $k++) {
        echo "&nbsp;&nbsp;"; // Two spaces for alignment
    }

    // Print stars
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }

    echo "<br>"; // New line after each row
}   
    echo "</pre>";
}
?>  
</body>
</html>
