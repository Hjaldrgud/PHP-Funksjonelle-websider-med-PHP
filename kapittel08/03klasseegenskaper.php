<?php

    /**
     * @var String $farge Utvendig farge.
     * @var int $modell Modellår.
     * @var int $lengde Lengde(centimeter).
     */
    class Comfort {
        var $farge;
        var $modell;
        var $lengde = 495;
    }

    $bil1 = new Comfort;
    $bil2 = new Comfort;

    $bil1->farge = "rød";
    $bil2->farge = "blå";
    echo "Bil 1 har farge " . $bil1->farge . ", mens bil 2 har farge " . $bil2->farge . ". <br>";
    $bil1->farge = "gul";
    echo "Bil 1 har farge " . $bil1->farge . ", mens bil 2 har farge " . $bil2->farge . ". <br>";

?>