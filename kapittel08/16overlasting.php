<?php

    class Bruker {
        public $fnavn; 
        public $enaavn;
        protected $bnavn;
        private $admin;

        public function fullt_navn() {
            return $this->fnavn . " " . $this->enavn;
        }

        protected function tilgang() {
            return $this->admin() ? "Admin" : "Medlem";
        }

        private function admin() {
            return $this->admin === true;
        }
    }

    class Leder extends Bruker {
        public function finn_tilgang() {
            return $this->tilgang();
        }
    }

    class Medlem extends Bruker {
    }
    $m = new medlem;

    echo $m->admin; //egenskapen er utilgjengelig: resulterer i feilmelding. (undefined property)
    $m->admin = true;
    echo $m->admin;
?>