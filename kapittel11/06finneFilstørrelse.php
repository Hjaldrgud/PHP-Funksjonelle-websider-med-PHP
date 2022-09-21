<?php
    if(file_exists("filer/faq.html")) {
        echo "Fila er på " . filesize("filer/faq.html") . " bytes.";
    } else {
        echo "Fila/katalogen eksisterer ikke.";
    }
?>