<?php
    class Bruker {
        private static $ant_brukere = 0;
        public $fnavn;
        public $enavn;
        public $bnavn;
        public $rdato;

        public function __construct(){
            $this->rdato = date("d.m.y k\l h:i:s");
            self::$ant_brukere++;
        }

        public function hentBrukere() {
            return self::$ant_brukere;
        }


    }

    $b = new Bruker;
    $b->fnavn = "Andreas";
    $b->enavn = "Lauvhjell";
    $b->bnavn = "andrel13";

    foreach ($b as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }

?>