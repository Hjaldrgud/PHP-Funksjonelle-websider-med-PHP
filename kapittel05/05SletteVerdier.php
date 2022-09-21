<?php
    $matrise = array(1, 5=>7, 'bil'=>"Volvo", 9);
    unset($matrise[5]);
    print_r($matrise);
    
    echo "<br><br>";

    $matrise2 = array(1, 5=>7, 'bil'=>"Volvo", 9);
    array_pop($matrise2);
    print_r($matrise2);

    echo "<br><br>";

    $matrise3 = array(1, 5=>7, 'bil'=>"Volvo", 9);
    array_splice($matrise3, 1, 1);
    print_r($matrise3);
?>