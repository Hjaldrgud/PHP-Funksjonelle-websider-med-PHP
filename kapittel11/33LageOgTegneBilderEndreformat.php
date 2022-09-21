<?php
    $bilde = imagecreate(200,200);
    $rod = imagecolorallocate($bilde, 255, 0 , 0);
    $svart = imagecolorallocate($bilde, 0,0,0);
    imagefilledrectangle($bilde, 50, 50, 150, 150, $svart);
    header("Content-Type: image/jpeg");
    imagejpeg($bilde);
?>