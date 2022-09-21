<?php
    //200 lodd
    //tre vinnere - 1, 2, 3
    //vinner får finest premie 5000 - 3000 - 1500
    //Skal trekke tre vinnerlodd fra 200 solgte og annonsere hvilken premie hvert vinnerlodd vinner.
    //Samme lodd kan ikke vinne to ganger
    function pre($array) {
        echo "<pre>";
        print_r($array);
        echo "<pre>";
    }


    $premie1 = 5000;
    $premie2 = 3000;
    $premie3 = 1500;
    $vinner1 = $vinner2 = $vinner3 = NULL;
    $loddhatt = array();

    for($i=1; $i<=200; $i++) {
        $loddhatt[] = $i;
    }
    shuffle($loddhatt);
    //pre($loddhatt);
    $vinner1 = $loddhatt[0];
    $vinner2 = $loddhatt[1];
    $vinner3 = $loddhatt[2];
    echo "<strong>Lodd nummer " . $vinner1 . " fikk førsteplassen og vant " . $premie1 . " kroner! Gratulerer! <br>";
    echo "<strong>Lodd nummer " . $vinner2 . " fikk andreplassen og vant " . $premie2 . " kroner! Gratulerer! <br>";
    echo "<strong>Lodd nummer " . $vinner3 . " fikk tredjeplassen og vant " . $premie3 . " kroner! Gratulerer! <br>";

    
?>