<?php

require 'config.php';
$searchstring = '_e%'; //any first character followed by 'e' then anything

try
{
	$conn = new PDO('mysql:host=localhost;dbname=test', $config['DB_USERNAME'], $config['DB_PASSWORD']);
    //By default the error mode for PDO is silent, during dev can set to below to display any errors when queries are excuted.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //1. QUERY METHOD
    //only ever use the query method when hardcoding complete sql statements. if ever using dynamic input to the query use prepared statements 
    //$results = $conn->query('select * from users where name like "n%"');
    //foreach ($results as $row)
    //{
    //    echo $row['name'];
    //}

    //2. PREPARED STATEMENTS - using firstly arra passed to execute for params then secondly bindParam methos
    $stmt = $conn->prepare('select * from users where name like :searchstring');
    //$stmt->execute(array(
    //    'searchstring' => $searchstring
    //    ));
    
    $stmt->bindParam('searchstring', $searchstring, PDO::PARAM_STR);
    $stmt->execute();
    
    while ($row = $stmt->fetch())
    {
    	echo $row['name'] . "<br/>";
    }
    
    
}
catch (PDOException $e)
{
    echo 'ERROR: ' . $e->getMessage();
}

?>