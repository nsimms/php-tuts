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
    <?=$plainvar?>
    <hr />
    <?php
    //dump out variables
    var_dump($months);

    //another way to dump out variables
    print_r($months);
    ?>
    <p>Return a single item from the array</p>
    <?php
    echo $months[0];
    ?>
    <hr />
    <p>declare an indexed array with the alternate syntax available as of php 5.4 but if use it have to make sure the host is running appropriate version</p>
    <?php
    $idx_family = ['nev', 'clare','freddy'];

    var_dump($idx_family);
    ?>
    <hr />
    <p>delcare associative family array</p>
    <?php
    $assoc_family = array('dad' => 'nev', 'mum' => 'clare', 'son' => 'fred');
    
    var_dump($assoc_family);
    ?>
    <hr />


    <div>Iterate the index array ouputing a list</div>
    <div><strong>Note:</strong> here we can simply echo variable within strings as using double quotes. cannot do with single quotes. in that case need proper concatenation</div>
    <ul>
    <?php
    foreach($idx_family as $item)
    {
        echo "<li>$item</i>";
    }

    ?>
    </ul>
    <ul>
        <?php

        ?>
    </ul>
    <hr />
    <div>Iterate the associative array outputing a list</div>
    <ul>
        <?php
        foreach($assoc_family as $role => $name)
        {
        
            printf("<li>%s is the %s</li>", $name, $role);
        }
        ?>
    </ul>

</body>
</html>
