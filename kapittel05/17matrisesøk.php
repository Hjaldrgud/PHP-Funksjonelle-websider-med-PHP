<?php
    $konkurranse = array ('Ida'=>5, 'Per'=>3, 'Thea'=>9, 'Ola'=>0);
    echo array_search(0, $konkurranse) . "<br><br>";

    $konkurranse2 = array(
        array(
            'did'=>"101",
            'navn'=>"Ola",
            'poeng'=>0
        ),
        array(
            'did'=>"100",
            'navn'=>"Thea",
            'poeng'=>9
        )
    );
    echo array_search(0, array_column($konkurranse2, "poeng"));
?>