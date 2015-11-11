<?php
$idxfamily = array('nev', 'clare', 'fred');
$assocfamily = array('dad' => 'nev', 'mum' => 'clare', 'son' => 'fred');
?>
<p>foreach</p>
<ul>
    <?php
    foreach($idxfamily as $item)
        printf("<li>%s</li>", $item);
    ?>

</ul>
<hr />

<p>for</p>
<ul>
    <?php
for($i = 0; $i < sizeof($idxfamily); $i++)
            {
            echo "<li>$idxfamily[$i]</li>";
            }
    ?>
</ul>
<hr />

<p>while</p>
<ul>
<?php
    $i = 0;
    while($i < count($idxfamily))
    {
    echo "<li>$idxfamily[$i]</li>";
    $i++;
    }
    ?>
</ul>
