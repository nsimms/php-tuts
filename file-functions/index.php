<?php
$images = glob('img/*.{jpg,jpeg,png}', GLOB_BRACE);
var_dump($images);

foreach($images as $image)
{
    
    //echo $image;

    //get just filename. actually returns last entry after last slash
    //echo basename($image);
    
    //get parent directory for file passed
    //echo dirname($image);

    //get the extension.
    //using substring not optimal but interesting use of negative value. i.e it starts from the end of the string. i.e cuts that off
    //echo substr($image, -3);
    
    //using pathinfo - add the optional second parameter to return specific value
    //print_r(pathinfo($image, PATHINFO_EXTENSION ));
    
    //Or return the entire pathinfo array to a variable to subsequently use all of them needed
    //Tutor gives example of creating a name for thumb versions of uploaded files
    //$info = pathinfo($image);
    extract(pathinfo($image));
    
    //$thumb = $info['filename'] . '-thumb.' . $info['extension'];
    $thumb = $filename . '-thumbs.' . $extension;
    
    echo $thumb;
        
    echo "<br>";
}
?>