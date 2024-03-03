<?php
include("connection.php");
include("admin_page.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="view-register-users.css">
    <link rel="stylesheet" href="order-table.css">
    <title>Queen's Bakery</title>
</head>

<body>
    <div class="container">
        <?php
        include('message.php');
        ?>
        <div class="row">
            <h1>Orders Details</h1>
        </div>
        <div class="tab">
            <table>
                <thead>
                    <tr>
                        <!-- <th>Id</th> -->
                       
                        <th>Customer Name</th>
                        <th>Phone No</th>
                        <th>Address</th>
                        <!-- <th>Edit</th> -->
                        <th>Orders</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       $query="SELECT * FROM `order_manager`";
                       $user_result = mysqli_query($conn,$query);
                       while($user_fetch=mysqli_fetch_assoc($user_result))
                       {
                        echo "
                        <tr>
                        
                    <td>$user_fetch[Full_name]</td>
                    <td>$user_fetch[Phone_no]</td>
                     <td>$user_fetch[Address]</td>
                     <td>
                     <table  class='order-table'>
                     <thead>
                     <tr>
                         <th>Item Name</th>
                         <th>Quantity</th>
                         <th>Price</th>
                     </tr>
                 </thead>
                 <tbody>
                 ";
                 $order_query = "SELECT * FROM `user_orders` WHERE `Order_id`=$user_fetch[Order_id]";
                 $order_result = mysqli_query($conn,$order_query);
                 while($order_fetch=mysqli_fetch_assoc($order_result))
                 {
                    echo "
                    <tr>
                    <td>$order_fetch[Item_Name]</td>
                    <td>$order_fetch[Quantity]</td>
                    <td>$order_fetch[Price]</td>
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
</body>
</html>