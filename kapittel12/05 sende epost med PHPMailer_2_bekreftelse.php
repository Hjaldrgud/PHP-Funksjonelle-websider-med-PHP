<?php
    if(isset($_GET['k'])){
        $kode = $_GET['k'];
    } else {
        $kode = "(du fekk ikkje kode)";
    }

    echo "Takk. Du er registrert. Din kode var $kode";
?>