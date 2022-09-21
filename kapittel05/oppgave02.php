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

    //Ekkel måte som finner forskjellene som tydeligvis gjorde også oppgave 3 og 4..
    echo "<br>";
    echo "<br>";
    $f1 = array_diff($kupong1, $kupong2);
    $f2 = array_diff($kupong2, $kupong1);
    $felles = array_merge($f1, $f2);
    print_r($felles);


?>