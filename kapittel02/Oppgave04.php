<?php
    $navn = "Andreas";
    $alder = 30;
    ?>
<html>
    <body>
        <table>
            <tr>
                <th>NAVN</th>
                <th>ALDER</th>
            </tr>   
            <tr>
                <td><?php echo $navn ?></td>
                <td><?php echo $alder ?></td>
            </tr>          
        </table>
        <br>
        <ul>
            <li><?php echo $navn ?></li>
            <li><?php echo $alder ?></li>
        </ul>
        <br>
        <ol>
            <li><?php echo $navn ?></li>
            <li><?php echo $alder ?></li>
        </ol>

    </body>
</html>
