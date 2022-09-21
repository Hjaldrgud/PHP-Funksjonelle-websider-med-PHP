<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="number" name="aarstall" placeholder="årstall">
        <input type="submit" value="send inn" name="sendtInn">
    </form>
    <br><br>
    <?php
        include("PDOgenerering.inc.php");
        if(isset($_REQUEST['sendtInn'])) {
            $sql = "SELECT tittel, utgivelsesår FROM bøker WHERE utgivelsesår > :utgivelsesaar";
            $sp = $pdo->prepare($sql);

            $sp->bindParam(':utgivelsesaar', $utgivelsesår, PDO::PARAM_INT);
            $utgivelsesår = $_REQUEST['aarstall'];

            try {
                $sp->execute();
            } catch (PDOException $e) {
                echo $e->getMessage() . "<br>";
            } 
            ?>
            <table>
                <tr>
                    <th>Boktittel</th>
                    <th>utgivelsesår</th>
                </tr>
            <?php
            $bøker = $sp->fetchAll(PDO::FETCH_OBJ);
            if($sp->rowCount() > 0) {
                foreach ($bøker as $bok) {
                    echo "<tr>";
                    echo "<td>" . $bok->tittel . "</td>";
                    echo "<td>" . $bok->utgivelsesår . "</td>";
                    echo "<tr>";
                }
            }
        }

    ?>
</body>
</html>