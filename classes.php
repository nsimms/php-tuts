<?php
require "classes/clsCar.php";

$car = new clsCar();
$car->make = "Audi";
$car->model = "TT";


echo $car->drive(50);

var_dump($car);
?>