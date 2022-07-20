<?php 
   require('common.php');
   ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fourniture-About_Us</title>

    <?php 
     require('links.php');
      ?>
    <link rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    
    <style>
       
    </style>
    
</head>
<body class="bg-light">
  
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Contact Us</h2>
    <div class="h-line bg-dark" ></div>
    <p class="text-center mt-5">
    
      We love to hear from our customers. Please send
      your queries, feedback and suggestions.
    </p>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-lg-6 col-md-5 px-4">
        <div class="bg-white rounded shadow p-4 ">
        <iframe class="w-100 rounded mb-5" height="320px"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7304.712184247718!2d90.38029359012957!3d23.734677926532303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9c488a6d307%3A0xbe0c65199fcc1b95!2sNew%20Market%20-%20Gate%20No.%2001!5e0!3m2!1sbn!2sbd!4v1657729294383!5m2!1sbn!2sbd"  loading="lazy" ></iframe>
        
          <h5>Address</h5>
        <a href="https://goo.gl/maps/G2kkp6amy9BzU3gT7 " target="blank" class="d-inline-block text-decoration-none text-dark mb-2">
        <i class="bi bi-geo-alt-fill"></i> 12/04, Dhaka
           </a> <br>
        </div>
      </div>

      <div class="col-lg-6 col-md-5 px-4">
         <div class="bg-white rounded shadow p-4 ">
           <h5 class="mt-4">
             Call Us
           </h5>
           <a href="tel: +088132543654 " class="d-inline-block mb-2 text-decoration-none text-dark"> 
                <i class="bi bi-telephone-fill me-1"></i>+088132543654
                </a> <br>
                <a href="tel: +088132543654 " class="d-inline-block mb-2 text-decoration-none text-dark"> 
                <i class="bi bi-telephone-fill me-1"></i> +088132543654
                </a>
         
            <h5 class="mt-4">
              Email Us
            </h5>
           <a href="mailto: mjm1807120@gmail.com " class="d-inline-block mb-2 text-decoration-none text-dark"> 
                <i class="bi bi-envelope-fill"></i> mjm1807120@gmail.com
            </a> <br>
                
             <h5 class="mt-4">
            Follow Us
            </h5>
            <a href="# " class="d-inline-block text-dark fs-5 me-2 "><i class="bi bi-twitter me-1"></i>
              </a>
             <a href=" # " class="d-inline-block text-dark fs-5 me-2">  <i class="bi bi-facebook me-1"></i>
              
             </a> 
              <a href=" # " class="d-inline-block text-dark fs-5"> <i class="bi bi-instagram me-1"></i>
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