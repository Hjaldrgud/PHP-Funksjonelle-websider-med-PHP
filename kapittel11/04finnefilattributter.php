<?php
    if(file_exists("filer/faq.html")) {
        echo "<pre>";
        print_r(stat("filer/faq.html"));
        echo "</pre>";
    } else {
        echo "Fila/katalogen eksisterer ikke.";
    }
?>