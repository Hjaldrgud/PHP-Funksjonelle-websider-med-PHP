<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="fil" placeholder="søk filnavn/katalognavn">
        <input type="submit" value="søk" name="filsok">
    </form>
    <br><br>
    <?php 
        if(isset($_POST['filsok'])) { 
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
            $kat = "./filer/";
            $peker = opendir($kat);
            $fil = $_POST['fil'];

            if(file_exists($fil) || file_exists($kat . $fil)) {
                if(is_file($fil) || is_file($kat . $fil)) {
                    echo $fil . " er en fil.<br><br>";
                    echo '<tr>';
                    echo    '<td><a href="' . $kat . $fil . '">' . $fil . '</a></td>';
                    echo    '<td>' . filetype($kat . $fil) . '</td>';
                    echo    '<td>' . filesize($kat . $fil) . '</td>';
                    echo    '<td>' . date("dmY \k\l. H:i", filemtime($kat . $fil)) . '</td>';
                    echo    '<td>' . (is_readable($kat . $fil) ? "Ja" : "Nei") . '</td>';
                    echo    '<td>' . (is_writable($kat . $fil) ? "Ja" : "Nei") . '</td>';
                    echo    '<td>' . (is_executable($kat . $fil) ? "Ja" : "Nei") . '</td>';
                    echo '</tr>';
                    closedir($peker);
                } elseif (is_dir($fil) || is_dir($kat . $fil)) {
                    echo $fil . " er en katalog.<br><br>";
                }
            } else {
                echo $fil . " eksisterer ikke. Hvis du leter etter en fil, må du inkludere filtype";
            }
        }
    ?>
        </table>
</body>
</html>