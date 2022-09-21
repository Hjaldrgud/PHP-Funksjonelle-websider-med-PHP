<?php
    $kode = substr(md5(date("YmdHis")), rand(0,27), 4);
    echo $kode . "<br><br>";

    $radius = 5;
    $omkrets = 2 * pi() * $radius;
    $areal = pi() * pow($radius, 2);

    echo "Omkretsen av sirkelen er " . round($omkrets, 2 ) . " og arealet av sirkelen er " . round($areal, 2) . "<br><br>";

    $tall1 = 7;
    $tall2 = 9;
    echo abs($tall1 - $tall2) . "<br><br>";

    $tekststreng = substr("abcdef", 4, -4);
    echo $tekststreng;
    var_dump($tekststreng);
?>