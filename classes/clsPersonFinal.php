<?php

/**
 * clsPerson short summary.
 *
 * clsPerson description.
 *
 * @version 1.0
 * @author Upfront
 */
class clsPersonFinal
{
    public $name;
    public $title;
    public $job;

    public function __construct($name, $title){
    $this->name = $name;
    $this->title = $title;
    }

    public function communicating($style = 'voice')
    {
        return sprintf("%s is communicating with %s", $this->name, $style);
    }
    
}
