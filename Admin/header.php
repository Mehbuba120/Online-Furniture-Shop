<?php
require ('connection.php');
session_start();

if (isset($_POST['ad_login']))
{
    $query1="SELECT * FROM admin_login WHERE ad_name='$_POST[ad_name]' AND ad_password='$_POST[ad_password]';";
   
    $result=mysqli_query($con,$query1);
    //if query is fierd
    if($result)
    {
      if(mysqli_num_rows($result)==1)  //if there exists a row with the given email then check
           {
              
                      $_SESSION['logged_in']=true;
                      $_SESSION['username']=$result_fetch['ad_name'];
                       header("location: admin panel.php");

            }
        else
        {
            echo "
		         <script>
		         alert('Login Failed');
		       window.location.href='admin login.php';
		       </script>
		         ";
                // header("location: admin login.php");

        }
       
    }
     
    
    else      // jodi query fire na hoy
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <?php 
     require('links.php');
      ?>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light  custom-bg  px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
                <a class="navbar-brand me-5  fs-3 h-font text-dark" href="admin panel.php"  style="color:red;" >DETOUR <h6>Admin Panel</h6> </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active me-2 text-dark" aria-current="page" href="cart_manage.php">Cart_Manage</a>
                     </li>
                    
                      <li class="nav-item">
                           <a class="nav-link text-dark" href="admin panel.php">Manage_product</a>
                      </li>
                
                 
                      </ul>
                </div>
                <div class="d-flex">
                    <!-- after login -->
                        <?php 
                             if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
                               {
                                 echo "
                                  <a href='logout.php'>
                                  <button  type='button' class='btn btn-outline-dark shadow-none me-lg-3 me-2' >LOGOUT</button>
                                   </a>

                                  ";
                                 }
                              else
                               {
                                
                                 }
                           ?>
                    </div>
         </div>
    </nav>
   
</body>
</html>