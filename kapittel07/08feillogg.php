<?php

    error_log("Dette gikk galt!", 3, "var/log/feil.log");

    error_log("Dette gikk galt!", 1, "feil@***.no");
    
    $a = $b = 5;
    $c = [];
    do {
        $c[] = $a * $b;
        if($a==7)
            echo end($c);
        $a++;
        $b--;
    }
    while($a<10);
    var_dump($c);


?>