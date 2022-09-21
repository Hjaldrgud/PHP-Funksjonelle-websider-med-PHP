<?php

    class Comfort {
        var $farge;
    }
    $bil1 = new Comfort;
    $bil1->farge = "gul";
    $bil2 = clone $bil1;
    $bil2->farge = "rød";

    echo "Bil 1 har farge " . $bil1->farge . ", mens bil 2 har farge " . $bil2->farge . ". <br>";


?>