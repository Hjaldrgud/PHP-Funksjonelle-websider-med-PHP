<?php
    session_start();
    session_destroy();
    if(isset($_POST['innlogget'])) {
        require_once("../../../htdocsASSETS/inc/PDOgenerering.inc.php");
        require_once("../../../htdocsASSETS/inc/VaskingValidering.inc.php");
        $sql = "SELECT * FROM medlemmerk10ø3 WHERE m_bnavn = :bnavn";
        $sp = $pdo->prepare($sql);

        $sp->bindParam(":bnavn", $bnavn, PDO::PARAM_STR);
        $bnavn = vask($_POST['bnavn']);

        try {
            $sp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }

        if($sp->rowCount() > 0) {
            $medlem = $sp->fetch(PDO::FETCH_OBJ); //kun vanlig fetch til innlogging, ikke fetchAll! FetchAll er kun hvis man skulle ha hentet flere medlemmer.
            if(password_verify(vask($_POST['passord']), $medlem->m_passord)) {
                session_start();
                $_SESSION['medlem']['id'] = $medlem->m_id;
                $_SESSION['medlem']['bnavn'] = $medlem->m_bnavn;
                $_SESSION['medlem']['fnavn'] = $medlem->m_fnavn;
                $_SESSION['medlem']['fnavn'] = $medlem->m_enavn;
                $_SESSION['medlem']['innlogget'] = true;
                header("Location:øving03-3innlogget.php?id=$medlem->m_id");
                exit();
            } else {
                $meldinger[]="Brukernavn eller passord er feil";
            }
        } else {
            $meldinger[]="Brukernavn eller passord er feil";
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="bnavn" placeholder="brukernavn">
        <input type="password" name="passord" placeholder="passord">
        <input type="submit" value="logg inn" name="innlogget">
    </form>
    <?php
    if(isset($_POST['innlogget'])) {
        foreach ($meldinger as $melding) {
            echo $melding . "<br>";
        }
    }
    ?>
</body>
</html>