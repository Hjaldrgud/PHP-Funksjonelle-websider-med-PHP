<?php

    class Trafikklys {
        private $lysfarge = "rødt";

        public function hentLysfarge() {
            return $this->lysfarge;
        }

        public function endreLysfarge($farge) {
            $this->lysfarge = $farge;
        }
    }

    class Kryss {
        public function __construct(
            private int $ant_trafikklys
        ){}

        public function hent_ant_trafikklys() {
            return $this->$ant_trafikklys;
        }
    }

?>