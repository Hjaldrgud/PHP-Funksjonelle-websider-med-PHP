<?php
    function sendEpost($til, $fra, $emne, $melding){
        $mhoder = "From: " . $fra . "\r\n" . 
                  "Reply-To: " . $fra . "\r\n" .
                  "X-Mailer: PHP/ " . phpversion();

        mail($til, $emne, $melding, $mhoder);
    }

$mottakere = array("megalomanicsupernaut@gmail.com", "froyaaasebo@hotmail.com");
$til = implode(",", $mottakere);
$emne = "Test 2";
$melding = "Test med fleire epostadresser denna blir sendt til på ein gang.";
$fra = "lauvhjell@gmail.com";
?>
<form action="" method="post">
    <input type="submit" value="send eposter" name="sendt">
</form>
<?php
if(isset($_REQUEST['sendt'])){
    sendEpost($til, $fra, $emne, $melding);
    echo "<br>Meldinger blei sendt";
}
?>
