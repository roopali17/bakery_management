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
    <title>Muffins</title>
    <link rel="stylesheet" href="cake.css">
    <link rel="stylesheet" href="main_page.css">
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
        <div class="container2">
        <?php
        $query = "SELECT * FROM muffins";
        $query_run = mysqli_query($conn, $query);
        $check_product = mysqli_num_rows($query_run) > 0;
        if ($check_product) {
            while ($row = mysqli_fetch_array($query_run)) {
                ?>
                <form action="manage_cart.php" method="POST">
                    <div class="image3">
                       <?php echo '<img src="/bakery_management/admin/'.($row['photopath']).'" alt="">';?>
                        <p class="name"><?php echo $row['name']; ?></p>
                        <p class="price">Rs.<?php echo $row['price']; ?></p>
                        <button type="submit" name="Add_To_Cart" class="btn">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="<?php echo $row['name'];?>">
                        <input type="hidden" name="Price" value="<?php echo $row['price'];?>">
                    </div>
                </form>
                
                <?php
            }
        } else {
            echo "No item found";
        }
        ?>
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
                and we are always ready to make innovative designs suggested by our clients...<a href="about.php">Read
                    more</a>
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