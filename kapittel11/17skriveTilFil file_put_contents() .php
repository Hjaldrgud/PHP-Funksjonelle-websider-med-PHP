<?php
    $tekst = "Dette er ny tekst som er skrevet i PHP-programmet.";
    file_put_contents("filer/test.txt", $tekst) or die("Kan ikke skrive til fila.");
    echo "Tekst skrevet til fila";
?>