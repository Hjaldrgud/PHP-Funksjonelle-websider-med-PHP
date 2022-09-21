<?php

    class Comfort {
    }
    $bil1 = new Comfort;

        echo "Klassen som objektet bil1 tilhører heter " . get_class($bil1) . "<br>";
        echo (is_a($bil1, "Comfort")) ? "Objektet bil1 tilhører klassa Comfort" : "Objektet bil1 tilhører ikke klassa Comfort";
        echo "<br>";
        echo (is_a($bil1, "Sport")) ? "Objektet bil1 tilhører klassa Sport" : "Objektet bil1 tilhører ikke klassa Sport"; 

?>