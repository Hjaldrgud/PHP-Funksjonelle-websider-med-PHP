<?php
include_once("PDOgenerering.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legg til forfatter</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="fornavn" PLACEHOLDER="forfatterens fornavn"><br>
        <input type="text" name="etternavn" PLACEHOLDER="forfatterens etternavn"><br>
        <input type="submit" value="legg til" name="lagtTil">
    </form>
<?php
    if(isset($_REQUEST['lagtTil'])) {
        $pdo->beginTransaction();
        $sql = "INSERT INTO forfattere(fornavn, etternavn)
                VALUES (:fornavn, :etternavn)"; 
        $sp= $pdo->prepare($sql);
        
        $sp->bindParam(':fornavn', $fornavn, PDO::PARAM_STR);
        $sp->bindParam(':etternavn', $etternavn, PDO::PARAM_STR);

        $fornavn = $_REQUEST['fornavn'];
        $etternavn = $_REQUEST['etternavn'];

        try {
            $sp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . ". Kunne ikke lagre i databasen <br>";
        }
        
        if($pdo->lastInsertId() > 0) {
            echo "Dataene ble satt inn i tabellen.";
            $pdo->commit();
        } else {
            echo "Dataene ble ikke satt inn i tabellen.";
            $pdo->rollback();
        }

    }

?>
</body>
</html>