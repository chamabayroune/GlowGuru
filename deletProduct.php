<?php
require_once('./connection.php');

class deletProduct extends database{
    public function deleting($id){
        $db = new database();
        $pdo =$db->connect();
        $requetDelet = "DELETE FROM `products` WHERE id = $id";
        $exe = $pdo->prepare($requetDelet);
        $exe->execute();
    }
}
?>