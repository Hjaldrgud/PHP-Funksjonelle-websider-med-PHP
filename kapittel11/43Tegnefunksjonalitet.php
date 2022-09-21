<?php
    $font = "C:/Windows/Fonts/Tahoma.ttf";
    $str = isset($_REQUEST['s']) ? $_REQUEST['s'] : 12;
    $kode = isset($_REQUEST['k']) ? $_REQUEST['k'] : "eksempel";
    $bilde = imagecreatefrompng("filer/knapp.png");
    $svart = imagecolorallocate($bilde, 0,0,0);

    //Kalkulerer posisjoneringen av teksten:
    $sstr = imagettfbbox($str, 0, $font, $kode);
    $dx = abs($sstr[2]-$sstr['0']);
    $dy = abs($sstr[2]-$sstr['0']);
    $x = (imagesx($bilde) - $dx) / 2;
    $y = (imagesy($bilde) - $dy) / 2 + $dy;

    imagettftext($bilde, $str, 0, $x, $y, $svart, $font, $kode);

    imagesetpixel($bilde, 5, 5, $svart);
    imageline($bilde, 10, 10, 100, 100, $svart);

    header("Content-Type: image/png");
    imagepng($bilde);
?>