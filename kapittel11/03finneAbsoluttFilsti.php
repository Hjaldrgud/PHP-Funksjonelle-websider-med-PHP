<?php
        if(file_exists("filer/profilbilde.jpg")) {
            echo "Filstien er: " . realpath("filer/profilbilde.jpg");
        } else {
            echo "Fila/katalogen eksisterer ikke.";
        }

?>