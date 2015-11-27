<?php
//Note: by not specifying an expiry time the cookie expires when the browser is closed. Use quick math to set expiry e.g. time() + 60 * 60 * 24 * 365 for 1 year. to delete a cookie set the expiration time to somethinh in the past.
if(isset($_POST['submit']))
{
setcookie('fontsize', (int) $_POST['fontsize'], time() + 60 * 30, '/');
}
setcookie('prefs[fontsize]', 25);
setcookie('prefs[category]', 'poker');
setcookie('prefs[screenwidth]', 1000);

//Note: the cookie value is not available straight away. it's set first then is available on subsequent page loads
if(isset($_COOKIE['fontsize']))
{
echo $_COOKIE['fontsize'];
}
?>
<!DOCTYPE html>
<html>
<head><title>cookies</title></head>
<body>
    <p style="font-size:<?=isset($_COOKIE['fontsize']) ? $_COOKIE['fontsize'] . 'px': '16px'?>">Set cookie</p>
    <hr />
    <p>Set cookie using array syntax</p>
    
    <?php
    
    if(isset($_COOKIE['prefs']))
    {
    echo "<ul>";
        foreach($_COOKIE['prefs'] as $key => $value)
    {
        echo '<li>' . htmlspecialchars($key) . ' is ' . htmlspecialchars($value) . '</li>';
    }
    echo '</ul>';
    }
?>
        <hr />


    <form action="" method="post">
        font size: <select name ="fontsize">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option value="40">40</option>
                   </select>
        <input type="submit" value="Go" name="submit" />
    </form>
</body>
</html>
