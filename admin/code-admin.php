<?php
include("connection.php");
session_start();
if(isset($_POST['add_user']))
{
   $full_name = $_POST['_name'];
   $email = $_POST['_email'];
   $password = $_POST['_password'];
   $query = "INSERT INTO `admin`(`admin_name`, `admin_email`, `admin_password`) VALUES ('$full_name','$email','$password')";  
   $query_run = mysqli_query($conn,$query);
   if($query_run)
   {
      $_SESSION['message'] = "Added Successfully!";
      header('Location:view-admin.php');
      exit(0);
   }
   else
   {
      $_SESSION['message'] = "Something went wrong!";
      header('Location:view-admin.php');
      exit(0);
   }
}
if(isset($_POST['user_delete']))
{
     $user_id = $_POST['user_delete'];
     $query = "DELETE FROM `admin` WHERE admin_id='$user_id'";
     $query_run = mysqli_query($conn, $query);
     if($query_run)
     {
        $_SESSION['message'] = "Deleted Successfully!";
        header('Location:view-admin.php');
        exit(0);
     }
     else
     {
        $_SESSION['message'] = "Something went wrong";
        header('Location:view-admin.php');
        exit(0);
     }
}
if(isset($_POST['update_user']))
{
    $user_id = $_POST['user_id'];
    $full_name = $_POST['_name'];
    $email = $_POST['_email'];
    $password = $_POST['_password'];
    $query = "UPDATE `admin` SET admin_name='$full_name', admin_email='$email', admin_password='$password' WHERE admin_id='$user_id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
          $_SESSION['message'] = "Updated Successfully!";
          header('Location:view-admin.php');
          exit(0);
    }
}
?>

