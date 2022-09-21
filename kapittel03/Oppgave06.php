<?php
    $jan1 = mktime(0, 0, 0, 1, 1, 2022);
    $epoch = time();
    $diff = $epoch - $jan1; 
    echo $diff;
?>