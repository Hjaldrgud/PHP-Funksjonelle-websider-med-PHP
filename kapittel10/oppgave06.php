<?php
    $po = "abcd";
    echo "ukryptert: " . $po . "<br>";
    $po = "kryptert1: " . password_hash($po, PASSWORD_DEFAULT);
    echo $po . "<br>";
    $po = "kryptert2: " . password_hash($po, PASSWORD_DEFAULT);
    echo $po . "<br>";
?>