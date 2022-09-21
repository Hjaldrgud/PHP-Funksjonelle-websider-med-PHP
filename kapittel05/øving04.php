<?php
    function pre($array) {
    echo "<pre>";
    print_r($array);
    echo "<pre>";
    }

    $aDeltakere = array(
        'Andreas'=>0,
        'Torbjørn'=>0,
        'Adrian'=>0,
        'Erlend'=>0,
        'Larsi'=>0,
        'Thora'=>0,
        'Erik'=>0,
        'Wojtek'=>0,
        'Lellek'=>0,
        'Frøya'=>0
    );
    $aDeltakerenr = 1;
    while (count($aDeltakere)>1) {
        restart:
        $min = 100;

        echo "Runde " . $aDeltakerenr . "<br>";
        foreach($aDeltakere as $deltaker=>$tallverdi) {
            $tall = rand(1,50);
            $min = $min<=$tall ? $min : $tall;
            $aDeltakere[$deltaker]= $tall;
            echo $deltaker . " fikk " . $tall . " poeng.<br>";
        }
        $aTapere = array_keys($aDeltakere, $min);
        if((count($aDeltakere)-count($aTapere))<=0) {
            echo "Alle nåværende deltakere fikk lik poengsum! Ny runde! <br><br>";
            goto restart;
        }
        echo "<br> Den minste poengsummen er " . $min .". som betyr at deltaker"; 
        if (count($aTapere)>1){
            echo "ne <br>";
            foreach ($aTapere as $nøkkel => $navn) {
                echo "-" . $navn . "<br>";
                unset($aDeltakere[$navn]);
            }
        } else {
            echo " <br> -" . $aTapere[0] . "<br>";
            unset($aDeltakere[$aTapere[0]]);
        }
        echo "er ute av spillet. <br>>";
        unset($aDeltakere[array_search($min, $aDeltakere)]);
        $aDeltakerenr++;
        echo "<br><br>";
    }
    echo "<h3>" . array_key_first($aDeltakere) . " vant spillet!</h3>";
?>