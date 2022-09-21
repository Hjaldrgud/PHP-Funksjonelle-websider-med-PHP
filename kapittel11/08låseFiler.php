<?php
    $tekst = "Dette er første linja";
    $fil = fopen("filer/demo.txt", "w") or die("Kan ikke åpne fil");

    flock($fil, LOCK_EX) or die ("kan ikke låse fil");
    fwrite($fil, $tekst) or die ("Kan ikke skrive til fil");
    flock($fil, LOCK_UN) or die ("Kan ikke låse opp fil");
    fclose($fil);

    echo "Data skrevet til fil";
?>