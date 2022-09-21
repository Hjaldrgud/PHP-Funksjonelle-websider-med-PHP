<?php

    class KrypteringsMaskin{

        public function krypter1($streng){
            return md5($streng);
        }

        //Veldig proff krypteringsalgoritme
        public function krypter2($streng){
            $strengMatrise = str_split($streng);
            echo implode($strengMatrise);
            echo "<br>";
            //Assosiativ shuffle
            $nøkkelmatrise = array_keys($strengMatrise);
            shuffle($nøkkelmatrise);
            foreach($nøkkelmatrise as $nøkkel) {
                $nyMatrise[$nøkkel] = $strengMatrise[$nøkkel];
            }
            $strengMatrise = $nyMatrise;
            echo implode($strengMatrise);

            //"Dekryptere"
            echo "<br>";
            ksort($strengMatrise);
            echo implode($strengMatrise);

        }
    }

    $krypt = new KrypteringsMaskin;
    //echo $krypt->krypter1("Halla på ræ");
    $krypt->krypter2("Halla");

?>