<?php
    $login = $_POST['txtemail'];
    $senha = $_POST['txtsenha'];
    $perfil = $_POST['perfil'];

    switch($perfil){
        case 1: //Adm
            if (($login == 'adm@adm.com') && ($senha == '123')){
                session_start();
                $_SESSION['login-session'] = $login;
                $_SESSION['senha-session'] = $senha;
                $_SESSION['perfil'] = $perfil;

     
                header("Location: ../private/adm");
            }
            else{

                header("Location: ../register.php?sucess=false");
            }
        break;


        case 2: //Client
            require_once 'global.php';
            
            $client = new Client();
            $list = $client->list();

            $find = false;

            foreach ($list as $row){ 
                if (($login == $row['emailcliente']) && ($senha == $row['senhacliente'])){
                    $find = true;
                }
            }

            if($find){
                session_start();
                $_SESSION['login-session'] = $login;
                $_SESSION['senha-session'] = $senha;
                $_SESSION['perfil'] = $perfil;
                header("Location: ../private/client");

            }
            else{
                // back to index register
                header("Location: ../register.php?sucess=false");
            }
        break;
    }

?>