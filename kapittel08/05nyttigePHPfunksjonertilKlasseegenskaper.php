<?php

    class Comfort {
        var $farge;
        var $modell;
        var $lengde = 495;
    }
    $bil1 = new Comfort;
    $bil1->farge = "blå";
    $bil1->modell = 2021;

    echo "<pre>";
    echo "Klassa Comfort:<br>";
    print_r(get_class_vars("Comfort"));
    echo "<br>Objektet \$Bil1:<br>";
    print_r(get_object_vars($bil1));
    echo "</pre><br>";
    echo (property_exists("Comfort", "farge")) ? "Egenskap farge eksisterer i klassa Comfort. <br>" : "Egenskap farge eksisterer ikke i klassa Comfort. <br>";
?>