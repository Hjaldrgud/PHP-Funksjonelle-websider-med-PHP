<?php
//Sjekke om installert:
if(extension_loaded("gd")) {
    echo "GD er installert.";
}

var_dump(gd_info());

//sjekke om PNG støttes:
if(imagetypes() & IMG_PNG) {
    echo "PNG støtte er aktivert";
}
?>