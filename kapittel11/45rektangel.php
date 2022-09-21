<?php
    $bilde = imagecreate(200, 200);
    $svart = imagecolorallocate($bilde, 0, 0, 0);
    
    imagerectangle($bilde, 50, 50, 150, 150, $svart);

    header("Content-Type: image/png");
    imagejpeg($bilde);