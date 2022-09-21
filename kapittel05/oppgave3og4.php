<?php
$kupong1 = $kupong2 = range(1,34);
    shuffle($kupong1);
    shuffle($kupong2);
    array_splice($kupong1, 7);
    array_splice($kupong2, 7);
    asort($kupong1);
    asort($kupong2);
    print_r($kupong1);
    echo "<br>";
    print_r($kupong2);
    echo "<br>";
    echo "<br>";

    $samla = array_merge($kupong1, $kupong2);
    array_unique($samla);
    print_r($samla);
    
?>