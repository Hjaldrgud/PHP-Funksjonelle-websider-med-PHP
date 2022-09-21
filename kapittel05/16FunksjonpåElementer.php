<?php
    function lagGrafikk($verdi, $nøkkel) {
        echo $nøkkel . ": ";
        for($i=1; $i<=$verdi; $i++) {
            echo "*";
        }
        echo "<br>";
    }

    $konkurranse = array ('Ida'=>5, 'Per'=>3, 'Thea'=>9, 'Ola'=>0);
    array_walk($konkurranse, "lagGrafikk");
    echo "<br><br><br>";

    function lagGrafikk2($verdi, $nøkkel, $ekstra) {
        echo $nøkkel . ": ";
        for($i=1; $i<=$verdi; $i++) {
            echo $ekstra['symbol'];
        }
        echo $ekstra['separator'];
    }

    $konkurranse2 = array ('Ida'=>5, 'Per'=>3, 'Thea'=>9, 'Ola'=>0);
    $ekstra = array('symbol'=>"+", 'separator'=>" | ");
    array_walk($konkurranse2, "lagGrafikk2", $ekstra);
?>