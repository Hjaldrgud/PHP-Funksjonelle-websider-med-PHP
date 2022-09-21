<?php
    require("SimpleImage.php");
    $bilde = new SimpleImage();
    $bilde->load('bilde1.png');
    $bilde->resize(320, 200);
    $bilde->save('bilde2.jpg', IMAGETYPE_JPEG);
?>