<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 01</title>
</head>
<body>
    <?php
        if(is_dir("filer")) {
            $kat = "./filer/";
        }
        $peker = opendir($kat);
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
                echo '<tr>';
                echo    '<td><a href="' . $kat . $fil . '">' . $fil . '</a></td>';
                echo    '<td>' . filetype($kat . $fil) . '</td>';
                echo    '<td>' . filesize($kat . $fil) . '</td>';
                echo    '<td>' . date("dmY \k\l. H:i", filemtime($kat . $fil)) . '</td>';
                echo    '<td>' . (is_readable($kat . $fil) ? "Ja" : "Nei") . '</td>';
                echo    '<td>' . (is_writable($kat . $fil) ? "Ja" : "Nei") . '</td>';
                echo    '<td>' . (is_executable($kat . $fil) ? "Ja" : "Nei") . '</td>';
                if(substr($fil, -4) == ".pdf") {
                    echo '<td>PDF</td>';
                    /* Gidder ikke å slette pdfene, men ville gjort slikt:
                    if(unlink($fil)) {
                        echo "fila blei sletta.";
                    } else {
                        echo "fila blei ikke sletta.";
                    } 
                    */
                }
                echo '</tr>';
            }
            closedir($peker)
        ?>
    </table>
</body>
</html>