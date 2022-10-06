<?php require_once("../../../../htdocsASSETS/inc/DB.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="bnavn" placeholder="brukernavn"><br>
        <input type="password" name="passord" placeholder="passord"><br>
        <input type="submit" value="logg inn" name="innlogg">
    </form>
    <?php
    if(isset($_REQUEST['innlogg'])) {
        $sql = "SELECT * FROM medlemmerk11ø3 WHERE m_bnavn = :bnavn";
        $sp = $pdo->prepare($sql);

        $sp->bindParam(":bnavn", $_REQUEST['bnavn'], PDO::PARAM_STR);

        try {
            $sp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }

        if($sp->rowCount() > 0){
            $medlem = $sp->fetch(PDO::FETCH_OBJ);
            if(password_verify($_REQUEST['passord'], $medlem->m_passord)){
                session_start();
                $_SESSION['bruker']['bnavn'] = $medlem->m_bnavn;
                $_SESSION['bruker']['ID'] = $medlem->m_id;
                $_SESSION['bruker']['innlogget'] = 1;
                $_SESSION['bruker']['fulltnavn'] = $medlem->m_fnavn . " " . $medlem->m_enavn;
                header("Location:øving03_3_innlogget.php?id=$medlem->m_id");
                exit();
            } else {
                $meldinger[]="Brukernavn eller passord er feil.";
            }
        } else {
            $meldinger[]="Brukernavn eller passord er feil.";
        }

        foreach ($meldinger as $melding) {
            echo $melding;
        }
    }
    ?>
</body>
</html>