<?php

require('connection.php');


if(isset($_POST['done']))
  {
    $id=$_POST['oid'];
    $query1="DELETE FROM user_orders WHERE order_id=$id";
    $query2="DELETE FROM order_manager WHERE order_id=$id";
    $query_run1=mysqli_query($con,$query1);
    $query_run2=mysqli_query($con,$query2);

    if($query_run1)
    {
        echo "
        <script>
        alert('Order Confirm');
        window.location.href='cart_manage.php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
        alert('Failed to confirm');
        window.location.href='cart_manage.php';
        </script>
        ";
    }


  }

  ?>