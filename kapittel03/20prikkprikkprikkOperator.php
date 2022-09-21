<?php
    function pfunksjon(...$parametere) {
        echo implode(", ", $parametere);
    }
    pfunksjon("p1", "p2", "p3");
?>