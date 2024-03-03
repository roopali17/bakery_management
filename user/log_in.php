<?php
session_start();
include("connection.php");
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['passward'];
    $query = "SELECT * FROM customer_information where customer_email = '$email' && password = '$password'";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total == 1)
    {
        $row = mysqli_fetch_assoc($data);
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $row['customer_name'];
        echo "<script>alert('welcome')
        window.location.href = 'name.php';
        </script>";
        exit();
    }
    else
    {
        echo "<script>alert('Wrong email or password');
           window.location.href = 'login.php';
        </script>";
    }
}
?>