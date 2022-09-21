<?php
    $bilde = imagecreate(200,200);
    $hvit = imagecolorallocate($bilde, 255,255,255);
    $svart = imagecolorallocate($bilde,0,0,0);
    imagefilledrectangle($bilde, 50,50,150,150,$svart);
    $bilde = imagerotate($bilde,45,1);
    
    header("Content-Type: image/png");
    imagepng($bilde);
?>