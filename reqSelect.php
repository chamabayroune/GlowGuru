<!-- requet de seliction des produits -->
<!-- selection produit mn data ou katafichih -->
<?php
require_once('./connection.php');
// select pleusieur produit
class select extends database{
    public function afficher(){
        $data = new database();
        $pdo = $data->connect();
        $requet = "SELECT * FROM `products`";
        $exe = $pdo->prepare($requet);
        $exe->execute();
        $result = $exe->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
        return $result;
        
    }
    public function afficherOneProduct($id){
      
            $data = new database();
            $pdo = $data->connect();
        // GETTING THE PRODUCTS
            $requet = "SELECT `name` ,`id`, `prix`, `quantite` FROM `products` WHERE `id` = $id ";
        // PREPARED STATEMENT
            $exe = $pdo->prepare($requet);
        //THE QUERY
            $exe->execute();
        // JB
            $product = $exe->fetchAll(PDO::FETCH_ASSOC);
            return $product;  
    }
}


