<?php
    $hash = '$2y$10$AY8vPqcDtM0suUALhsWdCe343uQnzSVx0ueZCX/9tGp7oshjLKMRS';
    if (password_verify("mittpassord", $hash)) {
        echo "Dette er et gyldig passord.";
    }
?>