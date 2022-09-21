<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>RUTE:</th>
            <th>ANTALL KORN I TALL:</th>
            <th>ANTALL KORN I SETNING:</th>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
        </tr>       
        <?php

        for($i=2; $i<=64; $i++){
            echo 
            "<tr>
                <td>$i</td>
                <td>". pow(2, $i) ."</td>
                <td>";         
                $korn = pow(2, $i);
                if ($korn > 1000000000000000000) {
                    echo floor($korn/1000000000000000000) . " trillioner, ";
                    $korn = fmod($korn, 1000000000000000000);
                } 
                if ($korn > 1000000000000000){
                    echo floor($korn/1000000000000000) . " billiarder, ";
                    $korn = fmod($korn, 1000000000000000);
                }
                if ($korn > 1000000000000) {
                    echo floor($korn/1000000000000) . " billioner, ";
                    $korn = fmod($korn, 1000000000000);
                } 
                if ($korn > 1000000000){
                    echo floor($korn/1000000000) . " milliarder, ";
                    $korn = fmod($korn, 1000000000);
                }
                if ($korn > 1000000){
                    echo floor($korn/1000000) . " millioner, ";
                    $korn = fmod($korn, 1000000);
                }
                if ($korn > 1000) {
                    echo floor($korn/1000) . " tusen og ";
                    $korn = fmod($korn, 1000);
                    echo $korn-1 . " korn";
                } else {
                    echo $korn . " korn </td>";
                }
            echo "</tr>";
        }
        ?>
    </table>
<?php
    $korn = pow(2, 64);
    echo "<br><br><br><br>";
        if ($korn > 1000000000000000000) {
            echo floor($korn/1000000000000000000) . " trillioner, ";
            $korn = fmod($korn, 1000000000000000000);
        } 
        if ($korn > 1000000000000000){
            echo floor($korn/1000000000000000) . " billiarder, ";
            $korn = fmod($korn, 1000000000000000);
        }
        if ($korn > 1000000000000) {
            echo floor($korn/1000000000000) . " billioner, ";
            $korn = fmod($korn, 1000000000000);
        } 
        if ($korn > 1000000000){
            echo floor($korn/1000000000) . " milliarder, ";
            $korn = fmod($korn, 1000000000);
        }
        if ($korn > 1000000){
            echo floor($korn/1000000) . " millioner, ";
            $korn = fmod($korn, 1000000);
        }
        if ($korn > 1000) {
            echo floor($korn/1000) . " tusen og ";
            $korn = fmod($korn, 1000);
        } 
        echo $korn-1 . " korn";
        ?>
</body>
</html>
