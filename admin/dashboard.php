<?php
session_start();
include("connection.php");
if(!isset($_SESSION['name']))
{
   header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <title>Queen's Bakery</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="product.php">Menu</a></li>
                <li><a href="logout-admin.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2><center>Welcome   <?php echo   $_SESSION['name']; ?></center></h2>
        <div class="boxa">
            <div class="box1">
          <h4>Total Admin</h4>
          <?php
            $query = "SELECT admin_id FROM `admin` ORDER BY admin_id ";
            $query_run = mysqli_query($conn, $query);
            $row= mysqli_num_rows($query_run);
            echo '<h4>'.$row.'</h4>';
          ?>
          <div class="link">
            <a href="view-admin.php">View details</a>
        </div>
            </div>
            <div class="box1">
                <h4>Total Users</h4>
                <?php
            $query = "SELECT customer_id FROM `customer_information` ORDER BY customer_id ";
            $query_run = mysqli_query($conn, $query);
            $row= mysqli_num_rows($query_run);
            echo '<h4>'.$row.'</h4>';
          ?>
                <div class="link"><a href="view-register-users.php">View details</a></div>
            </div>
            <div class="box1">
                <h4>Total Orders</h4>
                <?php
            $query = "SELECT Order_id FROM `order_manager` ORDER BY Order_id ";
            $query_run = mysqli_query($conn, $query);
            $row= mysqli_num_rows($query_run);
            echo '<h4>'.$row.'</h4>';
          ?>
                <div class="link"><a href="view-orders.php">View details</a></div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
