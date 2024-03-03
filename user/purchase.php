<?php
include("connection.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
      $name=  $_POST['fname'];
      $phone =  $_POST['_phone'];
      $address=  $_POST['_address'];
          $query = "INSERT INTO `order_manager`(`Full_name`, `Phone_no`, `Address`) VALUES ('$name','$phone','$address')";
          $result = mysqli_query($conn,$query);
          if($result)
          {
            $Order_id=mysqli_insert_id($conn);
           $query2="INSERT INTO `user_orders`(`Order_id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
           $stmt=mysqli_prepare($conn,$query2);
           if($stmt)
           {
              mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Item_Name,$Price,$Quantity);
              foreach($_SESSION['cart'] as $key => $values)   
              {
                $Item_Name = $values['Item_Name'];
                $Price = $values['Price'];
                $Quantity = $values['Quantity'];
                mysqli_stmt_execute($stmt);
              }
              unset($_SESSION['cart']);
              echo"<script>
            alert('Order placed');
            window.location.href = 'name.php';
            </script>";
           }
           else{
            echo"<script>
            alert('SQL query error');
            window.location.href = 'cart.php';
            </script>";
           }
          }
          else{
            echo"<script>
            alert('SQL error');
            window.location.href = 'cart.php';
            </script>";
          }
    }
}
?>