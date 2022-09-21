<?php
    $konkurranse = array('Ida'=>5, 'Per'=>3, 'Thea'=>9, 'Ola'=>0);
    foreach($konkurranse as $deltaker => $poengsum) {
        echo $deltaker . " har " . $poengsum . " poeng. <br>";
    }
?>