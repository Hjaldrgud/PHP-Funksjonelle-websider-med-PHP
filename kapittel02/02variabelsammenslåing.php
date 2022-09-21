<?php
    $tekststreng1 = "Kilimanjaro er et fjell.";
    $heltall = 7;
    $desimaltall = 7.22;
    $tall1 = $tall2 = 7;
    $tekststreng2 = "Kilimanjaro er et fjell i Afrika.";

    echo $tekststreng1;
    echo $heltall;

    $tekststreng1 .= $tekststreng2;
    echo $tekststreng1;
    $heltall += $desimaltall;
    echo $heltall;
    $tekststreng1 = "Kilimanjaro er et fjell";
    echo $tekststreng1;



?>