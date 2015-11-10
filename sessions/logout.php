<?php
session_start();

session_destroy();

//Need to re initialize the session superglobal to actually remove existing entries after the destroy.
$_SESSION = array();

?>
<!DOCTYPE html>
<head><title>logout</title></head>
<body>
    <p><a href="login.php">Login</a></p>
    <p><a href="admin.php">Admin - Do not attemtp to access if not logged in!</a></p>

</body>