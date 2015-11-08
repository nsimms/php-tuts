<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Objects</title>
</head>
<body>
    <p>Create person class call it's communcating method</p>
    <?php

    require '/classes/clsPerson.php';

    $person = new clsPerson('nev','mr');

    echo($person->communicate('telepathy'));

    ?>
    <hr />
    <p>create standard class add person properties to it</p>
    <?php
    $stdPerson = new stdClass;
    $stdPerson->name = 'nev';
    $stdPerson->job = 'web dev';

    var_dump($stdPerson);
    
        
        ?>
    <hr />
    <P>cast array to object</P>
    <?php
    $arr = array('name' => 'clare', 'job' => 'events');
    $obj = (object)$arr;
    var_dump($obj);
    ?>
</body>
</html>

