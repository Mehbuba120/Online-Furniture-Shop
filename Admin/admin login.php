<?php 
require("connection.php");
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

<style>
    div.admin-login{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 400px;
    }
</style>

</head>
<body class="bg-light">
    <!-- login form -->
    <div class="admin-login text-center rounded bg-white shadow overflow-hidden">
        <form action="admin panel.php" method="POST">
        
        <div class="modal-header ">
                <h4 class="modal-title d-flex align-items-center " >ADMIN LOGIN</h4>
                
            </div>
             <div class="modal-body">
                 <div class="mb-3">
                     
                <input name="ad_name" type="text" class="form-control shadow-none" placeholder="User Name">
                     
                 </div>
                 <div class="mb-3">
                    
                     <input name="ad_password" type="password" class="form-control shadow-none" placeholder="Password" >
                     
                 </div>
                 <div class="d-flex align-items-center justify-content-between mb-2">
                    <button name="ad_login" type="submit" class="btn btn-dark shadow-none">LOGIN</button>

                 </div>
             </div>
             
             

        </form>
    </div>

</body>
</html>