<?php

    class Billy {
        var $farge;

        function finn_farge() {
            return $this->farge . "<br>";
        }
    }
    class Suvvy extends Billy {
    }
    Class Sport extends Billy {
        var $rekkevidde;

        function finn_rekkevidde() {
            $this->rekkevidde . "<br>";
        }
    }
    Class Comfort extends Suvvy {
    }
?>