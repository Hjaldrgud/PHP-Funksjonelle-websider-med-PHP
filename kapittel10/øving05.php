<?php
    $kryptertOrd = "a40400da36cd4e073c56326596f45c99";
    $bokstavArrayl = range("a","z");
    $bokstavarrayU = range("A", "Z");
    $tallarray = range(0,9);
    $fullCharArray = array_merge($bokstavArrayl, $bokstavarrayU, $tallarray);
    $starttid = time();
    dekrypter();

    function dekrypter() {
        global $fullCharArray;
        global $kryptertOrd;
        global $starttid;
        $hashetOrd = "";
        $origOrd = "";
        $j=1;
        while($kryptertOrd != $hashetOrd) {
            for($i=1; $i<=4; $i++) {
                $bokstav = $fullCharArray[rand(0,61)];
                $origOrd .= $bokstav;
                $hashetOrd = md5($origOrd);
            }
            if($kryptertOrd != $hashetOrd) {
                $origOrd="";
                $j++;
            } else {
                $sluttid = time();
                echo "<b>fullført.<br></b>";
            }
        }
        echo "Korrekt ord ut fra hashen " . $kryptertOrd . " er " . $origOrd . ".<br>";
        echo "Dette tok " . $j . " itereringer.<br>";
        echo "Antall sekunder det tok er " . ($sluttid-$starttid) . "<br>";
        echo "hasher: " . $kryptertOrd . " == " . $hashetOrd . "<br>";
        echo "Antall passordkombinasjoner er " . pow(61, 4);
    }













?>