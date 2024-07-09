<?php
include("connection.php");
session_start();
if(isset($_POST['add_cake']))
{
    
    $name = $_POST['_name'];
    $price = $_POST['_price'];
    $image = $_FILES['_image']['name'];
    $query = "INSERT INTO `cake`(`name`, `price`, `photopath`) VALUES ('$name','$price','$image')";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        move_uploaded_file($_FILES['_image']['tmp_name'],"$image");
        $_SESSION['message'] = "Item-added successfully!";
        header('Location: view-cake.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location:view-cake.php');
        exit(0);
    }
}
if(isset($_POST['cake_delete']))
{
       $cake_id = $_POST['cake_delete'];
       $query = "DELETE FROM cake WHERE id = '$cake_id'";
       $query_run = mysqli_query($conn, $query);
       if($query_run)
    {
        $_SESSION['message'] = "Product Deleted Successfully!";
       header('Location: view-cake.php');
       exit(0);
    }
}
?>