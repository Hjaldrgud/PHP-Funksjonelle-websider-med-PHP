<?php
    $navn = array("Matheo", "Sofie", "Hermine", "Iben", "Oddvar");
    $rpoeng = array(22, 31, 27, 31, 31);
    $tpoeng = array(143, 143, 143, 104, 99);

    print_r($tpoeng);
    echo "<br>";
    print_r($rpoeng);
    echo "<br>";
    print_r($navn);
    echo "<br><br>";
    array_multisort($tpoeng, SORT_DESC, $rpoeng, SORT_DESC, $navn, SORT_ASC);
    print_r($tpoeng);
    echo "<br>";
    print_r($rpoeng);
    echo "<br>";
    print_r($navn);
    echo "<br><br>";
?>