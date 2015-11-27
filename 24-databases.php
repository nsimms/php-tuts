<?php
//Don't need to watch 24, 25, 26, 27, 28, 29'

$conn = mysql_connect('localhost', 'root', '');

mysql_select_db('test', $conn);

$results = mysql_query('select * from users');

while($row = mysql_fetch_object($results))
{
    echo $row->name . "<br>";
}

?>