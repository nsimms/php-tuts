<!DOCTYPE html>
<html>
<head>
    <title>functions</title>
</head>
<body>
    <p>Code to say hello to Fred by default but recieve dynamic variable</p>
    <?php
        function sayHello($name = 'freddy')
        {
            //return 'Hello ' . $name;
            return sprintf("Hello %s ", $name);
        }

        echo sayHello();
        echo sayHello('Clare');

    ?>
    <hr />
    <p>function to apply pre tags around print_r</p>
    <?php
        $input = array('nev','clare','freddy');
        function ppretty($arr){
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
        }

        ppretty($input);
        print_r($input);
    ?>
    <hr />
    <p>Array pluck </p>
    <?php
        $people = array(
            array('name' => 'nev', 'age' => '41', 'occupation' => 'web dev'),
    array('name' => 'clare', 'age' => '36', 'occupation' => 'events'),
    array('name' => 'fred', 'age' => '0', 'occupation' => 'being cute')
            );

        function pluckIt($arr, $topluck)
        {

        $ret = array();

        foreach($arr as $item)
        {
            array_push($ret, $item[$topluck]);

        }

        return $ret;
        }

        var_dump(pluckIt($people, 'name'));

    ?>
    <hr />
    <p>Array pluck using array map</p>
    <?php
                $people = array(
            array('name' => 'nev', 'age' => '41', 'occupation' => 'web dev'),
    array('name' => 'clare', 'age' => '36', 'occupation' => 'events'),
    array('name' => 'fred', 'age' => '0', 'occupation' => 'being cute')
            );

                function pluckMap($arr, $topluck)
                {
                
                    return array_map(function($item) use($topluck) {
                        return $item[$topluck];
                    
                    }, $arr);
                
                }

                var_dump(pluckMap($people, 'age'));

    ?>
</body>
</html>
