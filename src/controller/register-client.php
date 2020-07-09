<?php 

require_once '../global.php';

try{
   header("Location: ../../index.php?sucess=true");



    $client = new Client();
 

    $client->setSenhaClient($_POST['senha']);
    $client->setNameClient($_POST['nome']);
    $client->setEmailClient($_POST['email']);


    $client->register($client);
}

catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
 ?>