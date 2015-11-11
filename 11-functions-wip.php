<!DOCTYPE html>
<html>
<head>
    <title>functions</title>
</head>
<body>
    <p>Code to say hello to Fred by default but recieve dynamic variable</p>
    <?php
    function hiThere($name = 'Fred')
    {
        return "Hi " . $name;
    }

    echo hiThere();
    echo hiThere('nev');
    ?>
    <hr />
    <p>function to apply pre tags around print_r</p>
    <?php
    
    $people = array(
        'nev', 'clare', 'fred'
        );
    
    function pp($arr)
    {
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    
    pp($people);
    ?>
    <hr />
    <p>Array pluck </p>
    <?php
    $data = array(
        array('name' => 'nev', 'age' => '41', 'job' => 'web dev'),        
        array('name' => 'clare', 'age' => '36', 'job' => 'events'),        
        array('name' => 'fred', 'age' => '0', 'job' => 'cute fella')
        );
    
    
    function arrpluck($arr, $topluck = 'age')
    {
        $outarr = array();
        
        foreach($arr as $person)
        {
            array_push($outarr, $person[$topluck]);
            
        }
        return $outarr;
    }
    
    var_dump(arrpluck($data));
    ?>
    <hr />
    <p>Array pluck using array map</p>
    <?php
    $data = array(
    array('name' => 'nev', 'age' => '41', 'job' => 'web dev'),        
    array('name' => 'clare', 'age' => '36', 'job' => 'events'),        
    array('name' => 'fred', 'age' => '0', 'job' => 'cute fella')
    );
    
    function arrpluckmap($arr, $topluck = 'age')
    {
        return array_map(
            function($item) use($topluck) {
                return $item[$topluck];
                }
            
            , $arr);
        
    }
    
    var_dump(arrpluckmap($data, 'job'));
    ?>
</body>
</html>
