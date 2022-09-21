<?php
    $postnummer = 3;
    $poststed = match($postnummer) {
        1 => "Oslo",
        2 => "Bergen",
        3 => "Trondheim",
        4 => "Stavanger",
        5 => "Kristiansand",
        6 => "Tromsø",
        7 => "Body",
        8 => "Søndeled",
        9 => "Moen",
        default => "Risør",
    };
    echo $poststed;
?>