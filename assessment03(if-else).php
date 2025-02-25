<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <body>
            <h1>Isoscles Triangles</h1>
            <?php
            echo '<h2> Size of Isoscles Triangle should be from 2 to 10.</h2>';

            $x = 1;

            echo '<h2> Side of Isoscles triangle is '.$x. '</h2><br>';

            if($x < 2){
                echo '<h3> Square with side ' .$x. ' is below the minimum dimension. </h3>';
            } elseif($x > 10){
                echo '<h3> Square with side ' .$x. ' exceeds the side dimension. </h3>';
            }
            ?>
        </body>
    </head>
</html>