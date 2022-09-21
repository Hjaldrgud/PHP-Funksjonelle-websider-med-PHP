<?php
    function hilsen($navn, $alder = 20) {
        $hilsen = $navn . " er " . $alder . " år <br>";
        echo $hilsen;
    }

    hilsen("Silje");
    $kult_navn = "Silje";
    hilsen($kult_navn);
?>