<?php
    $fil = fopen("filer/faq.html", "r") or exit("Kan ikke åpne fila");
    while(!feof($fil)) {
        echo fgetc($fil);
    }
    fclose($fil);
?>