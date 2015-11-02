<?php
$months = array('jan', 'feb', 'mar' ,'apr', 'may');

//two ways to add values to the array
array_push($months, 'june');

var_dump($months);
echo "<br>";
//short hand way
$months[] = 'july';
print_r($months);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Arrays Pt 2</title>
    </head>
    <body>

    </body>
</html>