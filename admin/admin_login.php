<?php
include("connection.php");
session_start();
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `admin` WHERE `admin_email` = '$email' && `admin_password`= '$password' ";
    $result =  mysqli_query($conn, $query);
    $total = mysqli_num_rows($result);
    if($total==1)
    {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['admin_name'];
        echo "<script>alert('Welcome admin');
        window.location.href = 'dashboard.php';
     </script>";
     exit();
    }
    else
    {
        echo "<script>alert('Wrong email or password');
           window.location.href = 'index.php';
        </script>";
    }
}
?>