<?php
session_start();

if(isset($_SESSION['username']))
    echo "welcome ". $_SESSION['username'];
else
{
    header("location: login.php");
    die();
}
    ;
?>
<!DOCTYPE html>
<html?>
<head>
    <title>admin</title>
</head>
<body>
    <a href="logout.php">logout</a>
</body>
</html>
