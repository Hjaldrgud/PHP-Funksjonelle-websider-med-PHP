<?php
    class Bruker {
        var $fnavn;
        var $enavn;
        var $bnavn;

        function fullt_navn() {
            return $this->fnavn . " " . $this->enavn;
        }
    }
    class Leder extends Bruker {
        function fullt_navn() {
            return $this->fnavn . " " . $this->enavn . " (leder)";
        }
    }
    $l = new Leder;
    $l->fnavn = "Adolf";
    $l->enavn = "Hitler";
    $l->bnavn = "Führer";
    echo $l->fullt_navn();
?>