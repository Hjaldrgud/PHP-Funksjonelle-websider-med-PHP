<?php

    class Mor {
        protected $fineBein = true;

        protected function strikke() {
            return "Flink til å strikke.";
        }
    }

    class Datter extends Mor {

        public function hentStrikke() {
            return $this->strikke();
        }

        public function hentBein() {
            return $this->fineBein;
        }

    }

    $d = new Datter;
    echo $d->hentStrikke() .  "<br>";
    echo $d->hentBein();

?>