<?php
    session_start();
    unset($_SESSION["s_usuario"]);
    header("Location: login.php?error=3");

?>