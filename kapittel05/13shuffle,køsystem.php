<?php
    $sanger = $sanger2 = $sanger3 = array ("Ohne Dich", "Heirate Mich", "Bück Dich", "Amerika");
    shuffle($sanger);
    print_r($sanger);
    echo "<br>";
    $sang = array_shift($sanger2);
    print_r($sanger2);
    echo "<br>";

    array_unshift($sanger3, "Du Hast");
    print_r($sanger3);
?>