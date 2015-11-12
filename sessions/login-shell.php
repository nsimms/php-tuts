<?php 
session_start();

define("USERNAME", "nev");
define("PASSWORD", "pass");

if(isset($_POST['loginbtn']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(USERNAME === $username && PASSWORD === $password )
    {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header('location: admin.php');
    }
    else
        echo "creds incorrect";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>

        <form action="" method="post">
            Username:<input type="text" name="username"/><br />
            Password:<input type="password" name="password"/><br />
            <input type="submit" name="loginbtn" value="login"/>

        </form>


    </body>
</html>