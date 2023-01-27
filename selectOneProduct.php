<?php
require_once('./reqSelect.php');


class selectOne{
    public function selectOneProduct(){
        if(isset($_POST['id'])){
            $id=$_POST['id'];
            $OneProducts = new select();
            $afficherOnePro = $OneProducts->afficherOneProduct($id);
            return $afficherOnePro;
        }
    }
}
$Products = new selectOne();
$productUpdat = $Products->selectOneProduct();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<form method="POST" action="./UpdateProductLogic.php" >
  <!-- Email input -->
  <center>
    <?php foreach($productUpdat as $elements):?>
  <div class="form-outline mb-4">
    <input type="text" id="form1Example2" class="form-control"  value="<?php echo $elements['name'] ?>" name="Name" style="width: 400px;" />
    <label class="form-label" for="form1Example2">name</label>
  </div>
  <div class="form-outline mb-4">
    <input type="number" id="form1Example2" class="form-control" value="<?php echo $elements['prix'] ;?>" name="prix" style="width: 400px;" />
    <label class="form-label" for="form1Example2">prix</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form1Example2" class="form-control" value="<?php echo $elements['quantite'] ;?>" name="qauntite" style="width: 400px;" />
    <label class="form-label" for="form1Example2" >quentite</label>
  </div>
    <input type="hidden" id="form1Example2" class="form-control" value="<?php echo $elements['id'] ;?>" name="id" style="width: 400px;" />
  <?php endforeach;?>
   <button type="submit" name="submit">updat</button>
</center>
</form>  
</body>
</html>