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
    <link rel="stylesheet" href="product.css">
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
        <div class="boxa">
            <div class="box1">
          <h4>Cakes</h4>
          <?php
            $query = "SELECT id FROM `cake` ORDER BY id ";
            $query_run = mysqli_query($conn, $query);
            $row= mysqli_num_rows($query_run);
            echo '<h4>'.$row.'</h4>';
          ?>
          <div class="link"><a href="view-cake.php">View details</a></div>
            </div>
            <div class="box1">
                <h4>Pastry</h4>
                <?php
            $query = "SELECT id FROM `pastry` ORDER BY id ";
            $query_run = mysqli_query($conn, $query);
            $row= mysqli_num_rows($query_run);
            echo '<h4>'.$row.'</h4>';
          ?>
                <div class="link"><a href="view-pastry.php">View details</a></div>
            </div>
            <div class="box1">
                <h4>Muffins</h4>
                <?php
            $query = "SELECT id FROM `muffins` ORDER BY id ";
            $query_run = mysqli_query($conn, $query);
            $row= mysqli_num_rows($query_run);
            echo '<h4>'.$row.'</h4>';
          ?>
                <div class="link"><a href="view-muffins.php">View details</a></div>
            </div>
            <div class="box1">
                <h4>Donuts</h4>
                <?php
            $query = "SELECT id FROM `donuts` ORDER BY id ";
            $query_run = mysqli_query($conn, $query);
            $row= mysqli_num_rows($query_run);
            echo '<h4>'.$row.'</h4>';
          ?>
                <div class="link"><a href="view-donuts.php">View details</a></div>
            </div>
            <div class="box1">
                <h4>Bakery Products</h4>
                <?php
            $query = "SELECT id FROM `bakery_products` ORDER BY id ";
            $query_run = mysqli_query($conn, $query);
            $row= mysqli_num_rows($query_run);
            echo '<h4>'.$row.'</h4>';
          ?>
                <div class="link"><a href="view-bakery-products.php">View details</a></div>
            </div>
            <div class="box1">
                <h4>Recommended</h4>
                <?php
            $query = "SELECT id FROM `recommended_products` ORDER BY id ";
            $query_run = mysqli_query($conn, $query);
            $row= mysqli_num_rows($query_run);
            echo '<h4>'.$row.'</h4>';
          ?>
                <div class="link"><a href="view-recommended-products.php">View details</a></div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>