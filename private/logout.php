<?php
    session_start();
    unset($_SESSION['login-session']);
    unset($_SESSION['senha-session']);
    unset($_SESSION['perfil']);
    session_destroy();

    header("Location: ../index.php");
?>