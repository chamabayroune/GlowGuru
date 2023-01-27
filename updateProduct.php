<?php
require_once("./connection.php");

class UpdateProduct extends database{
   public function updeting($Name,$prix,$quantite,$id_product){
    // crre objet mn data base
     $db = new database();
    //  variable pour stocker fonctio li derna
    //  methode
    $pdo = $db->connect();

     $requet = "UPDATE `products` SET `name` = $Name, `prix`= $prix, `quantite`=$quantite WHERE `id` = $id_product";
    //  preparer cett requete dans cette fonction
     $exe = $pdo->prepare($requet);

     $exe->execute();
   }
}
?>