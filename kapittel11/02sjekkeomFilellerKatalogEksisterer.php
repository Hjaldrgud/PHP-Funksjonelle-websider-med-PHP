<?php
    if(file_exists("filer")) {
        if(is_file("filer")) {
            echo "Dette er en fil";
        } elseif(is_dir("filer")) {
            echo "Dette er en filkatalog";
        }
    } else {
        "Fila/katalogen eksisterer ikke.";
    }
?>