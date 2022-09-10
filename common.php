<?php
require('connection.php');
session_start();
//session_destroy();
?>

<!-- Navigation bar. Common for all pages -->
<nav class="navbar navbar-expand-lg navbar-light custom-bg px-lg-3 py-lg-2 shadow-sm sticky-top">
   <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php" style="color:red;">DeTOUR</a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link me-2" href="Products.php">Products</a>
            </li>

            <li class="nav-item">
               <a class="nav-link me-2" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
               <a class="nav-link " href="about.php">About Us</a>
            </li>


         </ul>
         <div class="d-flex">
            <!-- after login -->
            <?php
            $count = 0;
            if (isset($_SESSION['cart'])) {
               $count = count($_SESSION['cart']);
            }


            echo "
                  <a href='mycart.php'>
                   <button  type='button' class='btn btn-outline-dark shadow-none me-lg-3 me-2' >
                    <i class='bi bi-cart-fill'></i>My Cart($count)</button>
                     </a>
                     <a href='logout.php'>
                      <button  type='button' class='btn btn-outline-dark shadow-none me-lg-3 me-2' >LOGOUT</button>
                    </a>
                   ";
            ?>
         </div>
      </div>
   </div>
</nav>