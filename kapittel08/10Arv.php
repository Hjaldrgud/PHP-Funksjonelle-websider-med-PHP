<?php

    class Suvvy {
        var $farge;

        function finn_farge() {
            return $this->farge . "<br>";
        }
    }

    class Comfort extends Suvvy { 
    }

    class Sport extends Suvvy {
    }

?>