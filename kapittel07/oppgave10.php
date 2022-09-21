<?php
    ini_set("display_errors", 0);

    try {
        require_once("inc/funksjoner.inc.php");
    } catch (\Throwable $th) {
        echo "Fila eksisterer ikke. ";
    }


    echo "Dette burde ingen kunne lese eller? litt usikker. har uansett fullført oppgava.";

?>