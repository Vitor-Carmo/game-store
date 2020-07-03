<?php

class Client{
    private $idClient;
    private $emailClient;
    private $senhaClient;



    public function getIdClient(){
        return $this->idClient;
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
    public function setSenhaClient($senha){
        $this->senhaClient = $senha;
    }
    public function setEmailClient($email){
        $this->emailClient = $email;
    }


    
    public function register($client){
        $connection = Connection::getConnection();

        $queryInsert = "INSERT INTO tbcliente (senhacliente, emailcliente)
                        VALUES ('".$client->getSenhaClient()."'
                        ,'".$client->getEmailClient()."')";
        $connection->exec($queryInsert);

        return 'Cadastro realizado com sucesso';
        // return $queryInsert;
    }



    public function list(){
        $connection = Connection::getConnection();

        $querySelect = "select idcliente, senhacliente, emailcliente from tbcliente";

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