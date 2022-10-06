<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last opp</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <div>
                <input type="file" name="foto" size="">
            </div>
        </div>
        <div>
            <input type="submit" value="Last opp" name="opplastet">
        </div>
    </form>
    <?php
    if(isset($_REQUEST['opplastet'])){
        if(is_uploaded_file($_FILES['foto']['tmp_name'])){
            $filtyper = array ('jpg' => "image/jpeg", 'png' => "image/png", 'gif' => "image/gif");
            $max_filstr = 1048576;
            if(is_dir("profilbilder/")) {
                $kat = "profilbilder/";
            } else {
                mkdir("profilbilder/");
                $kat = "profilbilder/";
            }
            $filtype = $_FILES['foto']['type'];
            $filstr = $_FILES['foto']['size'];
            if(in_array($filtype, $filtyper) && $filstr < $max_filstr){
                $suffiks = array_search($filtype, $filtyper); //array_search Searches the array for a given value and returns the first corresponding key if successful
                $filnavn = $_SESSION['bruker']['ID'].".$suffiks";
            } else {
                $meldinger[] = "Fila er enten for stor >1 MB eller ikke jpg/png/gif-fil";
            }
    
            if(empty($meldinger)){
                $opplasta_fil = move_uploaded_file($_FILES['foto']['tmp_name'], $kat . $filnavn);
    
                if($opplasta_fil){
                    $meldinger[] = "Fila blei lasta opp.";
                } else {
                    $meldinger[] = "Fila blei av ukjente grunner ikke lasta opp.";
                }
            }
        } else {
            $meldinger[] = "Fila blei ikke lasta opp";
        }
    }
    ?>
        <p>
        <?php 
        if(isset($meldinger)){
            foreach($meldinger as $melding) {
                echo $melding . "<br>";
            }
        } ?>
    </p>
</body>
</html>