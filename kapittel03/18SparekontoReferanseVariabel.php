<?php
    function sparing(&$sparekonto, $sparebelop) {
        $sparekonto = $sparekonto+$sparebelop;
    }
    $sparekonto=60000; 
    $sparebelop = 6000;
    sparing($sparekonto, $sparebelop);
    echo $sparekonto . "<br>";
    sparing($sparekonto, $sparebelop);
    echo $sparekonto . "<br>";
?>