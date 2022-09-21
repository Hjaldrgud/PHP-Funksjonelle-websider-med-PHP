<?php

    class Mor {
        public $fornavn = "Inger";
        public $etternavn = "Lauvhjell";

        public function strikke() {
            return "Veldig flink til å strikke";
        }

        public function hekle() {
            return "Veldig flink til å hekle";
        }
    }

    class Datter extends Mor {
    }
    $m = new Mor;
    $d = new Datter;

    echo $m->fornavn . "<br>";
    echo $m->etternavn . "<br>";
    echo $m->strikke() . "<br>";
    echo $m->strikke() . "<br>";

    echo $d->fornavn . "<br>";
    echo $d->etternavn . "<br>";
    echo $d->strikke() . "<br>";
    echo $d->strikke() . "<br>";


?>