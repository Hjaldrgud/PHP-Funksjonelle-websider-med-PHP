<?php
    $sanger = array (
        'Ohne Dich'=>"Rammstein",
        'Keine Lust'=>"Rammstein",
        'The Wizard'=>"Black Sabbath",
        'War Pigs'=>"Black Sabbath",
        'Vicarious'=>"TOOL",
        '46 & 2'=>"TOOL",
        'I am the Black Wizards'=>"Emperor",
        'Jeg Faller'=>"Burzum",
        'Dunkelheit'=>"Burzum",
        'Metropolis'=>"Seigmen",
        'Heartbreak Hotel'=>"Elvis Presley"
    );

    function pre($array) {
        echo "<pre>";
        print_r($array);
        echo "<pre>";
    }

    function keyshuffle($matrise) {
        $nøkkelmatrise = array_keys($matrise);
        shuffle($nøkkelm);
        foreach ($matrise as $verdi) {
            
        }
    }

    function shuffle_assoc($matrise) {
        //Lager ny matrise der verdiene er nøkkelene i originalmatrisen
        $nøkler = array_keys($matrise);
        //Riste nøklene tilfeldig
        shuffle($nøkler);
         //Ny matrise blir laget. Som nøkkel blir nøkkel lagt inn. 
         //Som verdi blir verdien som hører til nøkkelen i originalmatrisen lagt til
        foreach($nøkler as $nøkkel) {
            $nymatrise[$nøkkel] = $matrise[$nøkkel];
        }
        //Originalmatrisen får strukturen til den nye, tilfeldige matrisen og returnerer.
        $matrise = $nymatrise;
        return $matrise;
    }

    $sanger = shuffle_assoc($sanger);
    pre($sanger);
    foreach ($sanger as $sang => $artist) {
        echo $sang . " - " . $artist . "<br>";
    }
?>