<?php
    $fil = fopen("filer/test.txt", "r") or exit("Kan ikke åpne fila");
    $fildata = fread($fil, 300);
    echo $fildata;
?>