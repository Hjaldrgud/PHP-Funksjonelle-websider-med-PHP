<?php
    function vask ($s) {
        $s = strip_tags($s);
        return $s;
    }

    function lastned($filhenv) {
        if(file_exists($filhenv)) {
            header("Content-description: File Transfer");
            header("Content-Type: application/octet-stream");
            header("Content-length: " . filesize($filhenv));
            header("Content-Transfer-Encoding: Binary");
            header("Content-Disposition: Attachment;
                    filename=\"" . $filhenv . '"');
            header("Pragma: public");
            readfile($filhenv);
        }
    }

    lastned('Innlevering 1.pdf');
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
    <table border="1">
        <tr>
            <th>Filnavn</th>
            <th>Filtype</th>
            <th>Filstr</th>
            <th>Sist endret</th>
            <th>Link</th>
        </tr>
        <?php
            $kat = "./filer/";
            $peker = opendir($kat);
            while($fil = readdir($peker)) {
                if(substr($fil, -4) == '.pdf') {
                    echo '<tr>';
                    echo '<td><a href="' . $kat . $fil . '">' . $fil . '</a></td>';
                    echo '<td>' . filetype($kat . $fil) . '</td>';
                    echo '<td>' . filesize($kat . $fil) . '</td>';
                    echo '<td>' . date("d.m.Y \k\l. H:i", filemtime($kat . $fil)) . '</td>';
                    echo '<td><input type="radio" name="nedlastfil" value="' . $fil . '"></td>';
                echo '</tr>';
                } 
            }
            closedir($peker)
        ?>
    </table>
</body>
</html>