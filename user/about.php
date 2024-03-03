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
    <title>About</title>
    <link rel="stylesheet" href="about.css">
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
        <div class="container">
            <h4>About Queen's Bakery</h4>
        </div>
        <div class="main_container">
            <div class="container1">
                <p>Queen's Bakery brings you the best in the world of baking with a gourmet twist. We are churning out
                    innovative flavoured and immaculately designed cakes, cupcakes, cookies, breakfast pastries,
                    brownies and bars using freshest and finest ingredients. We are going great with our contemporary
                    range of Italian, Continental, Lebanese, Chinese and Indian snacks and meals.</p>
            </div>
            <div class="container2">
                <img src="/bakery_management/images/15-vegan-muffin-recipes-oil-free.jpg" alt="">
            </div>
            <div class="container13">
                <p>Custom-designed cakes are our forte and we are always ready to make innovative designs suggested by
                    our clients. We are blending traditional tiered cakes to one-of-a-kind creations for wedding cakes,
                    birthday cakes, anniversary cakes and other celebratory cakes</p>
            </div>
        </div>
        <div class="main_container2">
            <div class="container14">
                <img src="/bakery_management/images/collage-toc-2.jpg" alt="">
            </div>
            <div class="container15">
                <p>We make special cakes for corporate and business houses, who mostly order Product Launch Cakes,
                    Promotion Party Cakes, work anniversary cakes and designation cakes. Our cake consultants understand
                    customer’s requirement and they work closely with Cake Chefs and customers to provide desired
                    result, we are helping you build your dream cake for any of life’s celebrations and ceremonies.</p>
                <div class="container16">
                    <p>All the baked items are freshly made on daily basis in the premises using the finest ingredients.
                        We cherish all the best things nature offers us to make delicious, flavourful and top quality
                        foods and snacks.</p>
                </div>
                <div class="container17">
                    <p>We keep our consumers health and happiness at the core of our every policy and this has made Queen's Bakery
                    one of the best bakers in central India. Our customers have reposed their faith in
                        us considering the quality, taste and service we provide, which has made us the best cake shop
                        in Jabalpur.</p>
                </div>
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
</body></html>