<?php
    $bilde = imagecreate(200,200);
    $hvit = imagecolorallocate($bilde, 255,255,255);
    $rod = imagecolorallocate($bilde, 255,0,0);
    $gronn = imagecolorallocate($bilde, 0,255,0);
    $bla = imagecolorallocate($bilde, 0, 0, 255);

    imagearc($bilde, 100, 100, 200, 200, 0, 360, $hvit);
    imagearc($bilde, 100,100,150,150,25,155,$rod);
    imagearc($bilde,60,75,50,50,0,360,$gronn);
    imagearc($bilde,140,75,50,50,0,360,$bla);

    imagefilltoborder($bilde,60,75,$gronn, $gronn);
    
    header("Content-Type: image/png");
    imagepng($bilde);
?>