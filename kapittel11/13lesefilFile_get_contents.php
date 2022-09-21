<?php
    $innhold = file_get_contents(("filer/faq.html")) or die("Kan ikke finne fila");
    echo $innhold;
?>