<?php

require 'config.php';
require 'functions.php';

$conn = connect($config);

if($conn) {
    $users = get('usersx', $conn);
} else {
echo 'could not connect';
}



?>
<!DOCTYPE html>
<html>
    <head><title></title></head>
    <body>
<ul>
<?php if($users)
{
      foreach($users as $row)
      {
                echo '<li>' . $row['name'] . '</li>';
      }
        
}
      else
      {
          echo "no results for the specified table";
      }?>
</ul>
    </body>
</html>