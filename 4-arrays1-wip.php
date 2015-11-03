<?php

$plainvar = "some text";

$months = array('january', 'february', 'march');

?>
<!doctype html>
<html>
<head>
    <title>Arrays Pt 1</title>
</head>
<body>
    <p>Shorthand echo available from php 5.4</p>
    <?=$plainvar;?>
    <hr />
    <?php
    //dump out variables
    var_dump($months);

    //another way to dump out variables
    print_r($months);
    ?>
    <p>Return a single item from the array</p>
    <?php
    echo "the month is " . $months[1];
    ?>
    <hr />
    <p>declare an indexed array with the alternate syntax available as of php 5.4 but if use it have to make sure the host is running appropriate version</p>
    <?php
    $idx_family = ['nev simms','clare simms','fred simms'];
    ?>
    <hr />
    <p>delcare associative family array</p>
    <?php
    $assoc_family = array('nev' => '41', 'clare' => '36', 'fred' => '0');
    
    ?>
    <hr />
    <div>Iterate the index array foreach($array as $value)</div>
    <div><strong>Note:</strong> here we can simply echo variable within strings as using double quotes. cannot do with single quotes. in that case need proper concatenation</div>
    <ul>
        <?php
        foreach($idx_family as $member)
        {
            echo "<li>$member</li>";
        }
        ?>
    </ul>
    <hr />
    <div>Iterate the associative array foreach($array as $key => $value)</div>
    <ul>
        <?php
        foreach($assoc_family as $name => $age)
        {
            printf("<li>%s is %s</li>", $name, $age);
        }
        ?>
    </ul>

</body>
</html>
