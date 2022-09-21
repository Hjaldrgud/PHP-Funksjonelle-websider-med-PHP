<?php

    class Bruker {
        var $fnavn;
        var $enavn;
        var $bnavn;

        function fullt_navn() {
            return $this->fnavn . " " . $this->enavn;
        }
    }
    class Medlem extends Bruker {
    }
    Class Leder extends Bruker {    
    }

    $b = new Bruker;
    $b->fnavn = "Andreas";
    $b->enavn = "Lauvhjell";
    $b->bnavn = "andrel13";

    $m = new Medlem;
    $m->fnavn = "Frøya";
    $m->enavn = "Aasebø";
    $m->bnavn = "juui";
    
    $l = new Leder;
    $l->fnavn = "Adolf";
    $l->enavn = "Hitler";
    $l->bnavn = "Führer";
    
    echo $b->fullt_navn() . "<br>";
    echo $m->fullt_navn() . "<br>";
    echo $l->fullt_navn() . "<br>";
?>