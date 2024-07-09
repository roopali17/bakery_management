<?php
include("connection.php");
session_start();
if(isset($_POST['add_donut']))
{
    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $query = "INSERT INTO `cake`(`name`, `price`, `photopath`) VALUES ('$name','$price','$image')";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        move_uploaded_file($_FILES['_image']['tmp_name'],"$image");
        $_SESSION['message'] = "Item-added successfully!";
        header('Location: view-donut.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location:view-donut.php');
        exit(0);
    }
}
if(isset($_POST['donut_delete']))
{
       $donut_id = $_POST['donut_delete'];
       $query = "DELETE FROM cake WHERE id = '$donut_id'";
       $query_run = mysqli_query($conn, $query);
       if($query_run)
    {
        $_SESSION['message'] = "Product Deleted Successfully!";
       header('Location: view-donut.php');
       exit(0);
    }
}
?>
