<?php
    require_once("../../../htdocsASSETS/inc/PDOgenerering.inc.php");
    require_once("../../../htdocsASSETS/inc/VaskingValidering.inc.php");
    if(isset($_REQUEST['registrert'])) {

        $bnavn = vask($_REQUEST['bnavn']);
        $fnavn = vask($_REQUEST['fnavn']);
        $enavn = vask($_REQUEST['enavn']);
        $epost = sjekkEpost(vask($_REQUEST['epost']));
        $passord = password_hash(vask($_REQUEST['passord']), PASSWORD_DEFAULT);

        $sql = "INSERT INTO brukere (br_bnavn, br_fnavn, br_enavn, br_epost, br_po)
                VALUES (:bnavn, :fnavn, :enavn, :epost, :passord)";
        $sp = $pdo->prepare($sql);

        $sp->bindParam(":bnavn", $bnavn, PDO::PARAM_STR);
        $sp->bindParam(":fnavn", $fnavn, PDO::PARAM_STR);
        $sp->bindParam(":enavn", $enavn, PDO::PARAM_STR);
        $sp->bindParam(":epost", $epost, PDO::PARAM_STR);
        $sp->bindParam(":passord", $passord, PDO::PARAM_STR);

        try {
            $sp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }

        if($pdo->lastInsertId() > 0) {
            echo "Brukeren ble registrert. Alle data lagt til i Databasen";
        } else {
            echo "Brukeren ble ikke registrert. Data ble ikke lagt til i databasen";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Øving 02 Registrer bruker</title>
</head>
<body>
    <?php if(!isset($_REQUEST['registrert'])) { ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="bnavn" placeholder="Brukernavn"><br>
        <input type="text" name="fnavn" placeholder="Fornavn"><br>
        <input type="text" name="enavn" placeholder="Etternavn"><br>
        <input type="email" name="epost" placeholder="epost"><br>
        <input type="password" name="passord" placeholder="Passord"><br>
        <input type="submit" value="Registrer" name="registrert">
    </form>
    <?php } ?>
</body>
</html>