<?php

    class LynMelding {
        public int $aktiveMeldinger;
        public int $meldingiTimen;

    }

    class Bruker {
        private string $epost;
        private array $innboks;
        private int $ant_brukere;
        
        public function __construct($epost){
            self::$ant_brukere++;
        }
        public function __destruct(){
            self::$ant_brukere--;
        }

        //send
        public function send($til, $melding) {
            $m = new Melding();
            $m->lagMelding($til, $this, $melding);
        }

        //se innboks
        public function hentInnboks(){
            
        }

        //les
        public function lesMelding($meldingsid) {

        }
    }

    class Melding {
        private string $til;
        private string $fra;
        private string $melding;
        private int $tid;
        
        public function lagMelding($til, $fra, $melding){
            $this->til=$til;
            $this->fra=$fra;
            $this->melding=$melding;
        }

        //tell ned

        //slett
        public function slettMelding(){
            $this->__destruct();
        }

    }



?>