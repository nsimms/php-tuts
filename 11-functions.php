<!DOCTYPE html>
<html>
<head>
    <title>functions</title>
</head>
<body>
    <p>Code to say hello to Fred by default but recieve dynamic variable</p>
    <?php
    function sayHello($name = "Fred"){
        return sprintf("Hi, there %s", $name);
    }

    echo sayHello();
    echo sayHello("Nev");
    ?>
    <hr />
    <p>function to apply pre tags around print_r</p>
    <?php
    $arr = array('name' => 'nev', 'age' => '41', 'occupation' => 'web dev');

    function prettyp($obj){
        echo "<pre>";
        print_r($obj);
        echo "</pre>";
    }

    prettyp($arr);
    ?>
    <hr />
    <p>Array pluck </p>
    <?php
    $people = array(
        array('name' => 'nev', 'age' => '41', 'occupation' => 'web dev'),
        array('name' => 'clare', 'age' => '36', 'occupation' => 'events'),
        array('name' => 'fred', 'age' => '0', 'occupation' => 'being cute')
        );

    function arrPluck($arr, $topluck = 'name'){

        $ret = array();


        foreach($arr as $item){

            array_push($ret, $item[$topluck]);
        }
        return $ret;

    }

    var_dump(arrPluck($people, "age"));
    ?>
    <hr />
    <p>Array pluck using array map</p>
    <?php
    $people = array(
array('name' => 'nev', 'age' => '41', 'occupation' => 'web dev'),
array('name' => 'clare', 'age' => '36', 'occupation' => 'events'),
array('name' => 'fred', 'age' => '0', 'occupation' => 'being cute')
);
    function arrPluckMap($arr, $topluck) {

        return array_map(function($item) use($topluck) {
        return $item[$topluck];

        }, $arr);

    }

    var_dump(arrPluckMap($people,"occupation"));
    ?>
</body>
</html>
