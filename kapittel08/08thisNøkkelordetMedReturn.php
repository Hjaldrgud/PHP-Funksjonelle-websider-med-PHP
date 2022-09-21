<?php

    class Comfort {
        var $farge;

        function finn_farge() {
            return $this->farge . "<br>";
        }
    }
    $bil1 = new Comfort;
    $bil1->farge = "blå";
    //hvordan man kan bruke return og this til å hente ut en verdi:
    $farge = $bil1->finn_farge(); //eksempel 1
    echo $bil1->finn_farge(); //eksempel 2
?>