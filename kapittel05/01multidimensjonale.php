<?php
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
    echo $deltaker['avdeling'];
    echo $deltaker['bruker']['etternavn'];
    echo $deltaker['bruker'];
?>