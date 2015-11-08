<?php
$month = 'january';
?>
<p>If else with truthy's</p>
<?php
if($month == 'feb')
    echo "month is january";
  else 
    echo "month is $month";
?>
<hr />
<p>Switch</p>
<?php
    switch($month) {
        case 'january':
        echo 'jav';
            break;
        case 'feb':
            echo 'feb';
            break;
        default:
            echo 'none';
    }

?>
<hr />
<p>Array lookup</p>
<?php
$family = array('nev' => 'nev is the daddy', 'clare' => 'clare is the mummy', 'freddy' => "freddy is the best son");

echo $family['freddy'];
?>
<hr />
<p>If with and</p>
<?php
if($month == 'january' && true === true){
    echo "booya";
}
?>

<hr />
<p>If with or</p>
<?php
    if($month == 'january' || $month == 'february')
    {
        echo "bada boom";
    }
?>

<hr />