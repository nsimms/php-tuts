


<?php
$idxfamily = array('nev', 'clare', 'fred');
$assocfamily = array('dad' => 'nev', 'mum' => 'clare', 'son' => 'fred');
?>
<p>foreach</p>
<ul></ul>
</ul>
<hr />

<p>for</p>
<ul></ul>
<hr />

<p>while</p>
<ul>
    <?php
    $i = 0;
    while($i < count($idxfamily))
    {
        echo $idxfamily[$i];
        $i++;
    }
    ?>

</ul>