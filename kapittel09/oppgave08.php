<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppdater lanseringsdato</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
        <tr>
            <th>Boktittel</th>
            <th>Utgivelsesår</th>
        </tr>
<?php
    include_once("PDOgenerering.inc.php");
    $sql = "SELECT tittel, utgivelsesår FROM bøker";
    $sp = $pdo->prepare($sql);
    try {
        $sp->execute();
    } catch (PDOExcepteion $e) {
        echo $e->getMessage() . "<br>";
    }
    $bøker = $sp->fetchAll(PDO::FETCH_OBJ);
    if ($sp->rowCount() > 0) {
        foreach ($bøker as $bok) {
            echo "<tr>";
            echo "<td>" . $bok->tittel . "<td>";
            echo "<td>" . $bok->utgivelsesår . "<td>"; 
            echo "<input type=\"radio\" name=\"valgtBok\" value=\"" . $bok->tittel . "\"";
            echo "</tr>";
        }
    }
?>
    </table>
    <input type="submit" value="oppdater årstall" name="bokSkalEndres">
    </form>

<?php
        if(isset($_REQUEST['bokSkalEndres'])) {
        $bokSomSKalEndres = $_REQUEST['valgtBok'];


?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="number" name="nyttTall">
            <!-- Ved andre skjema forsvinner ale variabler, slik at $bokSomSKalEndres må bli plassert inni skjema #2 for at det skal bli tatt med videre  -->
            <input type="hidden" name="bok" value="<?php echo $bokSomSKalEndres; ?>">
            <input type="submit" value="Nytt årstall" name="nyttTallGitt">
    </form>
<?php
        }

        if(isset($_REQUEST['nyttTallGitt'])) {
            $sql = "UPDATE bøker SET utgivelsesår = :utgivelsesaar WHERE tittel = :tittel";
            $sp = $pdo->prepare($sql);
            $sp->bindParam(':utgivelsesaar', $_REQUEST['nyttTall'], PDO::PARAM_INT);
            $sp->bindParam(':tittel', $_REQUEST['bok'], PDO::PARAM_STR);

            try {
                $sp->execute();
            } catch (PDOException $e) {
                echo $e->getMessage() . "<br>";
            }

            if($sp->rowCount() > 0) {
                echo "Oppdateringa ble oppført i DBen.";
            } else {
                echo "Oppdateringa ble ikke oppført i DBen.";
            }
        }
?>
</body>
</html>