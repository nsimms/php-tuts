<!DOCTYPE html>
<html>
<head>
    <title>functions a foot</title>
</head>
<body>
    <p>Code to say hello to Fred by default but recieve dynamic variable</p>
    <?php
function sayHello($name = 'Fred')
{
    return sprintf("Hello %s", $name );
}

echo sayHello();
    ?>
    <hr />
    <p>function to apply pre tags around print_r</p>
    <?php
    $idxfamily = array('nev', 'clare', 'freddy');
    
    function pp($arr)
    {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    }
    
    pp($idxfamily);
    
    ?>
    <hr />
    <p>Array pluck </p>
    <?php
    $people = array(
        array('name' => 'nev', 'age' => '41', 'job' => 'web dev'),
        array('name' => 'clare', 'age' => '36', 'job' => 'events'),
        array('name' => 'fred', 'age' => '0', 'job' => 'being cute'),
        );
    
    function arrPluck($arr, $topluck = 'name')
    {
     $out = array();
        
     foreach($arr as $item)
     {
         array_push($out, $item[$topluck]);
     }
    
     return $out;
    }
    
    var_dump(arrPluck($people, 'name'));
    ?>
    <hr />
    <p>Array pluck using array map</p>
    <?php
    
    function arrPluckMap($arr, $topluck = 'name')
    {
        return array_map(function($item) use ($topluck)
            {
            return $item[$topluck];
            }
            ,$arr);
    }
    
    var_dump(arrPluckMap($people, 'job'));
    
    ?>
</body>
</html>
