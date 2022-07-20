
<?php
require ('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
    <?php 
     require('links.php');
     require('header.php');
     
      ?>
</head>
<body class="bg-light">
    

<div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1 class="fw-bold h-font text-center">Manage_Products</h1>
            </div>
            <!-- Show added products -->
            <div class="col-lg-9">
                <table class="table" >
                    <thead class="text-center table-dark table-striped" >
                        <tr>
                        <th scope="col">Product_id</th>
                        <th scope="col">Product_Name</th>
                        <th scope="col">Product_price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">EDIT</th>
                        <th scope="col">REMOVE</th>
                       </tr>
                    </thead>

                    <!-- test -->
                    <tbody class="text-center">
                    <?php
                        $query="SELECT * FROM products";
                        $result=mysqli_query($con,$query);
                        while($result_fetch=mysqli_fetch_assoc($result))
                        {
                          echo "
                          <tr>
                          <td>$result_fetch[id]</td>
                          <td>$result_fetch[name]</td>
                          <td>$result_fetch[price]</td>
                          <td>$result_fetch[quantity]</td>
                          <td><img src='$result_fetch[image]' height='100', width='100'></td>
                          <td>$result_fetch[description]</td>
                        
                          <td>
                          <form action='edit_delete.php' method='POST'>
                          <button name='edit' class='btn btn-dark btn-sm'>EDIT</button>
                          <input type='hidden' name='id' value='$result_fetch[id]'>
                          </form>
                          </td>
                          <td>
                          <form action='edit_delete.php' method='POST'>
                          <button name='remove' class='btn btn-dark btn-sm'>REMOVE </button>
                          <input type='hidden' name='id' value='$result_fetch[id]'>
                          </form>
                          </td>
                          
                          ";              
                        }
                        ?>

                    </tbody>
                     <!-- test -->
                  
                </table>
            </div>


           <!-- Add products -->

         <div class="col-lg-3 px-lg-5">
           <div class="border bg-light rounded p-4">
                <h4>Insert_Product</h5>
                <br>
                <form action="prod_manage.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label>Product_name</label>
                        <input type="text" name="name" class="form-control" required >
                    </div>
                    <div class="mb-3">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" required >
                    </div>
                    <div class="mb-3">
                        <label>Quantity</label>
                        <input type="text" name="quantity" class="form-control" required >
                    </div>
                    <div class="mb-3">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control" required >
                    </div>
                    <label>Product_image</label>
                        <input type="file" name="image" id="image" class="form-control" required >
                    </div>
                    <br>
                    <button class="btn btn-outline-dark  mb-10" name="add">Add</button>
                </form>

           </div>
        </div>

    </div>
</div>


<div class="containe-fluid bg-white mt-5">
   <div class="row">
   <div class="col-lg-5 p-4 ">
   </div>
   <div class="col-lg-4 p-4">
         <h1 class="h-font fw-bold fs-3 mb-2 ">Furniture BD</h1>
           
    </div>
    </div>
</div>
<h6 class="text-center bg-dark text-white p-3 m-0">Copyright © 2022 Furniture BD. All right reserved</h6>   
</body>
</html>