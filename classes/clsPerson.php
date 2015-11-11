<?php

/**
 * clsPerson short summary.
 *
 * clsPerson description.
 *
 * @version 1.0
 * @author nsimms
 */
class clsPerson
{
    public $name;
    public $age;
    
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age; 
    }
    
    public function communicating($style = 'voice')
    {
    return sprintf("%s is communicating via %s", $this->name, $style);
    }
    
}
