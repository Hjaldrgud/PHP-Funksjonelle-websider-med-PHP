<?php

    class Bruker {
        public static $ant_brukere = 0;

        public function __construct() {
            self::$ant_brukere++;
        }
    }
    $b = new Bruker;
    echo Bruker::$ant_brukere;

?>