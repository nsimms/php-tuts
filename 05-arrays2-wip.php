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
    var_dump($months);
    ?>
    <hr />
    <p>remove item from end of array</p>
    <?php
    array_pop($months);
    print_r($months);
    
    ?>
    <p>Keep a reference to the item removed</p>
    <?php 
    $output = array_pop($months);

    echo $output;
    ?>
    <div><strong>Note:</strong> This works with all of the array functions i.e. you can assign the result to a variable for subsequent use</div>
    <hr />
    <p>Remove item from beginning of array</p>
    <?php 
    $output = array_shift($months);

    echo $output;
    ?>
    <hr />
    <p>add item to beginning of array</p>
    <?php
    $output = array_unshift($months, 'jan');

    echo $output;
    ?>
    <hr />
    <p>Slice values to a new array get another array with feb and march</p>
    <?php
    $slicearr = array_slice($months, 1, 2);
    var_dump($slicearr);
    ?>
    <hr />
    <p>Filter the array</p>
    <?php
    $filterarr = array_filter($months, function ($item){return strlen($item) == 3;});

    print_r($filterarr);
    ?>

</body>
</html>
