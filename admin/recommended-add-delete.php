<?php
include("connection.php");
session_start();
if(isset($_POST['add_recommended_products']))
{
    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $query = "INSERT INTO `recommended_products`(`name`, `price`, `photopath`) VALUES ('$name','$price','$image')";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        move_uploaded_file($_FILES['_image']['tmp_name'],"$image");
        $_SESSION['message'] = "Item-added successfully!";
        header('Location: view-recommended_products.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location:view-recommended_products.php');
        exit(0);
    }
}
if(isset($_POST['recommended_products_delete']))
{
       $recommended_products_id = $_POST['recommended_products_delete'];
       $query = "DELETE FROM recommended_products WHERE id = '$recommended_products_id'";
       $query_run = mysqli_query($conn, $query);
       if($query_run)
    {
        $_SESSION['message'] = "Product Deleted Successfully!";
       header('Location: view-recommended_products.php');
       exit(0);
    }
}
?>
