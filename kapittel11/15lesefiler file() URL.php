<?php
    $matrise = file("https://www.google.com") or die("Kan ikke finne fila/URL");
    foreach($matrise as $linje) {
        echo $linje . "<br>";
    }
?>