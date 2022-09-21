<?php
    $dyr = array ("hund", "tiger", "akvariefisk", "ape", "sjiraff", "hund");
    $dyr = array_unique($dyr);
    print_r($dyr);
    echo "<br>";
    echo "<br>";

    $matrise = array(1, 5=>7, 'bil'=>"Volvo", 9);
    print_r(array_slice($matrise, 1)); echo "<br>";
    print_r(array_slice($matrise, 1, 2, true)); echo "<br>";
?>