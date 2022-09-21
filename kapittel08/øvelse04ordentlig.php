<?php
    function bryt($ant=1){
        for($i=1; $i<=$ant; $i++){
            echo "<br>";
        }
    }


    class Bruker {
        protected string $fnavn = "ikke satt";
        protected string $enavn = "ikke satt";
        protected string $bnavn = "ikke satt";
        protected string $epost = "ikke satt";


        public function __construct(){
            $this->kontotype="Bruker";
        }

        public function hentInfo() {
            echo "Fornavn: " . $this->fnavn . "<br>Etternavn: " . $this->enavn . "<br>Brukernavn: " . 
                 $this->bnavn . "<br>Epost: " . $this->epost . "<br>Kontotype: " . $this->kontotype . "<br>";
        }

        public function settInfo($fnavn, $enavn, $bnavn, $epost) {
            $this->fnavn = $fnavn;
            $this->enavn = $enavn;
            $this->bnavn = $bnavn;
            $this->epost = $epost;
        }
    }

    class Leder extends Bruker {
        public function __construct(){
            parent::__construct();
            $this->kontotype="Leder";
        }

        public function oppdaterBruker($bruker, $fnavn, $enavn, $bnavn, $epost){
            $bruker->fnavn = $fnavn;
            $bruker->enavn = $enavn;
            $bruker->bnavn = $bnavn;
            $bruker->epost = $epost;
        }
    }

    class Administrator extends Leder {
        public function __construct(){
            parent::__construct();
            $this->kontotype="Administrator";
        }
    }

    $b1 = new Bruker;
    $b2 = new Bruker;
    $l = new Leder;
    $a = new Administrator;
    
    $b1->settInfo("Andreas", "Lauvhjell", "andrel13", "lauvhjell@gmail.com");
    $b1->hentInfo();
    bryt();

    $b2->settInfo("Lars", "Lindstøl", "Slapps", "llindstoel@mail.com");
    $b2->hentInfo();
    bryt();

    $l->settInfo("Frøya", "Aasebø", "juui", "froyaaasebo@hotmail.com");
    $l->hentInfo();
    bryt();

    $a->settInfo("Keanu", "Reeves", "MelErGodt", "soviroKeanu@yahoo.com");
    $a->hentInfo();
    bryt(2);

    echo "<strong>Ledertest<br></strong>";
    $l->oppdaterBruker($b1, "Deas", "Lauv", "Hjaldrgud", "lauv1337@hotmail.com");
    $b1->hentInfo();
    bryt(2);

    echo "<strong>Adminarv fra Leder-test<br></strong>";
    $l->oppdaterBruker($b1, "Andy", "Leafshelf", "Kosedreng", "andreas.lauvhjell@hotmail.com");
    $b1->hentInfo();
    bryt(2);

    echo "<strong>Bruker kan ikke endre annen bruker-test<br></strong>";
    try {
        $b1->oppdaterBruker($b2, "Test:", "skal", "IKKE", "gå@an");
        $b2->hentInfo();
    } catch (\Throwable $th) {
        echo "Bruker kan ikke endre kontoinformasjon til annen bruker. Den som endrer må enten være Leder eller Admin.";
    }
    
?>