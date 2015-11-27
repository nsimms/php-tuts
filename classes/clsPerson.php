<?php

class clsPerson
{

public $name;
public $age;

public function __construct($name, $age)
{
    
    $this->name = $name;
    $this->age = $age;
}

public function communicate($style = 'voice')
{
 echo sprintf("%s is communicating with %s", $this->name, $style);
} 

}
?>