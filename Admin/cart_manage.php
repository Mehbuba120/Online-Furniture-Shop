<?php
require ('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
     require('links.php');
      ?>
</head>
<body class="bg-light">
<?php
require ('header.php');

?>
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Show Orders</h2>
    <div class="h-line bg-dark" ></div>
</div>
<div class="container mt-5">
      <div class="row">
        <div class="col-lg-12">
        <table class="table text-center ">
          <thead class="table-dark table-striped text-center">
            <tr>
              <th scope="col">Order_Id</th>
              <th scope="col">Customer_name</th>
              <th scope="col">Phone number</th>
              <th scope="col">Address</th>
              <th scope="col">Pay_mode</th>
              <th scope="col">Orders</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query="SELECT * FROM order_manager";
            $result=mysqli_query($con,$query);
            while($result_fetch=mysqli_fetch_assoc($result))
            {
              echo "
              <tr class='bg-light'>
              <td>$result_fetch[order_id]</td>
              <td>$result_fetch[fname]</td>
              <td>$result_fetch[phn_num]</td>
              <td>$result_fetch[address]</td>
              <td>$result_fetch[pay_mode]</td>
              <td>
                <table class='table text-center table-dark table-striped'>
                  <thead>
                    <tr>
                      <th scope='col'>Product_name</th>
                      <th scope='col'>Product_Id</th>
                      <th scope='col'>Price</th>
                      <th scope='col'>Quantity</th>
                      
                    </tr>
                  </thead>
                  <tbody>
             
               ";
               $order_query="SELECT * FROM user_orders WHERE order_id='$result_fetch[order_id]'";
               $order_result=mysqli_query($con,$order_query);
               while($order_result_fetch=mysqli_fetch_assoc($order_result))
               {
                echo"
                <tr>
                  <td>$order_result_fetch[item_name]</td>
                  <td>$order_result_fetch[product_id]</td>
                  <td>$order_result_fetch[price]</td>
                  <td>$order_result_fetch[quantity]</td>
                </tr>
                ";
               }

               echo "
                  </tbody>
                </table>
              </td>
              </tr>
               
               ";
            }
            ?>
           
           
          </tbody>
        </table>
        </div>
      </div>
    </div>


<div class="containe-fluid bg-white mt-5">
   <div class="row">
   <div class="col-lg-5 p-10 ">
   </div>
   <div class="col-lg-5 p-4">
         <h1 class="h-font fw-bold fs-3 mb-2"></h1>
           
    </div>
    </div>
 </div>
<h6 class="text-center bg-dark text-white p-3 m-0">Copyright © 2022 Detour All right reserved</h6>   
</body>
</html>