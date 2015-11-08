<?php
$months = array('jan', 'feb', 'march' ,'apr', 'may');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Arrays Pt 2</title>
</head>
<body>
    <p>Add item to end of array</p>
    <div>One way</div>
    <?php
    //two ways to add values to the array
    array_push($months, 'june');

    var_dump($months);
    ?>
    <div>Second way</div>
    <?php
    //short hand way
    $months[] = 'july';

    print_r($months);
    ?>
    <hr />
    <p>remove item from end of array</p>
    <?php
    array_pop($months);
    print_r($months);
    ?>
    <p>Keep a reference to the item removed</p>
    <div>this works with all of the array functions i.e. you can assign the result to a variable for subsequent use</div>
    <?php
    $output = array_pop($months);
    print_r($output);
    ?>
    <p>Remove item from beginning of array</p>
    <?php 
    array_shift($months);
    print_r($months);
    ?>
    <p>add item to beginning af array</p>
    <?php
    array_unshift($months, 'jan');
    print_r($months);
    ?>
    <p>Slice values to a new array</p>
    <?php
    $ouput = array_slice($months, 2, 3);
    print_r($ouput);
    ?>
    <p>Filter the array</p>
    <?php
    var_dump($months);
    $output = array_filter($months, function($month){return strlen($month) == 3;});
    var_dump($output);
    ?>

</body>
</html>
