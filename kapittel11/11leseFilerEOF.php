<?php
    $fil = fopen("filer/faq.html", "r") or exit("Kan ikke åpne fila");
    while(!feof($fil)) {
        echo fgets($fil);
    }
    fclose($fil);
?>