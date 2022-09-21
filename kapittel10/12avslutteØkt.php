<?php
    //Avlsutte økt:
    unset($_SESSION['bruker']['innlogget']);

    //Slette hele økta:
    session_destroy();

?>