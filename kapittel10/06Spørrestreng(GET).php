<?php
    if(isset($_REQUEST['id']) && isset($_REQUEST['handling'])) {
        echo "Hentede verdier: " . $_REQUEST['id'] . " og " . $_REQUEST['handling'];
    }
?>