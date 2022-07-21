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
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

  <style>

  </style>

</head>

<body class="bg-light">



  <div class="container bg-white text-center mt-2">
      <div class="row">

        <div class="col-lg-12 m-3">
          <div class="form-group">
            <form action="" method="GET">
              
                <h4 class="mb-4 mt-3"><button name='search' class='btn btn-outline-dark btn-sm'><h6>Search</h6> </button> </h4>
                <?php
                $query = "SELECT DISTINCT(catname) FROM products";
                $result = mysqli_query($con, $query);
                while ($result_fetch = mysqli_fetch_assoc($result)) {

                  echo "
                          
                          <label class='checkbox-inline mb-4 mx-5' >
                          <input type='checkbox'  name='catname' style='margin: right 4px;' value='$result_fetch[catname]' >
                          $result_fetch[catname]</label> 
                            
                          ";
                }

                ?>
             
            </form>

          </div>
        </div>
      </div>
  </div>
  </div>


  <!-- Show products from admin panel -->
  <div class="container mt-5">
    <div class="row">
      <?php
      //filterd Products
      if (isset($_GET['catname'])) {
        $catchecked = $_GET['catname'];
        $query = "SELECT * FROM products WHERE catname='$catchecked'";
        $result = mysqli_query($con, $query);
        while ($result_fetch = mysqli_fetch_assoc($result)) {
          echo "
                            <form action='mycart_manage.php' method='POST'>
                            <div class='card mb-6 border-0 shadow ' >
                              <div class='row g-0 p-3 align-items-center'>
                              
                                <div class='col-md-6 '>
                                    <img src='image/$result_fetch[image]' class='img-fluid rounded'>
                                  </div>

                                  <div class='col-md-4 px-lg-3'>
                                    <h5 class='quantity mb-1 '>Title: $result_fetch[name]</h5>
                                    <h5 class='quantity mb-4 '>Quantity:  $result_fetch[quantity]</h5>
                                    <h6 class='quantity mb-1'> $result_fetch[description] </h6>
                                  </div>

                                  <div class='col-md-2 text-center'>
                                  <h5 class='card-title mb-2 'style='color:green;''>$result_fetch[price] BDT</h5>
                                  <button type='submit'  name='add'  class='btn btn-sm w-100 btn-outline-dark'>Add To Cart</button>  
                                  </div>
                              </div>
                              </div>
                              <input type='hidden' name= 'iteam_name' value='$result_fetch[name]'>
                                <input type='hidden' name= 'iteam_price' value='$result_fetch[price]'>
                                <input type='hidden' name= 'iteam_id' value='$result_fetch[id]'>
                                <input type='hidden' name= 'catname' value='$result_fetch[catname]'>

                            </form>
                            
                        ";
        }
      } else {
        // show all products
        $query = "SELECT * FROM products";
        $result = mysqli_query($con, $query);
        while ($result_fetch = mysqli_fetch_assoc($result)) {
          echo "
                <form action='mycart_manage.php' method='POST'>
                <div class='card mb-6 border-0 shadow ' >
                  <div class='row g-0 p-3 align-items-center'>
                   
                    <div class='col-md-6 '>
                        <img src='image/$result_fetch[image]' class='img-fluid rounded'>
                      </div>

                      <div class='col-md-4 px-lg-3'>
                        <h5 class='quantity mb-1 '>Title: $result_fetch[name]</h5>
                        <h5 class='quantity mb-4 '>Quantity:  $result_fetch[quantity]</h5>
                        <h6 class='quantity mb-1'> $result_fetch[description] </h6>
                      </div>

                      <div class='col-md-2 text-center'>
                      <h5 class='card-title mb-2' style='color:green;'>$result_fetch[price] BDT</h5>
                      <button type='submit'  name='add'  class='btn btn-sm w-100 btn-outline-dark'>Add To Cart</button>  
                      </div>
                  </div>
                  </div>
                  <input type='hidden' name= 'iteam_name' value='$result_fetch[name]'>
                     <input type='hidden' name= 'iteam_price' value='$result_fetch[price]'>
                     <input type='hidden' name= 'iteam_id' value='$result_fetch[id]'>
                     <input type='hidden' name= 'catname' value='$result_fetch[catname]'>

                </form>
                
            ";
        }
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
    src = "https://js/jquery-1.10.2.min.js"
  </script>
  <script>
    src = "https://js/jquery--ui.js"
  </script>


</body>

</html>