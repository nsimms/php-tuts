<?php

/**
 * clsCar short summary.
 *
 * clsCar description.
 *
 * @version 1.0
 * @author Upfront
 */
class clsCar
{
    public $make;
    public $model;
    public $year;

    function drive($speed = 1)
    {
        return sprintf("%s %s driving at %d miles per hour",$this->make, $this->model, $speed);
        //return sprintf("%d", $speed);
    }

}
