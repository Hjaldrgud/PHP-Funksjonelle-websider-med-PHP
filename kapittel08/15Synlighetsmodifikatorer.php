<?php

    class Bruker {
        public $fnavn; 
        public $enavn;
        protected $bnavn;
        private $admin;

        public function fullt_navn() {
            return $this->fnavn . " " . $this->enavn;
        }

        public function offentligTilgang() {
            return $this->tilgang();
        }

        protected function tilgang() {
            return $this->admin() ? "Admin" : "Medlem";
        }

        private function admin() {
            return $this->admin === true;
        }
    }

    $b = new Bruker;
    //echo $b->admin; //ikke tillatt
    //echo $b->admin = true; //ikke tillatt
    //echo $b->admin(); //ikke tillatt
    echo $b->fullt_navn(); //tillatt!
    //echo $b->tilgang(); //Står i boka at skal være tilgjengelig, men er ikke det

    class Leder extends Bruker {
        public function finn_tilgang() {
            return $this->tilgang();
        }
    }
    $l = new Leder;
    echo $l->finn_tilgang();
?>