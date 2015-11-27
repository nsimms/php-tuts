<?php
/*
function set_count($file_name = 'counter.txt')
{
    if (file_exists($file_name))
    {
        //open the file for reading
        $handle = fopen($file_name, 'r');
        
        //read the vallu and increment it by 1
        $count = (int) fread($handle, 20) + 1;

        //Open the file for writing 
        $handle = fopen($file_name, 'w');
        
        //write the new value
        fwrite($handle, $count);
        
        //close the connection to the file
        fclose($handle);
        
        return $count;
    }
    else
    {
        $count = 1;
        //create the file
        $handle = fopen($file_name, 'w+');
        fwrite($handle, $count);
        
        fclose($handle);
        
        return $count;
    }
}
*/


function set_count($file_name = 'counter.txt')
{
    if (file_exists($file_name))
    {

        //read the vallu and increment it by 1
        $count = (int) file_get_contents($file_name) + 1;

        file_put_contents($file_name, $count);

        return $count;
    }
    else
    {
        $count = 1;
        //create the file
        $handle = fopen($file_name, 'w+');
        fwrite($handle, $count);

        fclose($handle);

        return $count;
    }
}

$count = set_count();

require 'index.tmpl.php';
?>