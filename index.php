<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <title>User Dashboard</title>
</head>
<body>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="first" style="background-color: #faf5e4;">
    <div class="container-fluid">
       <a id="SAAN" href="#"><img src="SAAN.jpg" alt="" id="imgsaan"></a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav m-auto my-2 my-lg-0" >
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#product">trending</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about" >about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  " href="http://localhost/DRY%20NUTS/cart.php">store</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  " href="#contact">Contact us</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="px-2 search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <section class="main">
    <div class="container py-5">
      <div class="row py-4">
        <div class="col-lg-7 pt-5 text-center">
          <h1>NATURE IS THE BEST MEDICINE!</h1>
          <a href="logout.php" class="btn btn-warning" style="color:white; background-color:#004445">Logout</a>
          </form>
        </div>
      </div>
    </div>
  </section>




  <!-- .................................... -->

  <section class="new">
    <div class="container py-5">
      <div class="row pt-5"> 
        <div class="col-lg-7 m-auto">
          <div class="row text-center">
            <div class="col-lg-4">
              <img src="ecology.png" class="img-luid" alt="">
              <h6>NATURAL</h6>
            </div>
            <div class="col-lg-4">
              <img src="images.png" class="img-luid" alt="">
              <h6>ORGANIC</h6>
            </div>
            <div class="col-lg-4">
              <img src="chemicalfree.png" class="img-luid" alt="">
              <h6>CHEMICAL FREE</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br>

  <!-- ............................................. -->

  <section class="product " id="product" style="background-color: #2c786c;">
    <div class="container py-5">
      <div class="row">
       <div class="col-lg-5 m-auto text-center">
        <br>
        <h1>What's Trending</h1>
        <h6 style="color: #f8b400;">Choose Wise, Be Healthy</h6>
       </div>
      </div>
     <div class="row pt-4">
      <div class="col-lg-3 text-center">
        <div class="card border-0 mb-2" style="background-color: #faf5e4;">
          <div class="card-body ">
          <a href="http://localhost/DRY%20NUTS/cart.php">   <img src="7.jpg" alt="" class="img-luid1"></a>
          </div>
        </div>
        <h6 >Hair Oil</h6>
        <p>Rs.100</p>
      </div>

      <div class="col-lg-3 text-center">
        <div class="card border-0 mb-2" style="background-color: #faf5e4;" >
          <div class="card-body ">
          <a href="http://localhost/DRY%20NUTS/cart.php">  <img src="8.jpg" alt="" class="img-luid1"></a>
          </div>
        </div>
        <h6 >Lip Balm</h6>
        <p>Rs.120</p>
      </div>


      <div class="col-lg-3 text-center">
        <div class="card border-0 mb-2" style="background-color: #faf5e4;">
          <div class="card-body ">
          <a href="http://localhost/DRY%20NUTS/cart.php">  <img src="10.jpg" alt="" class="img-luid1"></a>
          </div>
        </div>
        <h6 >Aloe Vera Gel</h6>
        <p>Rs.150</p>
      </div>

      <div class="col-lg-3 text-center">
        <div class="card border-0 mb-2" style="background-color: #faf5e4;">
          <div class="card-body ">
          <a href="http://localhost/DRY%20NUTS/cart.php">  <img src="9.jpg" alt="" class="img-luid1"></a>
          </div>
        </div>
        <h6 >Natural Soap</h6>
        <p>Rs.80</p>
      </div>
      <div class="row">
        <div class="col-lg-6 text-center m-auto">
          <form action="http://localhost/DRY%20NUTS/cart.php">
          <button class="btn2">Shop More!</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
</section>

<!-- ........................................ -->

<section class="about" id="about">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-8 m-auto text-center">
        <h1>NATURE IS THE BEST MEDICINE!</h1>
        <h6 style="color: #f8b400;">Choose Wise, Be Healthy</h6><br>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <img src="4.jpg" alt="" class="img-luid2 mb-3">
          <h5>Top Quality Product</h5>
          <p>Discover our all-natural cosmetics, meticulously crafted from pure, organic ingredients. Immerse yourself in a world of beauty that harmonizes with nature.</p>
        </div>

          <div class="col-lg-4">
            <img src="2.jpg" alt="" class="img-luid2 mb-3">
            <h5>Organic Materials</h5>
            <p>Discover our all-natural cosmetics, meticulously crafted from pure, organic ingredients. Immerse yourself in a world of beauty that harmonizes with nature.</p>
          </div>

            <div class="col-lg-4">
              <img src="5.jpg" alt="" class="img-luid2 mb-3">
              <h5>Chemical Free</h5>
              <p>Discover our all-natural cosmetics, meticulously crafted from pure, organic ingredients. Immerse yourself in a world of beauty that harmonizes with nature.</p>
            </div>
      </div>
      <div class="row my-4">
        <div class="col-lg-6 text-center m-auto">
          <form action="http://localhost/DRY%20NUTS/cart.php">
          <button class="btn2">Shop Now!</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ................................................ -->
<form action="contact.php" method="post">
<section class="contact py-3" id="contact">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-5 m-auto text-center">
        <h1>Contact Us</h1>
        <h6 style="color: #f8b400;">Always Be In Touch With Us</h6>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9 m-auto">
       <div class="row py-5">
        <div class="col-lg-4">
          <h6>Location</h6>
          <p>Rajalakshi Engineering College, Chennai</p>
        
          <h6>Phone No</h6>
          <p>9877899877</p>
       
          <h6>Email</h6>
          <p>saan@gmail.com</p>
        </div>
            <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-6">
              <input type="text" class="form-control bg-light" name="first_name" placeholder="First Name">
            </div>
            <div class="col-lg-6">
              <input type="text" class="form-control bg-light" name="last_name" placeholder="Last Name">
            </div>
          </div>
          <div class="row py-2">
            <div class="col-lg-12">
              <textarea class="form-control bg-light" name="message" cols="10" rows="5" placeholder="Enter Message"></textarea>
            </div>
          </div>
          <button class="btn2" name="submit1">Submit</button>
        </div>
       </div> 
      </div>
    </div>
  </div>
</section>
          </form>


<!-- ....................................................... -->

<section class="news py-5" style="background-color: #faf5e4;">
  <div class="container ">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-3">
            <h5 class="pb-3">CUSTOMER CARE</h5>
            <p>INDIA 123-456</p>
            <p>USA 987-678</p>
            <p>RUSSIA 098-456</p>
          </div>
          <div class="col-lg-3">
            <h5 class="pb-3">CUSTOMER CARE</h5>
            <p>INDIA 123-456</p>
            <p>USA 987-678</p>
            <p>RUSSIA 098-456</p>
          </div>
          <div class="col-lg-3">
            <h5 class="pb-3">CUSTOMER CARE</h5>
            <p>INDIA 123-456</p>
            <p>USA 987-678</p>
            <p>RUSSIA 098-456</p>
          </div>
          <div class="col-lg-3">
            <h5 class="pb-3">SOCIAL MEDIA</h5>
            <span><i class="fab fa-facebook"></a></i></span>
            <span><i class="fab fa-instagram"></i></span>
            <span><i class="fab fa-twitter"></i></span>
            <span><i class="fab fa-google-plus"></i></span>
          </div>
        </div>
      </div>

    </div>

  </div>

</section>



      




</body>
</html>