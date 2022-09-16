<?php
    function deconnexion() {
        session_unset();
        session_destroy();
        header("location:index.php");
    };


?>