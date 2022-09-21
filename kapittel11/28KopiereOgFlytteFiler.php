<?php
    if(file_exists("test.txt")) {
        if(copy("test.txt", "/kat2/test2.txt")) {
            echo "fila ble kopiert. ";
        } else {
            echo "Fila ble ikke kopiert. ";
        }
    } else {
        echo "Fila eksisterer ikke. ";
    }
?>