<?php

    class Comfort {
        var $farge; 
        var $modell;
        var $lengde = 495;

        function bestill_bil() {
            echo "Bilen er bestilt.";
        }
        function sjekk_status() {
            echo "Bestilling er mottatt.";
        }
        function finn_farge() {
            return $this->farge . "<br>";
        }
    }
    $bil1 = new Comfort;
    echo "Klassemetoder: " . implode(", ", get_class_methods("Comfort")) . "<br>";
    echo (method_exists("Comfort", "finn_farge")) ? 'Klassa "finn_farge()" eksisterer i klassa Comfort.' : 'Klassa "finn_farge()" eksisterer ikke i klassa Comfort.'; 
?>