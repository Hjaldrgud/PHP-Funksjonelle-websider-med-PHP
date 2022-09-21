<?php
    //Prøvdt å logge inn?
    if(isset($_REQUEST['loggin'])) {
        //kobler til DB
        require_once("../../../htdocsASSETS/inc/PDOgenerering.inc.php");
        require_once("../../../htdocsASSETS/inc/VaskingValidering.inc.php");

        //lager SQL-spørringens struktur:
        $sql = "SELECT ID, fnavn, enavn, passord FROM medlemmer WHERE brukernavn = :brukernavn";

        //steg 1: forbereder spørringen
        $sp = $pdo->prepare($sq);

        //steg 2: kopler parametrene våre med SQL-spørringens struktur
        $sp->bindParam(':brukernavn', $brukernavn, PDO::PARAM_STR);
        $brukernavn = $_POST['brukernavn']; //obs: $_POST og ikke $_REQUEST

        //utfører spørringa og henter resultatet
        try {
            $sp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }

        //hent data om medlemmet
        $sp->fetchAll(PDO::FETCH_OBJ);

        //sjekker om passordet er gyldig
        if(password_verify(vask($POST['passord']), $medlem->passord)) {
            //Passordene matcher: 
            session_start();
            $_SESSION['bruker']['brukernavn'] = $brukernavn;
            $_SESSION['bruker']['id'] = $medlem->id;
            $_SESSION['bruker']['fornavn'] = $medlem->fnavn;
            $_SESSION['bruker']['etternavn'] = $medlem->enavn;
            $_SESSION['bruker']['innlogget'] = true;

            //videresender brukeren til innsiden av systemet
            header("Location: passordbeskyttet.php");
            exit();
        } else {
            echo "Brukernavn eller passord er ikke riktig";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logg inn</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <div>
        <input type="text" name="brukernavn" placeholder="brukernavn">
        <input type="password" name="passord" placeholder="passord">
        <input type="submit" value="logg inn" name="loggin">
    </div>
    </form>
</body>
</html>