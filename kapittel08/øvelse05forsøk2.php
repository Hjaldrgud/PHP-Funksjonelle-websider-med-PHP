<?php

    class Bruker {
        private static $ant_brukere = 0;
        private array $innboks = array();
        private string $navn;

        function __construct($navn){
            $this->navn = $navn;
            self::$ant_brukere++;
        }

        function send($til, $melding){
            $m = new Melding($til->hentNavn(), $this->navn, $melding);
            $til->motta($m);
        }

        function motta(Melding $melding){
            $innboks[] = $melding;
        }

        function hentInnboks(){
            print_r($this->$innboks);
        }

        function lesMelding(){

        }

        function settNavn($navn){
            $this->navn = $navn;
        }

        function hentNavn(){
            return $this->navn;
        }
    }

    class Melding {
        private string $til;
        private string $fra;
        private string $innhold;

        public function __construct($til, $fra, $melding){
            $this->til = $til;
            $this->fra = $fra;
            $this->melding = $melding;
        }
    }

    $b1 = new Bruker("Andreas");
    $b2 = new Bruker("Frøya");
    $b1->send($b2, "Hei!");
    echo get_class($m);
    //$b2->hentInnboks();
?>