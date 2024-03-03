<?php
session_start();
include("connection.php");
if(!isset($_SESSION['name']))
{
    echo "You are logged out";
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="name.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <?php
                  $count = 0;
                  if(isset($_SESSION['cart']))
                  {
                    $count = count($_SESSION['cart']);
                  }
                  ?>
                <li><a href="cart.php">My Cart (<?php echo $count;?>)</a></li>
                <?php
                  if(!isset($_SESSION['name']))
                  {
                    echo '<li><a href="login.php">Login</a></li>';
                }
                else{
                   echo  '<li><a href="name.php">My account</a></li>';
                }
                ?>
            </ul>
        </nav>
        <a href="index.php" target="_blank"><img src="/bakery_management/images/Add a heading (2).png" alt="" class="image1"></a>
    </header>
    <div class="main_container">
      <div class="container1">
          <h3>My Account</h3>
          <br>
          <?php
// session_start();
include("connection.php");
$usertable = $_SESSION['email'];
if($usertable == true)
{

}else{
    header("location:login.php");
}
$query = "SELECT * FROM customer_information WHERE customer_email = '$usertable'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
if($total !=0)
{
    while($row = mysqli_fetch_assoc($data))
    {
        echo "
        <ul>
        
            <li><h2>Name:     " .    $row['customer_name']   .     "</h2></li>
            <br>
            <li><h2>Email:        " .    $row['customer_email']    .     "</h2></li>
            <br>
            <li><h2>Phone No.:     " .     $row['phone']   .             "</h2></li>
            <br>
            <li><h2>Address:  " .$row['customer_address'] . "</h2></li>
            <br>
            <li><h2>Password:  " .$row['password'] . "</h2></li>
            
            </ul>
            ";
    }
}
?>
  <form action="logout-user.php">
   <button type="submit">Log Out</button>
  </form>
      </div>
    </div>

</body>
</html>