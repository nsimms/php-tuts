<?php

/**
 * arrays1 short summary.
 *
 * arrays1 description.
 *
 * @version 1.0
 * @author nsimms
 */
$plainvar = "some text";

$months = array('january', 'february', 'march');

//dump put variables
var_dump($months);

//another way to dump put variables
print_r($months);


echo '<br> Month is ' . $months[0] . '<br>';

/*
* Can also decalre an array with alternate syntax as of php 5.4 but if use it have to make sure the host is running appropriate version
*/
//$idx_family = array('nev', 'clare', 'fred');

$idx_family = ['nev simms', 'clare simms', 'fred simms'];


$assoc_family = array('nev' => '41', 'clare' => '36', 'fred' => '0');

foreach($assoc_family as $name => $age)
{
    printf("%s is %s <br>", $name, $age);
}

?>
<!doctype html>
<html>
    <head>
        <title>Arrays Pt 1</title>
    </head>
    <body>
        <br />
        <div>Shorthand echo available from php 5.4</div>
        <?= $plainvar; ?>
        <br />
        <div>Iterate the index array foreach($array as $value)</div>
        <ul>
            <?php
            foreach($idx_family as $name)
                //Note here we can simply echo variable within strings as using double quotes. cannot do with single quotes. in that case need proper concatenation
                echo "<li>$name</li>";
            ?>
        </ul>
        <div>Iterate the associative array foreach($array as $key => $value)</div>
        <ul>
            <?php 
            foreach($assoc_family as $name => $age)
                printf("<li>%s is %s</li>", ucwords($name), $age );
            ?>
        </ul>

    </body>
</html>
