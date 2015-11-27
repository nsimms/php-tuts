<!DOCTYPE html>
<?php
include 'classes/clsPerson.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Objects</title>
</head>
<body>
    <p>Create person class call it's communcating method</p>
<?php
$person = new clsPerson('nev', '41');
echo $person->communicate();
?>
    <hr />
    <p>create standard class add person properties to it</p>

    <hr />
    <P>cast array to object</P>
        
</body>
</html>


