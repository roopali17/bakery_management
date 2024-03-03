<?php
include("connection.php");
session_start();
if(isset($_POST['user_delete']))
{
     $user_id = $_POST['user_delete'];
     $query = "DELETE FROM `customer_information` WHERE customer_id='$user_id'";
     $query_run = mysqli_query($conn, $query);
     if($query_run)
     {
        $_SESSION['message'] = "Deleted Successfully!";
        header('Location:view-register-users.php');
        exit(0);
     }
     else
     {
        $_SESSION['message'] = "Something went wrong";
        header('Location:view-register-users.php');
        exit(0);
     }
}
?>