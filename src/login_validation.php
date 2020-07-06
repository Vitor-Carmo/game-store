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
                    $id = $row['idcliente'];
                    break;
                }
            }

            if($find){
                session_start();
                $_SESSION['login-session'] = $login;
                $_SESSION['senha-session'] = $senha;
                $_SESSION['id'] = $id;
                header("Location: ../private/client");

            }
            else{
                // back to index register
                header("Location: ../register.php?sucess=false");
            }
        break;
    }

?>