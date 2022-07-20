<?php 
   require('common.php');
?>
<?php
require('connection.php');
//test

?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fourniture</title>
    <!--  link-->
    <?php 
     require('links.php');
      ?>
    <link rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    
    <style>
       

    </style>
    
</head>
<body class="bg-light">
<!-- Slider pictures -->
<div class="container-fluid px-lg-4 mt4 ">
     <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="./image/slider41.jpg"  class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="./image/slider114.jpg"  class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="./image/slider111.jpg"  class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="./image/dinning111.jpg" class="w-100 d-block"/>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
</div>

<!-- Our products-->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">PRODUCTS</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
             <div class="card boarder-0 shadow" style="max-width: 300px; margin:auto;">
                 <img src="./image/chair4.jpg" class="card-img-top" alt="p1">
                     <div class="card-body">
                          <h5 class="card-title">Wooden Chair</h5>
                          <h6 class="card-title mb-4">7000 Tk</h6>
                             <div class="features mb-4">
                               <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">

                                5 chairs
                               </span>

                             </div>
                             <div class="d-flex justify-content-evenly mb-2">
                                    <a href="#" class="btn btn-sm btn-primary">Add To Cart</a>
                                    <a href="#" class="btn btn-sm btn-primary">More</a>
                             </div>
                        </div>
                 </div>
                 
          </div>
          <div class="col-lg-4 col-md-6 my-3">
             <div class="card boarder-0 shadow" style="max-width: 300px; margin:auto;">
                 <img src="./image/chair4.jpg" class="card-img-top" alt="p1">
                     <div class="card-body">
                          <h5 class="card-title">Wooden Chair</h5>
                          <h6 class="card-title mb-4">7000 Tk</h6>
                             <div class="features mb-4">
                               <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">

                                5 chairs
                               </span>

                             </div>
                             <div class="d-flex justify-content-evenly mb-2">
                                    <a href="#" class="btn btn-sm btn-primary">Add To Cart</a>
                                    <a href="#" class="btn btn-sm btn-primary">More</a>
                             </div>
                        </div>
                 </div>
                 
          </div>
          <div class="col-lg-4 col-md-6 my-3">
             <div class="card boarder-0 shadow" style="max-width: 300px; margin:auto;">
                 <img src="./image/chair4.jpg" class="card-img-top" alt="p1">
                     <div class="card-body">
                          <h5 class="card-title">Wooden Chair</h5>
                          <h6 class="card-title mb-4">7000 Tk</h6>
                             <div class="features mb-4">
                               <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">

                                5 chairs
                               </span>

                             </div>
                             <div class="d-flex justify-content-evenly mb-2">
                                    <a href="#" class="btn btn-sm btn-primary">Add To Cart</a>
                                    <a href="#" class="btn btn-sm btn-primary">More</a>
                             </div>
                        </div>
                 </div>
                 
          </div>
          
          

          <div class="col-lg-12 text-center mt-5">
            <a href="Products.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Products >></a>
         </div>
    </div>

</div>

<!-- Contact us-->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
        <iframe class="w-100" height="320px"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7304.712184247718!2d90.38029359012957!3d23.734677926532303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9c488a6d307%3A0xbe0c65199fcc1b95!2sNew%20Market%20-%20Gate%20No.%2001!5e0!3m2!1sbn!2sbd!4v1657729294383!5m2!1sbn!2sbd"  loading="lazy" ></iframe>

        </div>
        <div class="col-lg-4 col-md-4">
            <div class="bg-white p-4 rounded mb-4">
                <h5>
                    Call Us
                </h5>
                <a href="tel: +088132543654 " class="d-inline-block mb-2 text-decoration-none text-dark"> 
                <i class="bi bi-telephone-fill me-1"></i>+088132543654
                </a> <br>
                <a href="tel: +088132543654 " class="d-inline-block mb-2 text-decoration-none text-dark"> 
                <i class="bi bi-telephone-fill me-1"></i> +088132543654
                </a>

            </div>
            <div class="bg-white p-4 rounded mb-4">
                <h5>
                    Follow Us
                </h5>
                <a href="# " class="d-inline-block mb-3  ">
                    <span class="badge bg-light text-dark fs-6  p-2" >
                    <i class="bi bi-twitter me-1"></i>Twitter
                     </span> 
                   
                </a> <br>
                <a href=" # " class="d-inline-block mb-3 "> 
                    <span class="badge bg-light text-dark fs-6  p-2">
                    <i class="bi bi-facebook me-1"></i>Facebook
                    </span>
                </a> <br>
                <a href=" # " class="d-inline-block mb-3"> 
                    <span class="badge bg-light text-dark fs-6  p-2">
                    <i class="bi bi-instagram me-1"></i>Instagram
                    </span>
                </a>

            </div>

        </div>
    </div>
</div>

<!-- Footer -->

<?php 
   require('footer.php');
   ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
</body>
</html>