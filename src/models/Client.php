<?php

class Client{
    private $idClient;
    private $emailClient;
    private $nameClient;
    private $senhaClient;



    public function getIdClient(){
        return $this->idClient;
    }
    public function getNameClient(){
        return $this->nameClient;
    }
    public function getSenhaClient(){
        return $this->senhaClient;
    }
    public function getEmailClient(){
        return $this->emailClient;
    }
    public function setIdClient($id){
        $this->idClient = $id;
    }
    public function setNameClient($name){
        $this->nameClient = $name;
    }
    public function setSenhaClient($senha){
        $this->senhaClient = $senha;
    }
    public function setEmailClient($email){
        $this->emailClient = $email;
    }


    
    public function register($client){
        $connection = Connection::getConnection();

        $queryInsert = "INSERT INTO tbcliente (nomecliente, senhacliente, emailcliente)
                        VALUES ('".$client->getNameClient()."'
                        ,'".$client->getSenhaClient()."'
                        ,'".$client->getEmailClient()."')";
        $connection->exec($queryInsert);

        return 'Cadastro realizado com sucesso';
        // return $queryInsert;
    }

    public function getClientData($id){
        $connection = Connection::getConnection();

        $queryInsert = "SELECT * from tbcliente
        where idcliente = $id";


        $stmt = $connection->prepare($queryInsert);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }

    public function list(){
        $connection = Connection::getConnection();

        $querySelect = "SELECT * FROM tbcliente";

        $result = $connection->query($querySelect);

        $list = $result->fetchAll();


        return $list;   
    }



    // public function edit($cliente){
    //     $conexao = Conexao::pegarConexao();
    //     $queryUpdate = "update tbCliente
    //                     set nomecliente = '".$cliente->getNomeCliente()."'
    //                     , cpfcliente = '".$cliente->getCpfCliente()."'
    //                     , rgcliente = '".$cliente->getRgCliente()."'
    //                     , emailcliente = '".$cliente->getEmailCliente()."'
    //                      where idcliente = ".$cliente->getIdCliente();
    //     $conexao->exec($queryUpdate);
    //     return 'Atualização realizada com sucesso';
    // }


    // public function delete($cliente){
    //     $conexao = Conexao::pegarConexao();
    //     $queryUpdate = "delete from tbCliente
    //                     where idcliente = ".$cliente->getIdCliente();
    //     $conexao->exec($queryUpdate);
    //     return 'Exclusão realizada com sucesso';
    // }
}