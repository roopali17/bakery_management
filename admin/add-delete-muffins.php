<?php
include("connection.php");
session_start();
if(isset($_POST['add_muffins']))
{
    
    $name = $_POST['_name'];
    $price = $_POST['_price'];
    $image = $_FILES['_image']['name'];
    $query = "INSERT INTO `muffins`(`name`, `price`, `photopath`) VALUES ('$name','$price','$image')";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        move_uploaded_file($_FILES['_image']['tmp_name'],"$image");
        $_SESSION['message'] = "Item-added successfully!";
        header('Location: view-muffins.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location:view-muffins.php');
        exit(0);
    }
}
if(isset($_POST['muffins_delete']))
{
       $muffins_id = $_POST['muffins_delete'];
       $query = "DELETE FROM muffins WHERE id = '$muffins_id'";
       $query_run = mysqli_query($conn, $query);
       if($query_run)
    {
        $_SESSION['message'] = "Product Deleted Successfully!";
       header('Location: view-muffins.php');
       exit(0);
    }
}
?>