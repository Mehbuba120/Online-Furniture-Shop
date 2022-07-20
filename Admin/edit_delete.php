<?php
require ('connection.php');

  //update
if(isset($_GET['update']))
 {
    $pid=$_GET['pro_id'];
    $name= $_GET['pname'];
    $price=$_GET['pprice'];
    $quantity= $_GET['pquantity'];
    $description=$_GET['pdescription'];
    $query="UPDATE products SET name='$name', price='$price',quantity='$quantity', description='$description' WHERE id='$pid';";
    $query_run=mysqli_query($con,$query);
        if($query_run)
        {
            echo"
            <script>
            alert('Prooduct Updated successfully ');
            window.location.href='admin panel.php';
            </script>
            ";
        }
        else
        {
            echo"
            <script>
            alert('Failed to Update');
            window.location.href='admin panel.php';
            </script>
            ";

        }
 }


if($_SERVER["REQUEST_METHOD"]=="POST")
{

    //remove products
  if(isset($_POST['remove']))
  {
    $id=$_POST['id'];
    $query="DELETE FROM products WHERE id=$id";
    $query_run=mysqli_query($con,$query);
    if($query_run)
    {
        echo "
        <script>
        alert('Product Removed');
        window.location.href='admin panel.php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
        alert('Failed to remove');
        window.location.href='admin panel.php';
        </script>
        ";
    }


  }
   
  //start editing
  if(isset($_POST['edit']))
  {
    $id=$_POST['id'];
    $query="SELECT * FROM products WHERE id=$id";
    $query_run=mysqli_query($con,$query);
    if(mysqli_num_rows($query_run)>0)
    {
        $products=mysqli_fetch_array($query_run);
    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit/Delete</title>
    <?php 
     require('links.php');
     require('header.php');
      ?>
</head>
<body>
<div class="container">
        <div class="row">
        <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>Edit Products</h1>
            </div>
            <div class="col-lg-8 ">
                <div class="border bg-light rounded p-4 ">
                        
                        <br>
                        <form action="edit_delete.php" method="GET">
                        <input type="hidden" name="pro_id" value="<?=$products['id']?>" class="form-control" required >
                          <div class="mb-3">
                                <label>Product_name</label>
                                <input type="text" name="pname" value="<?=$products['name']?>" class="form-control" required >
                            </div>
                            <div class="mb-3">
                                <label>Price</label>
                                <input type="text" name="pprice" value="<?=$products['price']?>" class="form-control" required >
                            </div>
                            <div class="mb-3">
                                <label>Quantity</label>
                                <input type="text" name="pquantity" value="<?=$products['quantity']?>" class="form-control" required >
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <input type="text" name="pdescription" value="<?=$products['description']?>" class="form-control" required >
                            </div>
                            <br>
                            <button type="submit" class="btn btn-outline-dark" name="update">Update</button>
                        </form>

                    </div>
                </div>
            </div>
</div>   

<?php 

}
else
{
    echo "
    <script>
    alert('Product Not Found');
    window.location.href='admin panel.php';
    </script>
    ";  
}
}

}
?>
      
      
        <!--footer -->
 <div class="containe-fluid bg-white mt-5">
   <div class="row">
   <div class="col-lg-5 p-4 ">
   </div>
   <div class="col-lg-4 p-4">
         <h1 class="h-font fw-bold fs-3 mb-2">Furniture BD</h1>
           
    </div>
    </div>
</div>
<h6 class="text-center bg-dark text-white p-3 m-0">Copyright © 2022 Furniture BD. All right reserved</h6>  
    </body>
</html>


