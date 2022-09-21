<?php
    $dyr1 = array("hund", "tiger", "akvariefisk", "ape", "sjiraff", "flodhest");
    $dyr1 = arraY_reverse($dyr1);
    print_r($dyr1);
    echo "<br>";


    $td = array ('SE' => "Sverige", 'DK'=>"Danmark", 'FI'=>"Finland");
    $td = array_flip($td);
    print_r($td);
?>