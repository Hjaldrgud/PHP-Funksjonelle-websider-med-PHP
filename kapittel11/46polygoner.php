<?php
    $punkter = array(
        40, 50, //Punkt 1... (x,y)
        20, 240,
        60, 60,
        240, 20,
        50, 40,
        10, 10 //Punkt 6... (x,y)
    );

    $bilde = imagecreate(200,200);
    $hvit = imagecolorallocate($bilde, 255,255,255);
    $svart = imagecolorallocate($bilde,0,0,0);
    imagefilledpolygon($bilde,$punkter,count($punkter)/2, $svart);

    header("Content_type: image/png");
    imagepng($bilde);
?>