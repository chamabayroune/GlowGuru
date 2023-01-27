<?php
// require_once("./loginLog.php");
// $adm = new entrer();
// $log = $adm-> entr();
// // var_dump($log);

// session_start();

// if(!$_SESSION['email']){
//     header("Location: http://localhost/GlowGuru/index.php");
// }
require_once('./connection.php');
class addproduct extends database{
 public function addproduct($value1,$value2,$value3,$value4){
    $db = new database();
    $pdo = $db->connect();
    $requet = "INSERT INTO `products`(`id`, `image`, `name`, `prix`, `quantite`) VALUES (NULL,'$value1','$value2','$value3','$value4')";
    $exe = $pdo->prepare($requet);
    $result = $exe->execute();
    return $result;
 }
}  

class confermation extends addproduct{
  function addPic(){
    if(isset($_FILES['image'])){
        $picname=$_FILES['image']['name'];
        $picsize=$_FILES['image']['size'];
        $pictmpname=$_FILES['image']['tmp_name'];
    
        if($_FILES['image']['error']===0){
                $img_ex = pathinfo($picname, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
    
                $allowed_exs=array("jpg","jpeg","png");
    
                if(in_array($img_ex_lc,$allowed_exs)){
                    $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
                    $img_upload_path='./image/'.$new_img_name;
                    move_uploaded_file($pictmpname,$img_upload_path);
                    return $img_upload_path;
                }else{
                    die("error");
                }
                
        }else{
                die("error");
            }     
    }
}
public function Post(){

    if(isset($_POST['submit'])){
   $image=$this->addPic(); 
   $name=$_POST['name'];
   $prix=$_POST['prix'];
   $quentite=$_POST['quentite'];
   $addproduct = new addproduct();
   $addproduct->addproduct($image,$name,$prix,$quentite);
   header("Location: http://localhost/GlowGuru/selectProduct.php"); 
}
}
}
$conferm = new confermation();
$conferm->Post();
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
<form method="POST" enctype="multipart/form-data">
  <!-- Email input -->
  <center>
  <div class="form-outline mb-4 ">
    <input type="file" id="form1Example1" name="image" class="form-control" style="width: 400px;" />
    <label class="form-label" for="form1Example1">image</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form1Example2" class="form-control" name="name" style="width: 400px;" />
    <label class="form-label" for="form1Example2">name</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form1Example2" class="form-control" name="prix" style="width: 400px;" />
    <label class="form-label" for="form1Example2">prix</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form1Example2" class="form-control" name="quentite" style="width: 400px;" />
    <label class="form-label" for="form1Example2" name="quentite">quentite</label>
  </div>
   <button name="submit">add</button>
</center>
</form>  
</body>
</html>