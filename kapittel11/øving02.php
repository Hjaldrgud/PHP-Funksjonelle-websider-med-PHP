<?php
    $tekstfil = file("filer/hendelser.txt") or die("kan ikke finne fila");

    //Foreach skriver ut 90..100
    foreach ($tekstfil as $linjenr => $linje) { 
        if(sizeof($tekstfil) - $linjenr <= 10) {
            echo $linje;
        }
    }
    echo "<br>";

    //while skriver ut 100..90
    $linjenr = sizeof($tekstfil);
    while($linjenr > (sizeof($tekstfil)-10)) {
        echo $tekstfil[$linjenr-1];
        $linjenr--;
    }
    
?>