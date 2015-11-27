<?php

require 'config.php';

$searchstring = 'Ne%';

try{
 $conn = new PDO('mysql:host=localhost;dbname=test', $config['DB_USERNAME'], $config['DB_PASSWORD']);
 //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $stmt = $conn->prepare('select * from users where name like :searchstring');
 $stmt->execute(
 array(
 'searchstring' => $searchstring
 )
 );
 
 while($row = $stmt->fetch())
 print_r($row['name']);
 
 }
catch(PDOException $e) {
    echo $e->getMessage();
}
