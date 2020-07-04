<?php
    require_once '../../src/global.php';
    session_start();

    $client = new Client();
    $list = $client->list();

    $find = false;

    foreach ($list as $linha){ 
        if (($_SESSION['login-session'] == $linha['emailcliente']) &&
            ($_SESSION['senha-session'] == $linha['senhacliente']))
            $find = true;
    }

    if(!$find){
        header("Location: ../../index.php");

    }
        
?>