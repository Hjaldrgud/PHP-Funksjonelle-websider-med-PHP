<?php
    $resultat = isset($variabel);
    var_dump($resultat); //variabelen er ikke deklarert
    $variabel = ""; //Her blir variabelen deklarert, selv om den er tom

    $resultat = isset($variabel);
    var_dump($resultat); //Variabelen er deklarert
    $resultat = empty($variabel);
    var_dump($resultat); //Variabelen er tom
?>