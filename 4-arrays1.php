<?php

/**
 * arrays1 sho
 * rt summary.
 *
 * arrays1 description.
 *
 * @version 1.0
 * @author nsimms
 */
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
    <?= $plainvar; ?>
    <br />
    <hr />
    <?php
    //dump out variables


    //another way to dump out variables

    ?>
    <p>Return a single item from the array</p>
    <?php
    echo '<br> Month is ' . $months[0] . '<br>';
    ?>
    <hr />
    <p>decalre an array with alternate syntax as of php 5.4 but if use it have to make sure the host is running appropriate version</p>
    <?php
    //$idx_family = array('nev', 'clare', 'fred');

    $idx_family = ['nev simms', 'clare simms', 'fred simms'];
    ?>
    <hr />


    <div>Iterate the index array foreach($array as $value)</div>
    <div><strong>Note:</strong> here we can simply echo variable within strings as using double quotes. cannot do with single quotes. in that case need proper concatenation</div>

    <ul>
        <?php
        foreach($idx_family as $name)
        {
        ?>
        <?php
            echo "<li>$name</li>";
        }
        ?>
    </ul>
    <hr />
    <div>Iterate the associative array foreach($array as $key => $value)</div>
    <ul>
        <?php
        $assoc_family = array('nev' => '41', 'clare' => '36', 'fred' => '0');
        foreach($assoc_family as $name => $age)
            printf("<li>%s is %s</li>", ucwords($name), $age );
        ?>
    </ul>

</body>
</html>
