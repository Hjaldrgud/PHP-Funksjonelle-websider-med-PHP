<?php
    $m1 = array(1, 2, true, "4", "PHP");
    $m2 = array(2, 3, 4, "Python");
    $m3 = array(3, 4, 5, "Perl");
    $f = array_diff($m1, $m2, $m3);
    print_r($f);
?>