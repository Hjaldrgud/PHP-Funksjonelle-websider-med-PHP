<?php
    ini_set('session.gc_maxlifetime', 60*60*2);

    echo ini_get('session.gc_maxlifetime');


?>