<?php
require_once 'config.php';

$searchstring = 'c%';

try
{
	    $conn = new PDO('mysql:host=localhost;dbname=test', $config['DB_USERNAME'], $config['DB_PASSWORD']);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //$results = $conn->query('select * from users where name = "nev"');
        
        //foreach($results as $row)
        //{
        //echo $row['name'];
        //}
        
        $stmt = $conn->prepare('select * from users where name like :searchstring');
        $stmt->execute(array(':searchstring' => $searchstring));
        
        //$stmt->bindParam(':searchstring', $searchstring);
        //$stmt->execute();
        
        while($row = $stmt->fetch()){
            echo $row['name'] . '<br >';
        }
        
}
catch (PDOException $pe)
{
    echo 'ERROR: ' . $pe->getMessage();
}
