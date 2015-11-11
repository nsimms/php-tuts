<?php
$month = 'feb';
?>
<p>If else with truthy's</p>
<?php
if($month)
    echo "coooorec";
else
    echo "naaa mate";


?>
<hr />
<p>Switch</p>
<?php
    switch($month) {
        case 'jan':
        echo "cool";
            break;
        case 'feb':
            echo 'cooler';
            break;
        default:
                echo 'not cool dude';
    }
?>
<hr />
<p>Array lookup</p>
<?php

$months = ['jan','feb','mar','apr'];

echo $months[3];

?>
<hr />
<p>If with and</p>
<?php
if($months[0] == 'jan' && $months[3] == 'apr')
    echo "yaaaar baby";
    else
    echo "heeeeell no";
?>

<hr />
<p>If with or</p>
<?php
if($months[2] == 'mar' || $months[1] == 'asdsdsa')
    echo 'alrighty then';
else
    echo 'hot dang';
?>

<hr />

