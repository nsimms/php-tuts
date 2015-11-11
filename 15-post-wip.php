<!DOCTYPE html>
<html>
    <head><title>Post</title></head>
    <body>
        <form action="" method="post">
            first name:<input type="text" name="fname" id="fname" /><br />
            last name:<input type="text" name="lname" id="lname" /><br />

            <input type="submit" name="submit" id="submit" value="submit" />
        </form>
    </body>
</html>

<p>Two ways recommended to check if the form has been submitted.</p>
<p>1. check if the form is empty</p>
<?php
if(!empty($_POST))
    echo 'form submitted';
else
    echo 'redirecting';
?>
<hr />
<p>2. check the method by which the form was sent, send email to address entered</p>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
    echo 'form def submitted';
else
    echo 'redirecting again';

?>