<?php
if(file_exists("test.txt")) {
    if(rename("test.txt", "kat2/test2.txt")) {
        echo "Fila/katalogen ble endret og/eller flyttet.";
    } else {
        echo "Fila/katalogen ble ikke endret og/eller flyttet";
    }
} else {
    echo "Fila/katalogen eksisterer ikke.";
}
?>