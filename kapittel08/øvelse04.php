<?php function brukerskjema(){?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="fnavn" placeholder="fornavn"><br>
    <input type="text" name="enavn" placeholder="etternavn"><br>
    <input type="text" name="bnavn" placeholder="brukernavn"><br>
    <input type="email" name="epost" placeholder="e-postadresse"><br>
    <input type="submit" value="Send inn" name="sendt"><br>
    </form>
<?php } ?>
<?php
    class Bruker{
        private string $fnavn = "ikke satt";
        private string $enavn = "ikke satt";
        private string $bnavn = "ikke satt";
        private string $epost = "ikke satt";

        public function settBrukerInfo($fnavn, $enavn, $bnavn, $epost) {
            $this->fnavn = $fnavn;
            $this->enavn = $enavn;
            $this->bnavn = $bnavn;
            $this->epost = $epost;
        }

        public function hentBrukerInfo(){
            return "Fornavn: " . $this->fnavn . "<br>" . "Etternavn: " . $this->enavn . "<br>" . "Brukernavn: " . $this->bnavn . "<br>" . "Epost: " . $this->epost . "<br>";
        }

        public function registrerInfo(){
            brukerskjema();
            if(isset($_REQUEST['sendt'])) {
                $fnavn = $_REQUEST['fnavn'];
                $enavn = $_REQUEST['enavn'];
                $bnavn = $_REQUEST['bnavn'];
                $epost = $_REQUEST['epost'];
                $this->settBrukerInfo($fnavn, $enavn, $bnavn, $epost);
                echo "<br>Informasjon oppdatert: <br>";
                echo $this->hentBrukerInfo();
            }
        }
    }
    

    class Leder extends Bruker{

    }

    class Administrator extends Leder{

    }?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $b = new bruker;
    echo $b->hentBrukerInfo();
    $b->registrerInfo();
    ?>
</body>
</html>