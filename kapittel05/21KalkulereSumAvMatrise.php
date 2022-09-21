<?php
    $konkurranse = array('Ida'=>5, 'Per'=>3, 'Thea'=>9, 'Ola'=>0);
    echo "totalt antall poeng for deltakerne er " . array_sum($konkurranse) . " poeng. <br><br>";

    $mat1 = array('Nash', 'Euler');
    $mat2 = array('von Neumann', 'Gauss');
    $matematikere = array_merge($mat1, $mat2);
    print_r($matematikere);
    echo "<br><br>";

    $mat3 = array('John'=>"Nash", 'Leonard'=>"Euler");
    $mat4 = array('John'=>"von Neumann", 'Carl Friedrich'=>"Gauss");
    $matematkere2 = array_merge($mat3, $mat4);
    print_r($matematkere2);
?>