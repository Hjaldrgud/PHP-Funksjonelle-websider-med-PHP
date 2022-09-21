<?php
    $m = array("", NULL, 0);
    for($i=0; $i<count($m); $i++) {
        echo (isset($m[$i])) ? "Nøkkel $i OK <br>" : "Nøkkel $i finnes ikke <br>";
    }
    echo "<br><br>";

    $m2 = array("", NULL, 0);
    for($i=0; $i<count($m2); $i++) {
        echo array_key_exists($i, $m2) ? "Nøkkel til $i er OK <br>" : "Nøkkel til $i finnes ikke<br>";
    }
?>