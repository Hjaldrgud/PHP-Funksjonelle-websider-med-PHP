<?php
    for ($i=1; $i<=7; $i++) {
        if($i==4) {
            goto beskjed;
        }
        echo "tallet er " . $i . "<br>";
    }

    beskjed:
    echo "Nå skjedde det et hopp ved hjelp av goto"
?>