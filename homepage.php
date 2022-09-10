<?php
require('connection.php');
session_start();
?>
<?php
//logIn
if (isset($_GET['login'])) {
    $query1 = "SELECT * FROM user_registration WHERE email='$_GET[email]';";

    $result = mysqli_query($con, $query1);
    //if query is fierd
    if ($result) {
        if (mysqli_num_rows($result) == 1)  //if there exists a row with the given email then check
        {
            $result_fetch = mysqli_fetch_assoc($result);
            if (password_verify($_GET['password'], $result_fetch['password'])) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result_fetch['fullName'];


                setcookie("email", $result_fetch['email'], time() + 86400);
                setcookie("password", $result_fetch['password'], time() + 86400);
                //test
                header("location: index.php");
            } else {
                echo "
		              <script>
		              alert('Incorrect Password');
		              window.location.href='homepage.php';
		              </script>
		              ";
            }
        } else {
            echo "
		        <script>
		         alert('Email not registered');
		          window.location.href='homepage.php';
		          </script>
		          ";
        }
    } else {
        echo "
		<script>
		alert('Cannot Run Query');
		window.location.href='homepage.php';
		</script>
		";
    }
}

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
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

</head>


<!-- Navigation bar. Common for all pages -->
<nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <h1 id="f" class="navbar-brand me-5 fw-bold fs-3 h-font text-center" style='color:red;'> DeTOUR</h1>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
            
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#"></a>
                </li>


            </ul>
            <div class="d-flex">


                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>

            </div>
        </div>
    </div>
</nav>


<!-- Modal. Login and Register button work-->
<div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="homepage.php" method="GET">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">User LogIn</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input name="email" type="email" value="<?php if (isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>" class="form-control shadow-none">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" value="<?php if (isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" class="form-control shadow-none">

                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button name="login" type="submit" class="btn btn-outline-dark  shadow-none">LOGIN</button>

                    </div>
                </div>


            </form>

        </div>
    </div>
</div>


<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="register.php">
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">User Registration</h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">


                    </span>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input name="fname" type="fname" class="form-control shadow-none" required>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input name="username" type="username" class="form-control shadow-none" required>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control shadow-none" required>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control shadow-none" required>

                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button name="register" type="submit" class="btn btn-outline-dark shadow-none">REGISTER</button>

                    </div>
                </div>


            </form>

        </div>
    </div>
</div>


<!--Swiper -->
<div class="container-fluid px-lg-4 mt4 ">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="./image/slider114.jpg" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="./image/slider111.jpg" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="./image/dinning111.jpg" class="w-100 d-block" />
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>

<div class="container availability-form">
    <div class="row">
      <div class="col-lg-12 bg-white shadow p-4 rounded">
        <h5 id="show" class="mb-4">Welcome to DETOUR</h5>
        <p id="hide">DETOUR is a fast-growing Global Furniture Brand with customers and connoisseurs around the globe.
     The brand presents an impeccable range of wooden furniture products manufactured from 
    the best-sourced materials and with a deft touch of seasoned artisanship.</p>
      
      </div>
    </div>
  </div>




  <!-- Our products-->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR PRODUCTS</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card boarder-0 shadow" style="max-width: 100%; height:auto;">
                <img src="./image/slider5.webp" class="card-img-top" alt="p1" height="300px">
                <div class="card-body text-center">
                    <h5 class="card-title ">LIVING_ROOM_DECO</h5>


                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card boarder-0 shadow" style="max-width: 100%; height:auto;">
                <img src="./image/bed10.jpg" class="card-img-top" alt="p1" height="300px">
                <div class="card-body text-center">
                    <h5 class="card-title">BED_ROOM_DECO</h5>


                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card boarder-0 shadow" style="max-width: 100%; height:auto;">
                <img src="./image/dinning10.jpg" class="card-img-top" alt="p1" height="300px">
                <div class="card-body text-center">
                    <h5 class="card-title"> KITCHEN & DINNING</h5>


                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card boarder-0 shadow" style="max-width: 100%; height:auto;">
                <img src="./image/office10.jpg" class="card-img-top" alt="p1" height="300px">
                <div class="card-body text-center">
                    <h5 class="card-title"> OFFICE_DECO</h5>


                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card boarder-0 shadow" style="max-width: 100%; height:auto;">
                <img src="./image/door10.jpg" class="card-img-top" alt="p1" height="300px">
                <div class="card-body text-center">
                    <h5 class="card-title">DOOR</h5>


                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card boarder-0 shadow" style="max-width: 100%; height:auto;">
                <img src="./image/lawn10.jpg" class="card-img-top" alt="p1" height="300px">
                <div class="card-body text-center">
                    <h5 class="card-title">LAWN_DECO</h5>


                </div>
            </div>

        </div>


    </div>

</div>

<!-- Contact us-->
<h2 class="mt-5 pt-4 text-center fw-bold h-font">REACH US</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7304.712184247718!2d90.38029359012957!3d23.734677926532303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9c488a6d307%3A0xbe0c65199fcc1b95!2sNew%20Market%20-%20Gate%20No.%2001!5e0!3m2!1sbn!2sbd!4v1657729294383!5m2!1sbn!2sbd" loading="lazy"></iframe>

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
                    <span class="badge bg-light text-dark fs-6  p-2">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
        $("h1").css("color","black");
        $("h2").css("color","grey");
       
      </script>
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

<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});
</script>
</body>

</html>