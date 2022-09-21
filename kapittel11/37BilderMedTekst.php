<?php
    $bilde = imagecreate(200,200);
    $rod = imagecolorallocate($bilde, 255, 0 , 0);
    $svart = imagecolorallocate($bilde, 0,0,0);
    $hvit = imagecolorallocate($bilde, 255,255,255);
    imagefilledrectangle($bilde, 50, 50, 150, 150, $svart);
    $kode = password_hash(time(), PASSWORD_DEFAULT);
    imagestring($bilde, 5, 80, 100, substr($kode, rand(0,50), 5), $hvit);
    header("Content-Type: image/jpeg");
    imagejpeg($bilde);

?>