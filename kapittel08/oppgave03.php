<?php
    class Bruker {
        private static $ant_brukere = 0;
        private $fnavn;
        private $enavn;
        private $bnavn;
        private $rdato;

        public function __construct(){
            $this->rdato = date("d.m.y k\l h:i:s");
            self::$ant_brukere++;
        }

        public function hentBrukere() {
            return self::$ant_brukere;
        }


    }

    $b = new Bruker;
    echo $b->hentBrukere();
?>