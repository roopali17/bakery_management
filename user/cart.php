<?php
include("connection.php");
session_start();
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
    <title>Queen's Bakery</title>
    <link rel="stylesheet" href="cart.css">
    
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
                if (isset($_SESSION['cart'])) {
                    $count = count($_SESSION['cart']);
                }
                ?>
                <li><a href="cart.php">My Cart  (<?php echo $count;?>)</a></li>
                <?php
                  if(!isset($_SESSION['name']))
                  {
                    echo '<li><a href="login.php">login</a></li>';
                }
                else{
                   echo  '<li><a href="name.php">My account</a></li>';
                }
                ?>
            </ul>
        </nav>
        <a href="index.php" target="_blank"><img src="/bakery_management/images/Add a heading (2).png" alt="" class="image1"></a>
    </header>
    <div class="container">
        <div class="row">
            <h1>MY CART</h1>
        </div>
        <div class="tab">
            <table>
                <tr>
                    <th>S.no</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                </tr>
                <?php
                if (isset($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $row) {
                        $sr=$key+1;
                    // $result= print_r($row);
                    // echo $result;

                        echo "
                    <tr>
                       <td>$sr</td>
                       <td>$row[Item_Name]</td>
                       <td>$row[Price]<input type='hidden' class='iprice' value='$row[Price]'></td>
                       <td>
                       <form action='manage_cart.php' method='POST'>
                       <input type='number' class='iquantity' name='Mod_Quantity' onchange='this.form.submit();' value='$row[Quantity]' min='1' max='10'>
                       <input type='hidden' name='Item_Name' value='$row[Item_Name]'>
                       </form>
                       </td>
                       <td class='itotal'></td>
                       <form action='manage_cart.php' method='POST'>
                       <td><button name='Remove_Item' class='btn'>Remove</button></td>
                       <input type='hidden' name='Item_Name' value='$row[Item_Name]'>
                       </form>
                       </tr>
                       ";
                    }
                }
                ?>
            </table>
        </div>
        <div class="total">
        <div class="form">
            <?php
              if(isset($_SESSION['cart']) && $_SESSION['cart'])
              {

            ?>
            <script type="text/javascript" src="check.js"></script>
            <form action="purchase.php"  method="POST" name="myForm1" onsubmit="return validateForm1()">
                <div class="container1">
                    <label for="full_name">Full Name:
                        <input type="text" name="fname" id="full_name" placeholder="Enter full name" required>
                    </label>
                </div>
                <div class="container3">
                    <label for="p_no">Phone no:
                        <input type="tel" name="_phone" id="p_no" placeholder="Phone number" required>
                    </label>
                </div>
                <div class="container4">
                    <label for="address">Address:
                        <input type="text" name="_address" id="address" placeholder="Address" required>
                    </label>
                </div>
                <button type="submit" class="btn1" name="purchase">Order</button>
            </form>
            <?php
            }
            ?>
       <h2>Grand Total:</h2>
            <h3></h3>
            
            <?php
            if (isset($_SESSION['cart']) && ($_SESSION['cart']) > 0) {
            ?>
            </div>
            
                <h3 id="gtotal"></h3>
                <p>Cash on delievery</p>
                <?php
              if(isset($_SESSION['cart']) && $_SESSION['cart'])
              {

            ?>
                <?php
                }
                ?>
            <?php
            }
            ?>
        </div>
    </div>
<script>
        var gt=0;
        var iprice=document.getElementsByClassName('iprice');
        var iquantity=document.getElementsByClassName('iquantity');
        var itotal=document.getElementsByClassName('itotal');
        var gtotal=document.getElementById('gtotal');
        function subTotal() {
          var  gt=0;
            for(i=0;i<iprice.length;i++) {
                itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                gt=gt+(iprice[i].value)*(iquantity[i].value);
            }
            gtotal.innerText=gt;
        }
        subTotal();
</script>

</body>
</html>