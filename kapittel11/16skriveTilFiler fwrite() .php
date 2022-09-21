<?php
    $fil = fopen("filer/test.txt", "w") or die ("Kan ikke åpne fila");
    $tekst = "Dette er tekst som er skrevet i PHP-programmet.";
    fwrite($fil, $tekst);
    fclose($fil);
?>