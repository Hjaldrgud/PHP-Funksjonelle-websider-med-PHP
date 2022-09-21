<?php
    $matrise = array(1, 5 => 7, 'bil' => "Volvo", 9);
    echo "<pre>";
    print_r($matrise);
    echo "</pre>";


    $dyr1 = array("hund", "tiger", "akvariefisk", "ape");
    $dyr2 = ["hund", "tiger", "akvariefisk", "ape"];


    $deltaker = array
    (
        'bruker' => Array 
        (
            'fornavn' => "Silje",
            'etternavn' => "Johansen",
            'brukernavn' => "siljo"
        ),
        'avdeling' => "Kristiansand" 
    );
    echo "<pre>";
    print_r($deltaker);
    echo "</pre>";
    $deltaker['land'] = "Norge";
    echo "<pre>";
    print_r($deltaker);
    echo "</pre>";
?>