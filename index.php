<?php
require_once('./reqSelect.php');
$products = new select();
$afficherPro = $products->afficher();
// var_dump($afficherPro)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glow.Guru</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/test.css"> -->
    <!-- imported bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- imported fontawsome -->
    <script src="https://kit.fontawesome.com/43bba9fe74.js" crossorigin="anonymous"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-transparent position-absolute w-100">
        <div class="container-sm">
            <a class="navbar-brand fw-bold text-white" href="#">Glow.<span>Guru</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="./contact.html">Contact Us</a>
                    </li>
                </ul>
                <a href="http://localhost/GLOWGURU/index1.php"><button class="login"><i class="fa-solid fa-user"></i></button></a>
            </div>
        </div>
    </nav>


    <div class="home">
        <img src="./assets/imgs/sos.jpg" alt="">
    </div>
    <div class="title d-flex flex-column align-items-center">
        <h2 class="text-white">Glow.Guru</h2>

        <p class="text-white text-center ">Her beauty is her sustenance. Like a dark magnet, it draws monsters from their
            dens. <br> They follow her home and scratch at her door until she brings them inside and kills, cleans, eats them.
        </p>
    </div>

    <!-- produit pour payer -->

    <div class="row">
        <h3 class="produit text-center">Product</h3>
        <?php foreach($afficherPro as $elements):?>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image">
                        <img class="pic-1" src="<?php echo $elements['image'] ?>">
                    </a>
                    <ul class="product-links">
                        <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                        <li><a href="" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                    </ul>
                    <div class="price  text-white"><?php echo $elements['prix'] . "$" ?></div>
                </div>
                <div class="product-content">
                    <h3 class="title-card"> <?php echo $elements['name'] ?><a href="#"></a></h3>
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star disable"></li>
                        <li class="fas fa-star disable"></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    <p class="paragagraphe text-center text-white" id="para"  >
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
        distinctio earum repellat quaerat voluptatibus placeat nam,<br>
        commodi optio pariatur est quia magnam eum harum corrupti
        dicta, aliquam sequi voluptate quas.
        Lorem ipsum dolor sit amet consectetur, <br> adipisicing elit. Deleniti
        , exercitationem? Ducimus, alias minima? Obcaecati explicabo vitae reiciendis,
         et porro labore molestiae, <br> eveniet nobis numquam sint aperiam! Aspernatur quia
          vel blanditiis?
    </p>
    
<h3 class="contact text-center ">Contact Us</h3>
<div class="maps">
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1728&amp;height=270&amp;hl=en&amp;q=china&amp;t=h&amp;z=7&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.gachacute.com/">www.gachacute.com</a></div>
    <style>.mapouter{position:relative;text-align:right;width:100%;height:270px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:270px;}.gmap_iframe {height:270px!important;}</style></div>
</div>

<h3 class="team text-center ">Our Team</h3>

<div class="team">
    <div class="lightbox">
        <div class="multi-carousel">
          <div id="sectionimg" class="d-flex multi-carousel-inner">
            <div class="multi-carousel-item">
              <img
              id="img"
                src="./assets/imgs/dior.jfif"
                data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/1.webp"
                alt="Table Full of Spices"
              />
            </div>
            <div class="multi-carousel-item">
              <img
              id="img"
              style="width: 10em !important;"
                src="./assets/imgs/goccci.jfif"
                data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/2.webp"
                alt="Winter Landscape"
              />
            </div>
            <div class="multi-carousel-item">
              <img style=" width: 14em;
    margin-top: 2em;"
                src="./assets/imgs/nyx.png"
                data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/3.webp"
                alt="View of the City in the Mountains"
              />
            </div>
            <div class="multi-carousel-item">
              <img
              id="img"
              style=" width:11em !important"
                src="./assets/imgs/ysl.jfif"
                data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Slides/4.webp"
                alt="Place Royale Bruxelles"
              />
            </div>
          </div>
        </div>
      </div>
</div>



    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #1b1b1b">
        <!-- Grid container -->
        <div class="container">
            <!-- Section: Links -->
            <section class="mt-5">
                <!-- Grid row-->
                <div class="row text-center d-flex justify-content-center pt-5">
                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Home</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Product</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Contact Us</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Our Team</a>
                        </h6>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row-->
            </section>
            <!-- Section: Links -->
            <hr class="my-5" />

            <!-- Section: Text -->
            <section class="mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                            distinctio earum repellat quaerat voluptatibus placeat nam,
                            commodi optio pariatur est quia magnam eum harum corrupti
                            dicta, aliquam sequi voluptate quas.
                        </p>
                    </div>
                </div>
            </section>
            <!-- Section: Text -->

            <!-- Section: Social -->
            <section class="text-center mb-5">
                <a href="" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </section>
            <!-- Section: Social -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2023 Copyright:
            <a class="text-white" href="http://127.0.0.1:5500/index.html#!">Glow.Guru</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </div>
    <!-- End of .container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>