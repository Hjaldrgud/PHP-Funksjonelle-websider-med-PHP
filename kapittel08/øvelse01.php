<?php

    class Validering {
        public function pvalidering($passord) {
            $returstreng = "";
            if(strlen($passord)<8) {
                $returstreng .= "-Passordet må inneholde minst åtte tegn.<br>";
            }
            if (!preg_match('/[0-9]/', $passord)) {
                $returstreng .= "-Passordet må inneholde minst ett tall.<br>";
            };
            if (!preg_match('/[!"\'^£$%&*()}{@#~?><>,|=_+¬-]/', $passord)){
                $returstreng .= "-Passordet må inneholde minst ett spesialtegn.<br>";
            }
            if (!preg_match('/[A-ZÆØÅ]/', $passord)) {
                $returstreng .= "-Passordet må inneholde minst en stor bokstav.<br>";
            }

            return $returstreng;
        }

    }

    $v = new Validering;
    echo $v->pvalidering("sport");


?>