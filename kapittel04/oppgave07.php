<?php
    $initierer = "Hei på deg";
    $kodestreng = substr(str_shuffle(md5($initierer)), rand(0,24), 8);

    echo $kodestreng . "<br>";
    echo preg_match('~[0-9]+~', $kodestreng) ? "Koden inneholder tall" : "Koden inneholder ikke tall"; 
?>