<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menu.css">
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
    <main>
        <div class="container1">
            <div class="menu" id="cakes">
         <img src="/bakery_management/images/happy-birthday-cake-free-vector.jpg" alt="">
         <p><a href="cake.php">Cakes</a></p>
            </div>
            <div class="menu" id="pastry">
     <img src="/bakery_management/images/istockphoto-902866598-170667a.jpg" alt="">
     <p><a href="pastries.php">Pastries</a></p>
            </div>
            <div class="menu" id="muffins">
              <img src="/bakery_management/images/depositphotos_81030902-stock-illustration-cupcake-sketchy-colored-vector-icon.jpg" alt="">
              <p><a href="muffins.php">Muffins</a></p>
            </div>
            <div class="menu" id="donuts">
          <img src="/bakery_management/images/doughnut-icon-25.jpg" alt="">
          <p><a href="donuts.php">Donuts</a></p>
            </div>
            <div class="menu" id="bakery_products">
        <img src="/bakery_management/images/chocolate-chip-cookie-cartoon-style-vector-illustration-chocolate-chip-cookie-cartoon-style-vector-illustration-216640805.jpg" alt="">
        <p><a href="Bakery_products.php">Bakery Products</a></p>
            </div>
        </div>
    </main>
    <div class="container3">
        <div class="logo">
        <img src="/bakery_management/images/newlogo.png" alt="">
    </div>
        <div class="about">
            <h4>Queen's Bakery</h4>
            <p>Queen's Bakery brings you the best in the world of baking with a gourmet twist. We are churning out
                innovative flavoured and immaculately designed cakes, cupcakes, cookies, breakfast pastries, brownies
                and bars using freshest and finest ingredients. We are going great with our contemporary range of
                Italian, Continental, Lebanese, Chinese and Indian snacks and meals. Custom-designed cakes are our forte
                and we are always ready to make innovative designs suggested by our clients...<a href="about.php">Read more</a>
            </p>
        </div>
        <div class="about1">
            <h4>Services</h4>
            <ul>
                <li><a href="about.php">About us</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
        </div>
        <div class="about1">
            <h4>For users</h4>
            <ul>
                <li><a href="login.php">User Login</a></li>
                <li><a href="signup.php">User Register</a></li>
            </ul>
        </div>
        <div class="about1">
            <h4>More Pages</h4>
            <ul>
                <li><a href="index.php#one">Recommanded</a></li>
                <li><a href="menu.php">Menu</a></li>
            </ul>
        </div>
    </div>
    <footer>
        <p>Copyright 2022<b> Queen's Bakery</b> All Right Reserved.</p>
    </footer>
</body>
</html>