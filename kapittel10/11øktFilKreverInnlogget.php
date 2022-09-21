<?php

    if(!isset($_SESSION['bruker']['innlogget']) || $_SESSION['bruker']['innlogget'] !== true) {
        header("Location: logginn.php");
        exit();
    }



?>