<?php
    class Bruker {
        public static $ant_brukere = 0;

        public static function legg_til_bruker() {
            self::$ant_brukere++;
        }
    }
    Bruker::legg_til_bruker();
    echo Bruker::$ant_brukere;
?>