<?php
require ('connection.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['add']))
  {
    $name= $_POST['name'];
    $price=$_POST['price'];
    $quantity= $_POST['quantity'];
    $description=$_POST['description'];

    $image= $_FILES['image']['name'];
    $image_loc= $_FILES['image']['tmp_name'];
    $allowed_extension=array('png','jpg','jpeg','webp');
    $file_extension=pathinfo($image,PATHINFO_EXTENSION);

    //$filename=time().'.'.$file_extension;
    $img_des='../image/'.$image;

    if(!in_array($file_extension, $allowed_extension))
    {
        echo"
        <script>
        alert('You are allowed with only jpg, jpeg and png ');
        window.location.href='admin panel.php';
        </script>
        ";
    }
    else
    {
       
        

        $query="INSERT INTO products (`name`, `price`, `quantity`, `image`,`description`) 
        VALUES ('$name','$price','$quantity','$img_des','$description')";
        $query_run=mysqli_query($con,$query);
        if($query_run)
        {
             move_uploaded_file($image_loc,$img_des);
            echo"
            <script>
            alert('Product Added successfully ');
            window.location.href='admin panel.php';
            </script>
            ";
        }
        else
        {
            echo"
            <script>
            alert('Failed to Add');
            window.location.href='admin panel.php';
            </script>
            ";

        }
    }
  }
}

?>

