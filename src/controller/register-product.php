<?php 

require_once '../global.php';

try{
    header("Location: ../../private/adm/register_product.php?sucess=true");
    
    $product = new Product();
    $product->setDescProduct($_POST['txtdesc']);
    $product->setValueProduct($_POST['txtvalor']);
    $product->setQtdeProduct($_POST['txtqtde']);
    $product->setGenreProduct($_POST['slgenero']);
    $product->setConsoleProduct($_POST['slconsole']);
    
    $product->setPhotoProduct($_FILES['foto']['tmp_name']);

    $product->setNamePhotoProduct($_FILES['foto']['name']);

    $product->register($product);

    $product = $product->consultId($product);

    $extension = substr(strstr($product->getNamePhotoProduct(), "."),1);
    $product->setNamePhotoProduct("img/product/" . $product->getIdProduct() .".".$extension);
    
    $product->registerPhoto($product);

    move_uploaded_file($product->getPhotoProduct(), "../../public/".$product->getNamePhotoProduct());

    
}catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}
?>