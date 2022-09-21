<?php

    class Person {
        private $epostadresse;

        public function sendEpost() {
        }

        public function hentEpost() {
        }
    }

    class Innboks {
        private $eposter=array();
    }

    class Epost {
        private $til;
        private $fra;
        private $melding;
    }



?>