<?php

    Class Bruker {
        private $leder;

        public function sett_leder($leder) {
            if(!is_bool($leder)) {
                throw new Exception($leder . " er ikke gyldig type. Kun boolsk verdi er gyldig");
            }
            $this->leder = $leder;
        }

        public function hent_leder(){
            return ($this->leder) ? "sant" : "usant";
        }
    }
    $b = new Bruker;
    //echo $b->leder; //resulterer i feilmelding (cannot access private property)
    $b->sett_leder(true); //ok
    echo $b->hent_leder();
?>