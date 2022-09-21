<?php
 /*
    Lag en funksjon som logger hendelser i en fil. Nye hendelser skal ikke overskrive hendelser som allerede er lagret i fila.
 */

    function hendelse($streng) {
        $fil = fopen("filer/hendelser.txt", "a") or die ("Kan ikke åpne fil");
        fwrite($fil, $streng) or die ("Kan ikke skrive til fil");
        fclose($fil);
    }

    function les($filnavn) {
        $peker = "filer/" . $filnavn;
        $fil = fopen($peker, "r");
        $fildata = fread($fil, filesize($peker));
        echo $fildata;
        fclose($fil);
    }

    for($i=1; $i<=100; $i++) {
        hendelse("Hendelse test " . $i . "\n");
    }
    les("hendelser.txt");
?>