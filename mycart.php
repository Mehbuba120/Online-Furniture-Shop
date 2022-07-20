<?php 
include("common.php");
//session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <?php 
    include("links.php");
     ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Product_Name</th>
                        <th scope="col">Product_Id</th>
                        <th scope="col">Product_price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                       
                        if(isset($_SESSION['cart']))
                        {
                            foreach ($_SESSION['cart'] as $key=>$value)
                            {
                                $sr=$key+1;
                               
                                echo "
                                        <tr>
                                        <td>$sr</td> 
                                        <td>$value[iteam_name]</td>
                                        <td>$value[iteam_id]</td>
                                        <td>$value[iteam_price]<input type='hidden' class='iprice' value='$value[iteam_price]'></td>
                                        <td>
                                            <form action='mycart_manage.php' method='POST'>
                                            <input class='text-center iquantity' name= 'mod_quantity' onchange='this.form.submit()' type='number' value='$value[Quantity]' min='1' max='10'>
                                            <input type='hidden' name='iteam_name' value='$value[iteam_name]'>
                                            </form>  
                                        </td>
                                        
                                       <td class='itotal'></td>
                                        <td>
                                            <form action='mycart_manage.php' method='POST'>
                                            <button name='remove' class='btn btn-outline-dark btn-sm'>REMOVE </button>
                                            <input type='hidden' name='iteam_name' value='$value[iteam_name]'>
                                            </form>
                                        </td>
                                       
                                        </tr>
                                ";
                            }
                        }
                        
                        

                        ?>
                    
                    </tbody>
                </table>
         </div>

         <div class="col-lg-3">
           <div class="border bg-light rounded p-4">
             <h4>Grand Total: </h5>
            <h5 class="text-right" id="gtotal"> </h5>
            <br>
            <?php
               if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
               {
             ?>
            <form action="buy.php" method="POST" >
                 <div class="mb-3">
                <label>Full Name</label>
                <input type="text" name="fname" class="form-control" required>
               </div>
               <div class="mb-3">
                <label>Phone Number</label>
                <input type="number" name="phn_num" class="form-control" required >
               </div>
               <div class="mb-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" required >
               </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Cash On Delivery
                </label>
                </div>
                <br>
                <button class="btn btn-dark text-white " name="purchase">Make Purchase</button>
            </form>
            <?php 
               }
            ?>

           </div>
         </div>

        </div>
    </div>
    
<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subtotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);

        }
        gtotal.innerText=gt;
    }
    subtotal();

</script>


<?php 
include("footer.php");
?>
</body>
</html>
