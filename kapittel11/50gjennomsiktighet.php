<?php
$bilde = imagecreatetruecolor(200,200);

imagealphablending($bilde, false);
$rod = imagecolorallocate($bilde, 255, 0, 0);
imagefilledrectangle($bilde,50,50,150,150,$rod);

imagealphablending($bilde, true);
$bla = imagecolorallocatealpha($bilde, 0, 0, 255, 63);
imagefilledrectangle($bilde, 75,75,125,125, $bla);

header("Content-Type: image/png");
imagepng($bilde);

imagedestroy($bilde);
?>