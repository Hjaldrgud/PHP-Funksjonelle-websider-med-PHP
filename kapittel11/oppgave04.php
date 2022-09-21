<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 01</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="text" name="pdf" placeholder="Skriv hvilken PDF du vil flytte">
        <input type="text" name="fra" placeholder="fra katalog">
        <input type="text" name="til" placeholder="til katalog">
        <input type="submit" value="flytt" name="flyttet">
    </form>
    <br><br>
    <?php
        if(isset($_POST['flyttet'])) {
            $frapdf = $_POST['fra'] . $_POST['pdf'];
            $tilpdf = $_POST['til'] . $_POST['pdf'];
            if(file_exists($frapdf)) {
                if(rename($frapdf, $tilpdf)) {
                    echo "<b> Fila blei flytta.</b>";
                } else {
                    echo "<b>Fila blei ikke flytta</b>";
                }
            } else {
                echo "<b>Fila eksisterer ikke</b>";
            }
            echo "<br><br>";
        }

        if(is_dir("filer")) {
            $kat = "./filer/";
        }
        $peker = opendir($kat);
        echo $kat;
    ?>
    <table border="1">
        <tr>
            <th>Filnavn</th>
            <th>Filtype</th>
            <th>Filstr.</th>
            <th>Sist endret</th>
            <th>Read</th>
            <th>Write</th>
            <th>Exec</th>
        </tr>
        <?php
            while($fil = readdir($peker)) {
                if(substr($fil, -4) == ".pdf") {
                    echo '<tr>';
                    echo    '<td><a href="' . $kat . $fil . '">' . $fil . '</a></td>';
                    echo    '<td>' . filetype($kat . $fil) . '</td>';
                    echo    '<td>' . filesize($kat . $fil) . '</td>';
                    echo    '<td>' . date("dmY \k\l. H:i", filemtime($kat . $fil)) . '</td>';
                    echo    '<td>' . (is_readable($kat . $fil) ? "Ja" : "Nei") . '</td>';
                    echo    '<td>' . (is_writable($kat . $fil) ? "Ja" : "Nei") . '</td>';
                    echo    '<td>' . (is_executable($kat . $fil) ? "Ja" : "Nei") . '</td>';
                    echo '</tr>';
                }
            }
            closedir($peker);
        ?>
    </table>
    <br><br><br><br>
    <?php
        if(is_dir("Genererte PDFer")) {
            $kat = "./Genererte PDFer/";
        }
        $peker = opendir($kat);
        echo $kat;
    ?>
    <table border="1">
        <tr>
            <th>Filnavn</th>
            <th>Filtype</th>
            <th>Filstr.</th>
            <th>Sist endret</th>
            <th>Read</th>
            <th>Write</th>
            <th>Exec</th>
        </tr>
        <?php
            while($fil = readdir($peker)) {
                if(substr($fil, -4) == ".pdf") {
                    echo '<tr>';
                    echo    '<td><a href="' . $kat . $fil . '">' . $fil . '</a></td>';
                    echo    '<td>' . filetype($kat . $fil) . '</td>';
                    echo    '<td>' . filesize($kat . $fil) . '</td>';
                    echo    '<td>' . date("dmY \k\l. H:i", filemtime($kat . $fil)) . '</td>';
                    echo    '<td>' . (is_readable($kat . $fil) ? "Ja" : "Nei") . '</td>';
                    echo    '<td>' . (is_writable($kat . $fil) ? "Ja" : "Nei") . '</td>';
                    echo    '<td>' . (is_executable($kat . $fil) ? "Ja" : "Nei") . '</td>';
                    echo '</tr>';
                }
            }
            closedir($peker);
        ?>
    </table>
</body>
</html>