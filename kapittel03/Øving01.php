<?php
    $streng = "Reven rasker over isen";
    $erstatt = "rasker";
    $erstatter ="lister seg";
    if(str_contains($streng, $erstatt)) {
        $streng = str_replace($erstatt, $erstatter, $streng);
        echo $streng;
    }
?>