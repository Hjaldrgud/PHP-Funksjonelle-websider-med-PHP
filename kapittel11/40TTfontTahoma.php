<?php
    $bilde = imagecreate(200,200);
    $hvit = imagecolorallocate($bilde, 255,255,255);
    $svart = imagecolorallocate($bilde, 0,0,0);
    $font = "C:/Windows/Fonts/Tahoma.ttf";
    imagettftext($bilde, 14, 0, 20, 100, $svart, $font, "Smashing!");
    header("Content-Type: image/png");
    imagepng($bilde);
?>