<?php
    function hilsen($navn, $alder = 20) {
        static $nr = 1;
        $hilsen = "Hilsen nummer" . $nr . ": " . $navn . " er " . $alder . " år <br>";
        echo $hilsen;
        $nr++;
    }

    hilsen("Silje");
    hilsen("Silje");
    hilsen("Silje");
?>