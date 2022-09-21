<?php
    $fornavn = "Andreas";
    $etternavn = "Lauvhjell";
    $fødselsdato = "21-06-92";
    $adresse = "Rundsagveien 24";
    $epost = "lauvhjell@gmail.com";
    $mobilnr  = 98118852;
?>
<html>
    <body>
        <table>
            <tr>
                <th>FORNAVN</th>
                <th>ETTERNAVN</th>
                <th>FØDSELSDATO</th>
                <th>ADRESSE</th>
                <th>E-POST</th>
                <th>>MOBILNUMMER</th>
            </tr>
            <tr>
                <td><?php echo $fornavn?></td>
                <td><?php echo $etternavn?></td>
                <td><?php echo $fødselsdato?></td>
                <td><?php echo $adresse?></td>
                <td><?php echo $epost?></td>
                <td><?php echo $mobilnr?></td>                
            </tr>
        </table>
    </body>
</html>