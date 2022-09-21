<?php

    class Bruker {
        private array $innboks;

        public function __construct($navn){
            $this->navn = $navn;
            $this->$innboks[] = "Testdata";
        }

        public function hentNavn() {
            return $this->navn;
        }

        public function fåMelding($melding){
            $this->innboks($melding);
        }

        public function lesMelding(){
            print_r($this->innboks);
        }
    }

    class Melding {
        public function __construct ($melding){
            $this->melding = $melding;
        }

        public function hentMelding(){
            return $this->melding;
        }
    }
    
    $b1 = new Bruker("Andreas");
    $b1->fåMelding("Melding fått");
    $b1->lesMelding();

    
    #echo $b1->hentNavn();
    #$m1 = new Melding("Hallo");
    #echo $m1->hentMelding();
?>