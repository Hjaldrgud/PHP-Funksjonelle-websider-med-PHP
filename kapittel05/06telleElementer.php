<?php
    $deltaker = array(
        'bruker' => array(
            'fornavn'=>"Silje",
            'etternavn'=>"Johansen",
            'brukernavn'=>"siljo"
        ),
        'avdeling' => "Kristiansand"
    );
    echo count($deltaker, COUNT_RECURSIVE) . "<br>"; //Rekursiv
    echo count($deltaker); //vanlig
?>