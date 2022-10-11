<?php
    $radnr = 1;
    if(($peker = fopen("testtabell.csv", "r")) !==FALSE){
        while(($rad = fgetcsv($peker, 1000, ",")) !==FALSE){
            $rad = array_filter($rad);
            $ant = count($rad);
            if($ant){
                echo "<p> $ant felt på linje $radnr: <br /></p>\n";
                $radnr++;
                for($f=0; $f<$ant; $f++){
                    echo $rad[$f] . "<br />\n";
                }
            }
        }
        fclose($peker);
    }
?>