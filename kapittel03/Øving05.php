<?php
    $vPassetning = "Heisann hoppsann";
    echo $vPassetning . "<br>";

    function fKryptere ($vPassetning) {
        $vProssessert = md5($vPassetning);
        echo $vProssessert . "<br>";
        fDeKryptere($vProssessert);
    }

    function fDeKryptere($vProssessert){
        $vdekryptert = "Heisann hoppsann";
        $vMuligNøkkel = "c5f3c1acfa16d104bb8c7a838c883038";
        if(str_contains($vProssessert, $vMuligNøkkel)) {
            echo $vdekryptert;
        }
        
    }

    fKryptere($vPassetning);
?>