<?php
    class Bruker {
        private $fnavn;
        private $enavn;
        private $bnavn;
        private $rdato;

        public function __construct(){
            $this->rdato = date("d.m.y k\l h:i:s");
        }

        public function hentRdato() {
            return $this->rdato;
        }
    }

    $b = new Bruker;
    echo $b->hentRdato();
?>