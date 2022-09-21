<?php

    class Bruker {
        public function __construct(
            public string $fnavn,
            public string $enavn,
        ){}
    }
    $data = array('fnavn' => "uten", 'enavn' => "navn");

    $b = new Bruker(
        fnavn: $data['fnavn'],
        enavn: $data['enavn'],
    );
    print_r($b);

?>