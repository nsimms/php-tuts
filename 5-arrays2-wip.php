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
    array_pop($months);
    
    var_dump($months);
    
    ?>
    <p>Keep a reference to the item removed</p>
    <?php 
    $output = array_pop($months);

    echo $output;?>
    <div><strong>Note:</strong> This works with all of the array functions i.e. you can assign the result to a variable for subsequent use</div>
    <hr />
    <p>Remove item from beginning of array</p>
    <?php 
    
    array_shift($months);
    
    var_dump($months);
    
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
    var_dump(array_slice($months, 1,2));
    ?>
    <hr />
    <p>Filter the array</p>
    <?php
    $output = array_filter($months, function($month){ return strlen($month) == 3;});
    
    var_dump($output);
    ?>

</body>
</html>
