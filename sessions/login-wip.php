<?php 
/*
 * Code to start session
 * define username and pass
 * verify username and pass on form submit if success direct to admin else do nothing 
 * */

session_start();

define('USERNAME', 'nev');
define('PASSWORD', 'p');

if(isset($_POST['btnlogin']))
{
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    
    if(USERNAME == $username && PASSWORD == $password)
    {
        $_SESSION['username'] = $username;
        header('location: admin-wip.php');
    }
    else
    {
        echo 'Incorrect Credentials';
    }
}



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sessions</title>
    </head>
    <body>
<p>create login form</p>
       <form action="" method="post">
           Username: <input type="text" name="username" id="username" /><br />
           Password: <input type="password" name="password" id="password" /><br />
           <input type="submit" name="btnlogin" value="login" />
       </form>   



    </body>
</html>