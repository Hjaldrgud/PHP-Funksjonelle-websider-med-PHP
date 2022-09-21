<?php

    function medlemsskjema ($navn, $tlf, $epost) { ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <input type="text" name="navn" PLACEHOLDER="<?php echo $navn ?>"> <br>
            <input type="tel" name="tlf" PLACEHOLDER="<?php echo $tlf ?>"> <br>
            <input type="email" name="epost" PLACEHOLDER="<?php echo $epost ?>"> <br>
            <input type="submit" value="send" name="sendt">
        </form>
    <?php } ?>
