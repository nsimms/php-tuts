<?php

function connect($config){

    try
    {
        $conn = new PDO('mysql:host=localhost;dbname=test', 'roots', '');
        var_dump($conn);
        
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
    catch (Exception $pe)
    {
        return false;
    }
    

}

function query($query, $bindings, $conn){
    
    $stmt = $conn->prepare($query);
    $stmt->execute($bidings);
    $results = $stmt->fetchAll();
    return $results ? $results : false;

}

function get($tablename, $conn )
{
	try
    {
        $results = $conn->query('select * from ' . $tablename);
        return ($results->rowCount() > 0) ? $results : false;
        
    }
    catch (Exception $exception)
    {
        return false;
    }
    
    
    
    
    
}
