<?php
    session_start();
    session_destroy();
    if(isset($_REQUEST['registrert'])) {
        require_once("../../../htdocsASSETS/inc/PDOgenerering.inc.php");
        $bnavn = $_REQUEST['bnavn'];
        $passord = password_hash($_REQUEST['passord'], PASSWORD_DEFAULT);
        $fnavn = $_REQUEST['fnavn'];
        $enavn = $_REQUEST['enavn'];
        $epost = $_REQUEST['epost'];
        $adresse = $_REQUEST['adresse'];
        $postnummer = $_REQUEST['postnummer'];
        $poststed = $_REQUEST['poststed'];

        $sql = "INSERT INTO medlemmerk10ø3 (m_bnavn, m_passord, m_fnavn, m_enavn, m_epost, m_adresse, m_postnummer, m_poststed)
                VALUES (:bnavn, :passord, :fnavn, :enavn, :epost, :adresse, :postnummer, :poststed)";
        $sp = $pdo->prepare($sql);

        $sp->bindParam(":bnavn", $bnavn, PDO::PARAM_STR);
        $sp->bindParam(":passord", $passord, PDO::PARAM_STR);
        $sp->bindParam(":fnavn", $fnavn, PDO::PARAM_STR);
        $sp->bindParam(":enavn", $enavn, PDO::PARAM_STR);
        $sp->bindParam(":epost", $epost, PDO::PARAM_STR);
        $sp->bindParam(":adresse", $adresse, PDO::PARAM_STR);
        $sp->bindParam(":postnummer", $postnummer, PDO::PARAM_INT);
        $sp->bindParam(":poststed", $poststed, PDO::PARAM_STR);

        try {
            $sp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }

        if($pdo->lastInsertId() > 0) {
            echo "Konto registrert";
        } else {
            echo "Konto ble ikke registrert";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medlemsregistrering</title>
</head>
<body>
    <?php if(!isset($_REQUEST['registrert'])) { ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> <br>
        <input type="text" name="bnavn" placeholder="brukernavn"><br>
        <input type="password" name="passord" placeholder="passord"><br>
        <input type="text" name="fnavn" placeholder="fornavn"><br>
        <input type="text" name="enavn" placeholder="etternavn"><br>
        <input type="email" name="epost" placeholder="e-post"><br>
        <input type="text" name="adresse" placeholder="adresse"><br>
        <input type="number" name="postnummer" placeholder="postnummer" max="9999"><br>
        <input type="text" name="poststed" placeholder="poststed"><br>
        <input type="submit" value="registrer" name="registrert">
    </form>
    <?php } ?>
</body>
</html>