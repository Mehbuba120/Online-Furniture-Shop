<?php 
require ('connection.php');
session_start();
//session_destroy();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['purchase']))
  {
    $query1= "INSERT INTO order_manager (`fname`, `phn_num`, `address`, `pay_mode`) VALUES ('$_POST[fname]','$_POST[phn_num]','$_POST[address]','$_POST[pay_mode]');";
    $result1=mysqli_query($con,$query1);
    if($result1)
    {
        $order_id=mysqli_insert_id($con);

       $query2="INSERT INTO user_orders (`order_id`, `item_name`,`product_id`, `price`, `quantity`) VALUES (?,?,?,?,?)";
       $stmt=mysqli_prepare($con,$query2);
       if($stmt)
       {
        mysqli_stmt_bind_param($stmt,"isiii",$order_id,$item_name, $item_id,$price,$quantity);
        foreach($_SESSION['cart'] as $key => $value)
        {
            $item_name=$value['iteam_name'];
            $item_id=$value['iteam_id'];
            $price=$value['iteam_price'];
            $quantity=$value['Quantity'];
            mysqli_stmt_execute($stmt);
        }
        unset($_SESSION['cart']);
        echo"
        <script>
        alert('Order Placed');
        window.location.href='index.php';
        </script>
        ";

       }
       else
       {
        echo"
        <script>
        alert('SQL Query Prepare Error');
        window.location.href='index.php';
        </script>
        ";
       }
    }
    else
    {
        echo"
				<script>
				alert('SQL Error');
				window.location.href='index.php';
				</script>
				";
    }
  }
}

?>