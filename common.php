<?php
require('connection.php');
session_start();
?>

<!-- Navigation bar. Common for all pages -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
                <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Fourniture BD</a>
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
                           <a class="nav-link me-2" href="#">Features</a>
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
                       $count=0;
                       if(isset($_SESSION['cart']))
                       {
                       $count=count($_SESSION['cart']);
                       }
                          if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                            {
                                
                             echo "
                                   <a href='mycart.php'>
                                    <button  type='button' class='btn btn-outline-dark shadow-none me-lg-3 me-2' >
                                    <i class='bi bi-cart-fill'></i>My Cart($count)</button>
                                    </a>
                                    <a href='logout.php'>
                                    <button  type='button' class='btn btn-outline-dark shadow-none me-lg-3 me-2' >LOGOUT</button>
                                        </a>

                             ";
                            }
                          else
                            {
                            echo<<<data
                                  
                                  <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                                    Login
                                     </button>
                                     <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                                   Register
                                   </button>

                               data;
                
                            }
                          ?>
                     </div>
             </div>
         </div>
</nav>

    

    <!-- Modal. Login and Register button work-->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="login_register.php" method="POST">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" >User LogIn</h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <div class="modal-body">
                 <div class="mb-3">
                     <label  class="form-label">Email address</label>
                     <input name="email" type="email" class="form-control shadow-none" >
                     
                 </div>
                 <div class="mb-3">
                     <label  class="form-label">Password</label>
                     <input name="password" type="password" class="form-control shadow-none" >
                     
                 </div>
                 <div class="d-flex align-items-center justify-content-between mb-2">
                    <button name="login" type="submit" class="btn btn-dark shadow-none">LOGIN</button>

                 </div>
             </div>
             

        </form>
      
    </div>
  </div>
</div>


<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form id="register-form" method="POST" action="login_register.php">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" >User Registration</h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <div class="modal-body">
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">


              </span>
                 <div class="mb-3">
                     <label  class="form-label">Full Name</label>
                     <input name="fname" type="fname" class="form-control shadow-none" required>
                     
                 </div>
                 <div class="mb-3">
                     <label  class="form-label">User Name</label>
                     <input name="username" type="username" class="form-control shadow-none" required>
                     
                 </div>
                 <div class="mb-3">
                     <label  class="form-label">Email address</label>
                     <input name="email" type="email" class="form-control shadow-none" required>
                     
                 </div>
                 <div class="mb-3">
                     <label  class="form-label">Password</label>
                     <input name="password" type="password" class="form-control shadow-none" required>
                     
                 </div>
                 <div class="d-flex align-items-center justify-content-between mb-2">
                    <button name="register" type="submit" class="btn btn-dark shadow-none">REGISTER</button>

                 </div>
             </div>
             

        </form>
      
    </div>
  </div>
</div>

<?php 

   
?>