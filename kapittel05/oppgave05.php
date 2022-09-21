<?php
    $substantiver = array
    (
    "ball", 
    "bilde", 
    "by", 
    "eske", 
    "flagg",
    "familie",
    "hus",
    "kropp",
    "konge",
    "kongle",
    "luft",
    "skap",
    "karafell",
    "papir",
    "lys",
    "mål",
    "mat",
    "menneske",
    "nøkkel",
    "oppgave",
    "pose",
    "ord",
    "salg",
    "samtale",
    "sang",
    "seier",
    "spøk",
    "utfordring",
    "vei",
    "venn",
    "år"
    );
    
    shuffle($substantiver);
    array_splice($substantiver, 10);
    extract($substantiver, EXTR_PREFIX_ALL, "subs");

    echo "Det var en/ei/et " .  $subs_1 . " tre " . $subs_2 ." skulle gå til ". $subs_3 . " for å gjøre seg feite. De gikk langt om lenge og fikk øye på ". $subs_4 .
    ". Den ene " . $subs_5 . " spurte den andre " . $subs_6 . " hva de skulle gjøre. 'Vi tar å kaster en " . $subs_7 . " på den'. Så gjorde de det. 
    Men tingen de kastet bommet og traff " .  $subs_8 . " midt i " . $subs_9 . " Det førte til at " . $subs_0 . " ble redd.";
?>