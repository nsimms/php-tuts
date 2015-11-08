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
    array_push($months, 'jun');
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
    $output = array_pop($months);
    var_dump($output);
    echo "item popped is " . $output;
    
    ?>
    <p>Keep a reference to the item removed</p>
    <?php 

    ?>
    <div><strong>Note:</strong> This works with all of the array functions i.e. you can assign the result to a variable for subsequent use</div>
    <hr />
    <p>Remove item from beginning of array</p>
    <?php 
    $output = array_shift($months);
    echo "items removed from beginning of array was $output";
    
    ?>
    <hr />
    <p>add item to beginning af array</p>
    <?php
    array_unshift($months, 'jan');
    var_dump($months);
    ?>
    <hr />
    <p>Slice values to a new array get another array with feb and march</p>
    <?php
    $output = array_slice($months, 1, 2);
    var_dump($output);
    ?>
    <hr />
    <p>Filter the array</p>
    <?php
    $output = array_filter($months, function($item){ return strlen($item) == 3;});
    var_dump($output);
    ?>

</body>
</html>
