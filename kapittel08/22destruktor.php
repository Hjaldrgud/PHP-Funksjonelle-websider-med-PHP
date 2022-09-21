<?php

    class Bruker {
        public static $ant_brukere;

        public function __construct() {
            self::$ant_brukere++;
            echo "Antall brukere har økt til " . self::$ant_brukere . "<br>";
        }

        public function __destruct() {
            self::$ant_brukere--;
            echo "Antall brukere har minsket til " . self::$ant_brukere . "<br>";
        }
    }
    $b1 = new Bruker;
    $b2 = new Bruker;
    unset($b2);
    $b3 = new Bruker;

    
?>