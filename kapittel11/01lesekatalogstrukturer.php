<?php
    $kat = "./filer/";
    $peker = opendir($kat);

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Filnavn</th>';
    echo '<th>Filtype</th>';
    echo '<th>Filstr.</th>';
    echo '<th>Sist endret</th>';
    echo '</tr>';

    while($fil = readdir($peker)){
        echo '<tr>';
        echo '<td><a href=" ' . $kat . $fil . '">>' . $fil . '</a></td>';
        echo '<td>' . filetype($kat . $fil) . '</td>';
        echo '<td>' . filesize($kat . $fil) . '</td>';
        echo '<td>' . date('d.m.Y k\l. H:i', filemtime($kat . $fil)) . '</td>';
        echo '</tr>';
    }

    closedir($peker);
?>


