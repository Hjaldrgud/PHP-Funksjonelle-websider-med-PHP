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

var_dump(get_parent_class("Comfort"));
echo "<br>";
var_dump(is_subclass_of("Comfort", "Billy"));
echo "<br>";
var_dump(class_parents("Comfort"));

?>