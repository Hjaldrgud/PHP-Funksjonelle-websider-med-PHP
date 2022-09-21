<?php
    function pre($array) {
        echo "<pre>";
        print_r($array);
        echo "<pre>";
    }

    //Matrise som genererer premier slik at premier blir uniforme, altså hvis to får seks rette, så skal de ha lik premie.
    $premiepott = array (
        7       => rand(1000000,10000000),
        '6+1'   => rand(50000,250000),
        6       => rand(1000,10000), 
        5       => rand(75, 500),
        4       => rand(30,65)
    );

    //function trekning() {
        $lottotrekning = range(1,12);
        shuffle($lottotrekning);
        $lottotrekning= array_splice($lottotrekning, 0, 9);
        #pre($lottotrekning);

        //(sju) hovedtall skilles ut i en ny matrise. Deretter sorteres matrisen fra låg til høg.
        $hovedtall = array_splice($lottotrekning, 0, 7);
        asort($hovedtall);

        //(to) tilleggstall skilles ut i en ny matrise. Deretter sorteres matrisen fra låg til høg.
        $tilleggstall = $lottotrekning;
        asort($tilleggstall);

        //annonsering av trekning: 
        echo "<strong>Dette er hovedtallene:</strong> <br>";

        //String for å lagre hovedtallene i.
        $hovedtallsrekka = "";
        foreach ($hovedtall as $key => $value) {
            $hovedtallsrekka .= ($value<10 ? "0" : "") . $value . " - ";
        }
        //Substr fjerner " - " på slutten som kommer med i foreach.
        //"If length is given and is negative, then that many characters will be omitted from the end of string" -substr dokumentasjon.
        //Skriver ut hovedtallene..
        echo substr($hovedtallsrekka, 0, -3);

        //SKriver ut tilleggstallene omtrent likt til hovedtallene.
        echo "<br><strong>Dette er tilleggstallene:</strong> <br>";
        $tilleggstallsrekka = "";
        foreach ($tilleggstall as $key => $value) {
            $tilleggstallsrekka .= ($value<10 ? "0" : "") . $value . " - ";
        }
        echo substr($tilleggstallsrekka, 0, -3);
    //}

    //Funksjon som generer en tilfeldig lottokupong til en tipper. Antall kuponger som skal lages må annonseres.
    function kuponggenerering($itereringer) {
        //Det at de ikke var globale gjorde meg nesten gal i rundt en time.
        global $hovedtall;
        global $tilleggstall;
        
        for($i=1; $i<=$itereringer; $i++) {
            $kupong = range(1,12);
            shuffle($kupong);
            $kupong = array_splice($kupong, 0, 7);
            asort($kupong);
            
            //Skriver ut tallene i string-format for lesbarhet. Ikke bruk til kalkyler. Bruk matrisen.
            $kupongstring = "";
            foreach ($kupong as $key => $value) {
                $kupongstring .= ($value<10 ? "0" : "") . $value . " - ";
            }
            echo "<strong>Kupong nr: " . $i . "</strong><br>" . substr($kupongstring, 0, -3);
            
            //Sjekker hvor mange rette kupongen har.
            //array_diff returnerer en matrise der tall som ikke er ligger i begge blir gitt.  
            $uliketall = array_diff($hovedtall, $kupong);
            //Hvis antall rette tall er 6 (som man finner ut med å ta sju rette og trekke ifra antall differanse man fant i array_diff)...
            if(7 - count($uliketall) == 6) {
                //... Så sjekk om man får noe rett på tilleggstalla, siden 6+1 rette er premie på.
                $tilleggstallsjekk = array_diff($tilleggstall, $kupong);
                if(count($tilleggstallsjekk) == 1) {
                    echo "<br>6+1 rette.";
                    premiesjekk('6+1');
                } else {
                    echo "<br>6 rette.";
                    premiesjekk(6);
                }
            } 
            //Hvis antall rette tall IKKE er 6, så send over antall rette til premiesjekk, slik at den kan finne ut hvorvidt kupongen vant.
            else {
                echo "<br>" . 7-count($uliketall) . " rette.";
                premiesjekk(7 - count($uliketall));
            }
            echo "<br><br>";
        }
    }

    function premiesjekk($rette) {
        global $premiepott;
        if ($rette<4) {
            echo "<br>Ingen premie.";
        } else {
            echo "<br>Denne kupongen vant " . number_format($premiepott[$rette], 2, ",", " ") . " kroner! <br>";
        }

    }

    echo "<br><br><br>";
    kuponggenerering(10);

?>