<?php
require_once('./deletProduct.php');

class confirmer extends deletProduct{
    public function confirmation(){
        if(isset($_POST['id'])){
            $id_product = $_POST['id'];
            $delete_product = new deletProduct();
            $delete_product->deleting($id_product);
            header("Location: http://localhost/GlowGuru/selectProduct.php"); 
        }
    }
}
$newDelete = new confirmer();
$newDelete->confirmation();
?>