<?php
    function sendEpostPHPMailer(){
        require_once("PHPmailer/src/PHPMailer.php");
        require_once("PHPMailer/src/Exception.php");
        require_once("PHPMailer/src/SMTP.php");
    
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->CharSet = "UTF-8";
        $fnavn = "Silje"; $enavn = "Johansen"; $kode = "abc";
        $epost = "megalomanicsupernaut@gmail.com";
    
        try{ 
            $mail->IsSMTP();
            $mail->SMTPDebug = 1; //Debugging: 1 = Feil og melding. 2 = Kun meldinger
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = "tls"; //Påkrevd for gmail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->Username = "lauvhjell@gmail.com";
            $mail->Password = "irxllyvzooyhlzos";
    
            //meldingstekst for HTML-mottakere
            $mld = "Kjære $fnavn. <br><br>";
            $mld .= "Takk for at du registrerte deg hos oss <br><br>";
            $mld .= "Vennligst klikk nedenfor for å sette opp kontoen din: <br>";
            $mld .= '<a href="http://localhost/PHP%20Skole/PHP%20-%20Funksjonelle%20websider%20med%20PHP/kapittel12/05%20sende%20epost%20med%20PHPMailer_2_bekreftelse.php?k="'. $kode . '\n\n >Bekreft din registrering</a><br><br>';
            $mld .= "Hvis dette ikke var deg, kan du trygt ignorere denne e-posten.<br><br>";

            //Meldingstekst for de som ikke kan motta HTML-epost.
            $amld = "Kjære $fnavn. <br><br>";
            $amld .= "Takk for at du registrerte deg hos oss <br><br>";
            $amld .= "Vennligst klikk nedenfor for å sette opp kontoen din: <br>";
            $amld .= "http://localhost/PHP%20Skole/PHP%20-%20Funksjonelle%20websider%20med%20PHP/kapittel12/05%20sende%20epost%20med%20PHPMailer_2_bekreftelse.php?k=". $kode ." \n\n";
            $amld .= "Hvis dette ikke var deg, kan du trygt ignorere denne e-posten.<br><br>";

            $mail->isHTML(true);
            $mail->From = "lauvhjell@gmail.com";
            $mail->FromName = "Ikke svar";
            $mail->addAddress($epost, "$fnavn $enavn");
            $mail->Subject = "Registrering: kun ett steg unna nå!";
            $mail->Body = $mld;
            $mail->AltBody = $amld;
            $mail->send();
            echo "Epost er sendt";
        } catch(Exception $e) {
            echo "Noe gikk galt: " . $e->getMessage();
        }
    }
?>
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
        <input type="submit" value="send" name="sendt">
    </form>
    <?php
        if(isset($_REQUEST['sendt'])){
            sendEpostPHPMailer();
            echo "<br>Epost blei sendt. forhåpentligvis.<br>";
        } else {
            echo "<br>Ikke satt.?<br>";
        }
    ?>
</body>
</html>