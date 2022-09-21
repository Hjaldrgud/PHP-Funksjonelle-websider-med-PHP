<?php
    $da = microtime(true);
    echo $da . "<br>" ;
    for($i=1; $i<=5000; $i++){
        echo "lol";
    }
    $nå = microtime(true);
    echo "<br>" . $nå . "<br>";
    $diff = $nå-$da;
    echo $diff;

?>