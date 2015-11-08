<?php
$idxfamily = array('nev', 'clare', 'fred');

$assocfamily = array('dad' => 'nev', 'mum' => 'clare', 'son' => 'fred');
?>
<p>foreach</p>
<ul>
    <?php
    foreach($assocfamily as $role => $name)
    {
        printf("<li>%s is %s</li>", $role, $name);
    }
    ?>
    </ul>
</ul>
<hr />

<p>for</p>
<ul>
<?php
for($i = 0; $i < count($idxfamily); $i++)
    echo "<li>$idxfamily[$i]</li>";
?>

</ul>
<hr />

<p>while</p>
<ul>
    <?php
    $i = 0;
    while($i < count($idxfamily)){
        echo "<li>$idxfamily[$i]</li>";
        $i++;
    }
    ?>
</ul>