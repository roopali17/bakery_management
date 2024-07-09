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
    <link rel="stylesheet" href="admin_page.css">
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
</body>
</html>