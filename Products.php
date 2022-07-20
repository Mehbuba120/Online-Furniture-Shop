<?php 
   require('common.php');
  //session_destroy();
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
    <h2 class="fw-bold h-font text-center">Products</h2>
    <div class="h-line bg-dark" ></div>
   
  </div>
<!-- Show products from admin panel -->

  <div class="container">
    <div class="row">
    <?php
            $query="SELECT * FROM products";
            $result=mysqli_query($con,$query);
            while($result_fetch=mysqli_fetch_assoc($result))
            {
                echo "
                <form action='mycart_manage.php' method='POST'>
                <div class='card mb-6 border-0 shadow ' >
                  <div class='row g-0 p-3 align-items-center'>
                   
                    <div class='col-md-6 '>
                        <img src='image/$result_fetch[image]' class='img-fluid rounded'>
                      </div>

                      <div class='col-md-4 px-lg-3'>
                        <h4 class='quantity mb-1 '> $result_fetch[name]</h4>
                        <h5 class='quantity mb-5 '>Quantity:  $result_fetch[quantity]</h5>
                        <h6 class='quantity mb-1'> $result_fetch[description] </h6>
                      </div>

                      <div class='col-md-2 text-center'>
                      <h5 class='card-title mb-2 '>$result_fetch[price] Tk</h5>
                      <button type='submit'  name='add'  class='btn btn-sm w-100 btn-outline-dark'>Add To Cart</button>  
                      </div>
                  </div>
                  </div>
                  <input type='hidden' name= 'iteam_name' value='$result_fetch[name]'>
                     <input type='hidden' name= 'iteam_price' value='$result_fetch[price]'>
                     <input type='hidden' name= 'iteam_id' value='$result_fetch[id]'>
                </form>
                
            ";
        }
        ?>

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