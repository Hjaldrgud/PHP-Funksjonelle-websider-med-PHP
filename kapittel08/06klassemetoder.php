<?php

    class Comfort {
        var $farge;
        var $modell;
        var $lengde = 495;

        function sjekk_status() {
            echo "Bestillingen er mottatt. <br>";
        }
        function bestill_bil() {
            echo "Bilen er bestilt. <br>";
        }
    }
    $bil1 = new Comfort;
    $bil1->farge = "blå";
    $bil1->modell = 2021;
    $bil1->bestill_bil();
    $bil1->sjekk_status();

?>