<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <!-- NEEDS TO BE LOCKED DOWN -->
    <h1>Folks on your mailing list</h1>
<?php if($registered_users) {
    foreach($registered_users as $user) {
    list($name, $email)  = $user;
        echo "<li>$name: <a href='mailto:$email'>$email</a></li>";
    }
}
 else{
    echo "No registered Users";
   }
     ?>
    </body>

</html>