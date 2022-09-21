<?php
    $matrise = file("filer/faq.html") or die("kan ikke finne fila");
    foreach($matrise as $linje) {
        echo $linje . "<br>";
    }
?>