<?php
session_start();

if(!isset($_SESSION['username']))
{
    header('location: login-wip.php');
    die();
}
?>
<!DOCTYPE html>
<html?>
<head>
    <title>admin</title>
</head>
<body>
    <a href="logout-wip.php">logout</a>
</body>
</html>
