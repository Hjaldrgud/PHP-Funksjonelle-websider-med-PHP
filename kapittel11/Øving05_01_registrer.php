<?php
    require_once("../../../../htdocsASSETS/inc/DB.inc.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrer medlem</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="fnavn" placeholder="Fornavn"><br>
        <input type="text" name="enavn" placeholder="Etternavn"><br>
        <input type="email" name="epost" placeholder="E-post"><br>
        <input type="text" name="bnavn" placeholder="Brukernavn"><br>
        <input type="password" name="passord" placeholder="Passord"><br>
        <input type="submit" value="registrer" name="registrert">
    </form><br><br>

    <?php
        if(isset($_POST['registrert'])) {
            $pdo->beginTransaction();
            $sql = "INSERT INTO medlemmerk11ø3 (m_fnavn, m_enavn, m_epost, m_bnavn, m_passord)
                    VALUES (:fnavn, :enavn, :epost, :bnavn, :passord)";
            $sp = $pdo->prepare($sql);

            $sp->bindParam(":fnavn", $fnavn);
            $sp->bindParam(":enavn", $enavn);
            $sp->bindParam(":epost", $epost);
            $sp->bindParam(":bnavn", $bnavn);
            $sp->bindParam(":passord", $passord);

            $fnavn = $_POST['fnavn'];
            $enavn = $_POST['enavn'];
            $epost = $_POST['epost'];
            $bnavn = $_POST['bnavn'];
            $passord = password_hash($_POST['passord'], PASSWORD_DEFAULT);

            try {
                $sp->execute();
            } catch (PDOException $e) {
                $e->getMessage() . "<br>";
            }

            if($pdo->lastInsertId() > 0) {
                echo "Medlem ble registrert.";
                $pdo->commit();
                //Denne php-fila trengs ikke, men hvis man skulle registrert så kunne man ha videresendt til 0_lagePDF sammen med noen GET.
            } else {
                echo "Medlem ble ikke registrert.";
                $pdo->rollback();
            }

        }
    ?>
</body>
</html>