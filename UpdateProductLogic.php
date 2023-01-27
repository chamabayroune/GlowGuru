<?php
require_once("./updateProduct.php");

class updetcofirmation extends UpdateProduct {
 public function updatingP(){
    

    $name = $_POST['Name'];
    $prix = $_POST['prix'];
    $qauntite = $_POST['qauntite'];
    $id = $_POST['id']; 
    $updpro = new UpdateProduct();
    $updpro->updeting($name,$prix,$qauntite ,$id);
    header("Location: http://localhost/GlowGuru/selectProduct.php"); 
    
 }
}
$init = new updetcofirmation;
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["id"])){
    $init->updatingP();
}
