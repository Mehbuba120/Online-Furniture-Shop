<?php 
session_start();
//session_destroy();

 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //cart items are stored in a session
    if(isset($_POST['add']))
       {
        if(isset($_SESSION['cart']))
        {
            $item=array_column($_SESSION['cart'],'iteam_name');
            if(in_array($_POST['iteam_name'],$item))
            {
                echo "
                <script>
                alert('Item already adde');
                window.location.href='Products.php';
                </script>
                ";
            }
            else
            {
              
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('iteam_id'=>$_POST['iteam_id'],'iteam_name'=>$_POST['iteam_name'],'iteam_price'=>$_POST['iteam_price'],'Quantity'=>1);
            echo "
            <script>
            alert('Item added');
            window.location.href='Products.php';
            </script>
            ";
            }



        }
        else
        {
            $_SESSION['cart'][0]=array('iteam_id'=>$_POST['iteam_id'],'iteam_name'=>$_POST['iteam_name'],'iteam_price'=>$_POST['iteam_price'],'Quantity'=>1);
            echo "
                <script>
                alert('Item added');
                window.location.href='Products.php';
                </script>
                ";
        }
    }
    if(isset($_POST['remove']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['iteam_name']==$_POST['iteam_name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "
                <script>
                alert('Item Removed');
                window.location.href='mycart.php';
                </script>
                ";
            }
        }

    }
    if(isset($_POST['mod_quantity']))
    {
        foreach($_SESSION['cart'] as $key=> $value)
        {
            if($value['iteam_name']==$_POST['iteam_name'])
            {
                $_SESSION['cart'][$key]['Quantity']=$_POST['mod_quantity'];
               
                echo "
                <script>
            
                window.location.href='mycart.php';
                </script>
                ";
            }
        }
    }
}



?>