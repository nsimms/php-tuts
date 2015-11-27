<?php
require 'config.php';

$searchstring = 'Ne%';

try{
    $conn = new PDO('mysql:host=localhost;dbname=test', $config['DB_USERNAME'], $config['DB_PASSWORD']);
    //By default the error mode for PDO is silent, during dev can set to below to display any errors when queries are excuted.
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //1. QUERY METHOD
    //only ever use the query method when hardcoding complete sql statements. if ever using dynamic input to the query use prepared statements 
    /*
    $results = $conn->query('select * from users');
    //print_r($results);
    foreach($results as $row){
        print_r($row);
    }*/
    
    //2. PREPARED STATEMENTS 
    $stmt = $conn->prepare('select * from users where name like :searchstring');
    $stmt->execute(array(
        'searchstring' => $searchstring 
        ));
    
    while($row = $stmt->fetch())
    {
    print_r($row);
    }
    
    //$stmt->bindParam(':searchstring', $searchstring, PDO::PARAM_STR);
    
} catch(PDOException $e) {
    echo "ERROR: " . $e->getMessage();
}
