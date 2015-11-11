<?php
require 'classes/clsPerson.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Objects</title>
</head>
<body>
    <p>Create person class call it's communcating method</p>
    <?php
    $person =  new clsPerson('clare', '41');
    
    echo $person->communicating();
    ?>
    <hr />
    <p>create standard class add person properties to it</p>
    <?php
    
    $per = new stdClass();
    $per->name = 'fred';
    $per->job = 'son';
    
    var_dump($per);
    
    ?>
    <hr />
    <P>cast array to object</P>
    <?php
    $idxfamily = array('nev','clare','fred');
    
    $obj = (object)$idxfamily;
    
    var_dump($obj);
?>
</body>
</html>

