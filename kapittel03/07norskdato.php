<?php
    setlocale(LC_TIME, "no_NO", "nor_nor");
    echo strftime("%e. %B");
    echo "<br>";
    echo strftime("%A den %e. %B");
    echo "<br><br><br>";
    echo strftime("%A", mktime(0, 0, 0, 6, 21, 1992));
    
?>