<?php

    class MB {
        private $hestekrefter = 76;

        public function hentHK() {
            return $this->hestekrefter;
        }

        public function endreHK($hk) {
            $this->hestekrefter = $hk;
        }
        
    }

    $mb = new MB;
    echo $mb->hentHK() . "<br>";
    echo $mb->endreHK(100) . "<br>";
    echo $mb->hentHK() . "<br>";

?>