<?php
    $po = "abcd";
    echo "ukryptert: " . $po . "<br>";
    $po = "kryptert1: " . md5($po);
    echo $po . "<br>";
    $po = "kryptert2: " . md5($po);
    echo $po . "<br>";
?>