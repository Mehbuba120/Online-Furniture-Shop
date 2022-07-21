<?php
require('connection.php');
session_start();

?>

<?php 
//logIn
if (isset($_POST['login']))
{
    $query1="SELECT * FROM user_registration WHERE email='$_POST[email]';";
   
    $result=mysqli_query($con,$query1);
    //if query is fierd
    if($result)
    {
     if(mysqli_num_rows($result)==1)  //if there exists a row with the given email then check
           {
              $result_fetch=mysqli_fetch_assoc($result);
               if(password_verify($_POST['password'],$result_fetch['password'])) 
                   {
                      $_SESSION['logged_in']=true;
                      $_SESSION['username']=$result_fetch['fullName'];
					  $_SESSION['ex_time']=time();

					 setcookie("email", $result_fetch['email'], time() + 86400);
                     setcookie("password", $result_fetch['password'], time() + 86400);
					 //test
                       header("location: index.php");

                    }
                else    
                   {
                       echo "
		              <script>
		              alert('Incorrect Password');
		              window.location.href='index.php';
		              </script>
		              ";

                    }
       
            }
     else                                                  
           {
              echo "
		        <script>
		         alert('Email not registered');
		          window.location.href='index.php';
		          </script>
		          ";
           }
    }
    else     
    {
        echo "
		<script>
		alert('Cannot Run Query');
		window.location.href='index.php';
		</script>
		";

    }
}

//register
if (isset($_POST['register']))
{
	
		// get all of the form data 
		$username = $_POST['username']; 
		$email = $_POST['email']; 
		$passwd = $_POST['password']; 
		$fullname = $_POST['fname']; 
	   
		
	
	 $user_exist_query="SELECT * FROM user_registration WHERE userName = '{$username}' OR 'email' = '$email';";         //don't use single quote around the table_name and field_name  
	$result=mysqli_query($con, $user_exist_query );

	if ($result)                   
	{
		if(mysqli_num_rows($result)>0)           //if username or email exist already
		
		
	    {
			$result_fetch= mysqli_fetch_assoc($result);
			if($result_fetch['username']==$_POST['username'])
			{
				echo"
				<script>
				alert('$result_fetch[username]-Username already taken');
				window.location.href='index.php';
				</script>
				";
			}
			else
			{
				echo"
				<script>
				alert('$result_fetch[email]-E-mail already registered');
				window.location.href='index.php';
				</script>
				";
			}
		}
		else                                            //if not insert data into the table
		{
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);  //password encription
			$query=" INSERT INTO user_registration VALUES ('{$fullname}','{$username}','{$email}','{$password}');";
        	if(mysqli_query($con,$query))
			{
				echo "
		          <script>
		           alert('Registration Complete');
		           window.location.href='index.php';
		           </script>
		           ";

			}
			else{
				echo "
		         <script>
		         alert('Cannot Run Query');
		         window.location.href='index.php';
		         </script>
		         ";
			}
		}
	}
	else
	{
		echo "
		<script>
		alert('Cannot Run Query');
		window.location.href='index.php';
		</script>
		";
	}
}
?>



<!-- Navigation bar. Common for all pages -->
<nav class="navbar navbar-expand-lg navbar-light custom-bg px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
                <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">DETOUR</a>
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
        <form action="common.php" method="POST">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" >User LogIn</h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
             <div class="modal-body">
                 <div class="mb-3">
                     <label  class="form-label">Email address</label>
                     <input name="email" type="email" value = "<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>" class="form-control shadow-none" >
                     
                 </div>
                 <div class="mb-3">
                     <label  class="form-label">Password</label>
                     <input name="password" type="password" value = "<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'] ;?>" class="form-control shadow-none" >
                     
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
        <form id="register-form" method="POST" action="common.php">
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
                    <button name="register" type="submit" class="btn btn-outline-dark shadow-none">REGISTER</button>

                 </div>
             </div>
             

        </form>
      
    </div>
  </div>
</div>

