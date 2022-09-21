<?php
    //session_start(); //Ifølge boka må den sendes før HTML, så utafor if-setninga under. EDIT: det gikk ikke.
if(isset($_REQUEST['sendt'])) {
    session_start();
    $_SESSION['navn'] = $_REQUEST['navn'];
    if(isset($_SESSION['navn'])) {
        header("Location: oppgave04seSession.php");
        exit();
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="navn" placeholder="skriv inn navn">
        <input type="submit" value="send inn" name="sendt">
    </form>
</body>
</html>