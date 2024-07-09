<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>

<body>
    <div class="nameofshop">
        <h1>QUEEN'S BAKERY</h1>
    </div>
    <div class="main_container">
        <div class="login">
            <h2>ADMIN</h2>
        </div>
        <div class="form">
            <form action="admin_login.php" method="POST">
                <div class="container1" id="e_mail">
                    <label for="Email">E-mail:
                        <input type="email" name="email" placeholder="Email" id="Email" required>
                    </label>
                </div>
                <div class="container2" id="password">
                    <label for="Password">Password:
                        <input type="password" name="password" id="Password" placeholder="Password" required>
                    </label>
                </div>
                <div class="container3">
                    <input type="submit" value="Log in" name="login" id="btn">
                </div>
            </form>
        </div>
</body>

</html>