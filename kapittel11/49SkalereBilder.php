<?php
    $bilde = imagecreatefrompng("filer/universitetsforlaget_logo.png");
    $b = imagesx($bilde);
    $h = imagesy($bilde);
    $x = $b/2;
    $y = $h/2;
    $nyttbilde = imagecreatetruecolor($x,$y);
    imagecopyresampled($nyttbilde,$bilde,0,0,0,0,$x,$y, $b, $h);

    header("Content-Type: image/png");
    imagepng($nyttbilde);
?>