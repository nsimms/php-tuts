<?php
$month = 'january';
?>
<p>If else with truthy's</p>
<?php
if($month = 'january')
    echo "month is " . $month . "<br>";

if($month == true)
    echo "month = true evaluates to true as it's truthy i.e. in this case non empty string. change to === and this won;t appear ";
?>
<hr />
<p>Switch</p>
<?php
switch($month) {
    case 'january':
        echo "its jan";
        break;

    case 'february':
        echo "its feb";
        break;

    default:
        echo "its none of em";

}
?>
<hr />
<p>Array lookup</p>
<?php
$months = ["jan" => "the month is january", "feb" => "the month is February", 'march' => "the month is March"];

echo $months['feb'];
?>
<hr />
<p>If with and</p>
<?php
if ($month != 'feb' && $month != 'mar')
    echo "month doesn't equal feb or mar";
?>

<hr />
<p>If with or</p>
<?php
if($month === 'january' || $month === 'february')
    echo "month is jan or feb";
?>

<hr />

