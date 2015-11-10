<!doctype html>
<html>
    <head> <title>get</title></head>
    <body>
        <a href="14-get.php?id=14">Go!</a>

        <p>Confirm the property has a value and if so ouput CLEANSED value OR take alternate action</p>
         
    <?php
    if(isset($_GET['id']))
        echo "the cleansed id sent with the request is " . htmlspecialchars($_GET['id']);
    else
        echo "redirect elsewhere";
    
    ?>
        <hr />
    </body>
</html>