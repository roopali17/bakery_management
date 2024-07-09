<?php
include("connection.php");
session_start();
if(isset($_POST['add_pastry']))
{
    
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $query = "INSERT INTO `pastry`(`name`, `price`, `photopath`) VALUES ('$name','$price','$image')";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        move_uploaded_file($_FILES['_image']['tmp_name'],"$image");
        $_SESSION['message'] = "Item-added successfully!";
        header('Location: view-pastry.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Something went wrong";
        header('Location:view-pastry.php');
        exit(0);
    }
}
if(isset($_POST['pastry_delete']))
{
       $pastry_id = $_POST['pastry_delete'];
       $query = "DELETE FROM pastry WHERE id = '$pastry_id'";
       $query_run = mysqli_query($conn, $query);
       if($query_run)
    {
        $_SESSION['message'] = "Product Deleted Successfully!";
       header('Location: view-pastry.php');
       exit(0);
    }
}
?>
