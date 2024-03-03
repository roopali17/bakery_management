<?php
include("connection.php");
if(isset($_POST['submit']))
{
    $full_name = $_POST['f_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $user_email = "SELECT * FROM customer_information WHERE customer_email = '$email'";
    $rr = mysqli_query($conn, $user_email);
    if($rr)
    {
        if(mysqli_num_rows($rr)>0)
        {
            $result_fetch = mysqli_fetch_assoc($rr);
            if($result_fetch['customer_email']==$email)
            {
                echo"
                  <script>alert('$result_fetch[customer_email] - Email is already registered');
                  window.location.href= 'signup.php';
                </script>
                ";
            }
        }
        else
        {
            $query = "INSERT INTO `customer_information`(`customer_name`, `customer_email`, `phone`, `customer_address`, `password`) VALUES ('$full_name', '$email', '$phone', '$address', '$password')";
            $result = mysqli_query($conn,$query);
            if($result)
            {
                
                echo"
                <script>alert('inserted');
                window.location.href= 'name.php';
                </script>
                ";
               
            }
            else
            {
                echo"
                <script>alert('cannot insert data');
                </script>
                ";
            }
        }
    }
}
?>