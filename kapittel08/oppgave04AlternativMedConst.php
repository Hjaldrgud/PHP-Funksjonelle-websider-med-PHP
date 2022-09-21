<?php
    class Bruker {
        private static $ant_brukere = 0;
        public $rdato;

        public function __construct(
            public $fnavn,
            public $enavn,
            public $bnavn
        ){
            $this->rdato = date("d.m.y k\l h:i:s");
            self::$ant_brukere++;
        }

        public function hentBrukere() {
            return self::$ant_brukere;
        }


    }

    $b = new Bruker(
        fnavn: "Andreas",
        enavn: "Lauvhjell",
        bnavn: "andrel13"
    );
    //$b->fnavn = "Andreas";
    //$b->enavn = "Lauvhjell";
    //$b->bnavn = "andrel13";

    foreach ($b as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }

?>