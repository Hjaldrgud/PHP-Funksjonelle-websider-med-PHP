<?php
    if(file_exists("test2.txt")) {
        if(unlink("test2.txt")) {
            echo "Fila ble slettet";
        } else {
            echo "Fila ble ikke slettet.";
        }
    } else {
        echo "Fila eksisterer ikke.";
    }
?>