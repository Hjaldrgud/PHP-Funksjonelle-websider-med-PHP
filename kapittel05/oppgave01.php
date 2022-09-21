<?php
    $matrise = array(
        'personinfo'=>array(
            'fornavn'=>"Andreas",
            'etternavn'=>"Lauvhjell",
            'alder'=>30,
            'sivilstatus'=>"samboer"
        ),
        'onlinepersonlighet'=>array(
            'nick'=>"Hjaldrgud",
            'alternativt nick1'=>"War Pig",
            'alternativt nick2'=>"Kosedreng",
            'gammelt nick'=>"Pla\$ma*",
            'plattform'=>"PC/Steam"
        ),
        'array-skaper'=>"Andreas Lauvhjell",
        'array opprettet'=>(date("d.m.y"))
    );
    echo "<pre>";
    print_r($matrise);
    echo "<pre>";
?>