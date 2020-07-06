<?php

class Product{
    private $idProduct;
    private $descProduct;
    private $valueProduct;
    private $qtdeProduct;
    private $photoProduct;
    private $namePhotoProduct;
    private $genreProduct;
    private $consoleProduct;



    
    public function getIdProduct(){
        return $this->idProduct;
    }
    public function getDescProduct(){
        return $this->descProduct;
    }
    public function getValueProduct(){
        return $this->valueProduct;
    }
    public function getQtdeProduct(){
        return $this->qtdeProduct;
    }
    public function getPhotoProduct(){
        return $this->photoProduct;
    }
    public function getGenreProduct(){
        return $this->genreProduct;
    }
    public function getNamePhotoProduct(){
        return $this->namePhotoProduct;
    }
    public function getConsoleProduct(){
        return $this->consoleProduct;
    }
    public function setIdProduct($id){
        $this->idProduct = $id;
    }
    public function setDescProduct($desc){
        $this->descProduct = $desc;
    }
    public function setValueProduct($value){
        $this->valueProduct = $value;
    }
    public function setQtdeProduct($qtde){
        $this->qtdeProduct = $qtde;
    }
    public function setPhotoProduct($photo){
        $this->photoProduct = $photo;
    }
    public function setNamePhotoProduct($namePhoto){
        $this->namePhotoProduct = $namePhoto;
    }
    public function setGenreProduct($genre){
        $this->genreProduct = $genre;
    }
    public function setConsoleProduct($console){
        $this->consoleProduct = $console;
    }



    public function register($product){
        $connection = Connection::getConnection();
        //statement
        $stmt = $connection->prepare("INSERT INTO tbproduto
                        (descproduto, valorproduto, qtdeproduto, generoproduto, consoleproduto)
                        VALUES (?, ?, ?, ?, ?)");

        $stmt->bindParam(1, $product->descProduct);
        $stmt->bindParam(2, $product->valueProduct);
        $stmt->bindParam(3, $product->qtdeProduct);
        $stmt->bindParam(4, $product->genreProduct);
        $stmt->bindParam(5, $product->consoleProduct);
        $stmt->execute();

        return 'Produto cadastrado com sucesso';
    }



    public function consultId($product){
        $connection = Connection::getConnection();
        $querySelect = "SELECT MAX(idproduto) as id FROM tbproduto";
        $result = $connection->query($querySelect);

        while($row = $result->fetch(PDO::FETCH_OBJ))
            $product->idProduct = $row->id;

        return $product;   
    }



    public function registerPhoto($product){
        $connection = Connection::getConnection();
        $stmt = $connection->prepare("UPDATE tbproduto SET fotoproduto = ?
                                    WHERE idproduto = ?");

        $stmt->bindParam(1, $product->namePhotoProduct);
        $stmt->bindParam(2, $product->idProduct);
        $stmt->execute();

        return 'Foto cadastrada com sucesso';
    }


    public function list(){
        $connection = Connection::getConnection();
        $stmt = $connection->prepare("SELECT * FROM `tbproduto`");
        $stmt->execute();

        return $stmt;
    }


    public function totalStock(){

        $connection = Connection::getConnection();
        $stmt = $connection->prepare("SELECT SUM(qtdeproduto) as 'totalStock' FROM `tbproduto`");
        $stmt->execute();

        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function searchGenreConsoleProducts($search){
        $connection = Connection::getConnection();

        $querySelect = "SELECT * FROM tbproduto where generoproduto 
        = '$search' or consoleproduto = '$search'";

        $result = $connection->query($querySelect);

        $list = $result->fetchAll();


        return $list;   
    }


    public function searchGame($search){
        $connection = Connection::getConnection();

        $querySelect = "SELECT * FROM tbproduto where descproduto like '%$search%'";

        $result = $connection->query($querySelect);

        $list = $result->fetchAll();


        return $list;   
    }
}