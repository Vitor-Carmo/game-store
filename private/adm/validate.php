<?php

    session_start();
    
    if (($_SESSION['login-session'] != 'adm@adm.com') || 
        ($_SESSION['senha-session'] != '123'))
    {
            header("Location: ../../index.php");
    }
        
?>