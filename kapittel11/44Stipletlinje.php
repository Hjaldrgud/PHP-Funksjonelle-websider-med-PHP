<?php
    $bilde = imagecreate(200, 200);
    $svart = imagecolorallocate($bilde, 0, 0, 0);
    $hvit = imagecolorallocate($bilde, 255,255,255);

    $stil = array(
        $hvit,
        $hvit,
        $hvit,
        $hvit,
        $hvit,
        IMG_COLOR_TRANSPARENT,
        IMG_COLOR_TRANSPARENT,
        IMG_COLOR_TRANSPARENT,
        IMG_COLOR_TRANSPARENT,
        IMG_COLOR_TRANSPARENT
    );
    imagesetstyle($bilde, $stil);
    imageline($bilde, 50,25,50,79, IMG_COLOR_STYLED);


    header("Content-Type: image/png");
    imagejpeg($bilde);
?>