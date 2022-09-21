<?php 
        $bilde = imagecreate(200,200);
        $rod = imagecolorallocate($bilde, 255, 0 , 0);
        $svart = imagecolorallocate($bilde, 0,0,0);
        $hvit = imagecolorallocate($bilde, 255,255,255);
        imagefilledellipse($bilde, 50, 50, 150, 150, $svart);
        imagestring($bilde, 5, 50, 100, "Send inn", $hvit);
        header("Content-Type: image/png");
        imagepng($bilde);
?>