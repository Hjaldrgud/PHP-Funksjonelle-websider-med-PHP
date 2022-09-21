<?php
    session_start();
    session_destroy();
    $meldinger = array();
    if(isset($_POST['innlogget'])) {
        require_once("../../../htdocsASSETS/inc/PDOgenerering.inc.php");
        require_once("../../../htdocsASSETS/inc/VaskingValidering.inc.php");
        $sql = "SELECT br_id, br_fnavn, br_enavn, br_epost, br_po FROM brukere WHERE br_bnavn = :bnavn";
        $sp = $pdo->prepare($sql);

        $bnavn = vask($_POST['bnavn']);
        $sp->bindParam(':bnavn', $bnavn, PDO::PARAM_STR);
        try {
            $sp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }

        if($sp->rowCount() > 0) {
            $bruker = $sp->fetch(PDO::FETCH_OBJ);
            if(password_verify(vask($_POST['passord']), $bruker->br_po)) {
                session_start();
                $_SESSION['bruker']['ID'] = $bruker->br_id;
                $_SESSION['bruker']['fnavn'] = $bruker->br_fnavn;
                $_SESSION['bruker']['enavn'] = $bruker->br_enavn;
                $_SESSION['bruker']['epost'] = $bruker->br_epost;
                $_SESSION['bruker']['innlogget'] = true;
                header("Location: øving02passordbeskyttet.php");
                exit();
            } else {
                $meldinger[] = "Brukernavn eller passord er feil.";
            }
        } else {
            $meldinger[] = "Brukernavn eller passord er feil.";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Øvelse02 - innlogging</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="bnavn" placeholder="brukernavn">
        <input type="password" name="passord" placeholder="passord">
        <input type="submit" value="logg inn" name="innlogget">
    </form>
    <br>
    <?php
        if(count($meldinger) > 0) {
            foreach ($meldinger as $melding) {
                echo $melding . "<br>";
            }
        }
    ?>
    <br>
    ikke bruker? registrer deg <a href="http://localhost/phpskole/kapittel10/%C3%B8ving02registrerBruker.php">her</a> 
</body>
</html>