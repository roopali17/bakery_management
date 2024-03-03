<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="nameofshop">
        <h1>QUEEN'S BAKERY</h1>
    </div>
    <div class="main_container">
        <div class="login">
            <h2>LOG IN</h2>
        </div>
        <div class="form">
            <form action="log_in.php" method="POST">
                <div class="container">
                    <label for="Email">E-mail:
                        <input type="email" name="email" placeholder="Email" id="Email" required>
                    </label>
                </div>
                <div class="container2">
                    <label for="Password">Password:
                        <input type="password" name="passward" id="Password" placeholder="Password" required>
                    </label>
                </div>
                <div class="container3">
                    <input type="submit" value="Log in" name="login" id="btn">
                </div>
            </form>
            <div class="container4">
                <b>Don't have account?</b>
                <a href="signup.php">Sign up</a>
            </div>
        </div>
    </div>
</body>
</html>