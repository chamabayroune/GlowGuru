<?php
require_once('./reqSelect.php');

$products = new select();
$afficherPro = $products->afficher();
// var_dump($afficherPro);
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
<section class="intro">
  <div class="bg-image h-100" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/tables/img2.jpg');">
    <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,.25);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card bg-dark shadow-2-strong">
              <div class="card-body">
                <div class="table-responsive">
                <a href="./Addproduct.php" class="btn btn-primary " role="button" aria-disabled="true">Add</a>
                  <table class="table table-dark table-borderless mb-0">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">image</th>
                        <th scope="col">name</th>
                        <th scope="col">prix</th>
                        <th scope="col">quentite</th>
                        <th scope="col">actins</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($afficherPro as $elements):?>
                     <tr>
                        <th><?php echo $elements['id'] ?></th>
                        <td><img src="<?php echo $elements['image'] ?>" width="50px"alt=""></td>
                        <td><?php echo $elements['name'] ?></td>
                        <td><?php echo $elements['prix'] ?></td>
                        <td><?php echo $elements['quantite'] ?></td>
                        <td>
                          <form action="./deleteLogique.php" method="POST">
                          <input name="id" type="hidden" value="<?php echo $elements['id'] ?>">
                          <button type="submit" class="btn btn-danger" name="submit">delete</button>
                        </form>
                        <form action="./selectOneProduct.php" method="POST">
                          <input type="hidden" name="id" value="<?php echo $elements['id'] ?>">
                          <button type="submit" class="btn btn-danger" name="submit">update</button>
                        </form>
                      </td>
                     </tr>
                     <?php endforeach;?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
<style>
    html,
body,
.intro {
  height: 100%;
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

thead th,
tbody th {
  color: #fff;
}

tbody td {
  font-weight: 500;
  color: rgba(255,255,255,.65);
}

.card {
  border-radius: .5rem;
}
</style>
</body>
</html>