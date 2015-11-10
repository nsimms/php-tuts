<!DOCTYPE html>
<html>
    <head><title>Post</title></head>
    <body>
        <form action="" method="post">
            Name:<input type="text" name="name" id="name" /><br />
            Email:<input type="text" name="email" id="email" /><br />
            Message: <textarea name="message"></textarea>
            <input type="submit" name="submit" id="submit" value="submit" />
        </form>
    </body>
</html>

<p>Two ways recommended to check if the form has been submitted.</p>
<p>1. check if the form is empty</p>
<?php
if(!empty($_POST))
    echo 'form posted';
else 
    echo "form not posted";
?>
<hr />
<p>2. check the method by which the form was sent, send email to address entered</p>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //echo('request method is ' . $_SERVER['REQUEST_METHOD']);
    if(mail($_POST['email'], 'A message title', $_POST['message']))
        echo "Message sent";
        else
        echo "Message not sent"; 
}
else
{
    echo "form not posted. request method is " . $_SERVER['REQUEST_METHOD'];
}
?>