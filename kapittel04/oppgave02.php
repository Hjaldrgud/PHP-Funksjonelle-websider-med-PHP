<?php
    $t = date('H');
    echo $t . "<br>";

    echo "If-setning: <br>";
    if ($t<=5) {
        echo "God natt";
    } elseif($t<=8) {
        echo "God morgen";
    } elseif($t<=11) {
        echo "God formiddag";
    } elseif ($t<=17) {
        echo "God ettermiddag";
    } else {
        echo "God kveld";
    }
    echo "<br>";
    echo "Switch-setning <br>";
    switch($t) {
        case $t<=5:
            echo "God natt";
            break;
        case $t<=8:
            echo "God morgen";
            break;
        case $t<=11:
            echo "God formiddag";
            break;
        case $t<=17:
            echo "God ettermiddag";
            break;
        default:
            echo "God kveld";
            break;        
    }







?>