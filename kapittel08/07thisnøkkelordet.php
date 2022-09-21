<?php

    class Comfort {
        var $farge;

        function finn_farge() {
            echo $this->farge . "<br>";
        }
    }
    $bil1 = new Comfort;
    $bil2 = new Comfort;
    $bil1->farge = "rød";
    $bil2->farge = "blå";
    $bil1->finn_farge();
    $bil2->finn_farge();
    
?>