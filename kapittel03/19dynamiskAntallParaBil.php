<?php
    function omsetning() {
        if(!func_num_args()) {
            return "Ingen omsetning denne måneden!";
        } 
        else {
            $omsetning = array_sum(func_get_args());
            return "Omsetning: kr. " . number_format($omsetning, 2, ",", " ");
        }
    }
    echo omsetning(998414, 74500, 321000);
?>