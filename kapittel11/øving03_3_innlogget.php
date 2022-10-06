<?php 
    session_start(); 
    require_once("../../../../htdocsASSETS/inc/DB.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logget inn</title>
</head>
<body>
    <?php 
        //Lager mal for spørresetning
        $sql = "SELECT * FROM medlemmerk11ø3 WHERE m_id = :id";
        //Forbereder spørringen mot databasen
        $sp = $pdo->prepare($sql);
        //vi binder plassholderne i malen til faktiske verdier
        $sp->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        //Vi kjører spørringa mot databasen
        try {
            $sp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage() . "<br>";
        }
        
        //Vi kontrollerer spørringa
        if($sp->rowCount() > 0){
            $medlem = $sp->fetch(PDO::FETCH_OBJ);
            if(isset($_SESSION['bruker'])){
                echo "<b>" . $medlem->m_fnavn . " " . $medlem->m_enavn . "</b><br>";
                $id = $medlem->m_id;
                $filsti = "profilbilder/";
    
                $filtyper = array('.jpg', '.png', '.gif');
                foreach ($filtyper as $type) {
                    if(is_file($filsti.$id.$type))
                    $filtype=$type;
                    break;
                }
                if(isset($filtype)){
                    $fullfil = $filsti.$id.$filtype;
                    echo '<img src="'.$fullfil.'" width="200"> <br>';
                } else {
                    echo "Brukeren har ikke lastet opp et bilde";
                }
            } else {
                echo "Du må logge inn først";
            }
        } else {
            echo "fikk ikke kontakt med databasen <br>";
        }
    ?>
    <a href="øving03_4_lastOpp.php?id=<?php echo $_SESSION['bruker']['ID']; ?>">Last Opp bilde</a>
</body>
</html>