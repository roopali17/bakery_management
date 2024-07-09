<?php
include("connection.php");
include("admin_page.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queen's Bakery</title>
    <link rel="stylesheet" href="Admin-edit.css">
    <script>
        function validateForm() {
    var name = document.forms["myForm"]["_name"].value;
    var email = document.forms["myForm"]["_email"].value;
    var password = document.forms["myForm"]["_password"].value;

    if (name.match(/^[A-Za-z\s]+$/)) {
        // Name is valid
    } else {
        alert("Name must only have upper and small case letters.");
        return false;
    }
    if(email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
    {

    }
    else{
        alert("enter valid email");
        return false;
    }

    if (password.match(/^\d+$/)) {
        // Password is valid
    } else {
        alert("Password must contain only positive numbers.");
        return false;
    }

    // All fields are valid
    return true;
}
        </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>Update Admin</h1>
        </div>
        <?php
        if(isset($_GET['id']))
        {
            $user_id = $_GET['id'];
            $users = "SELECT * FROM admin WHERE admin_id = '$user_id'";
            $user_run = mysqli_query($conn, $users);
            if(mysqli_num_rows($user_run) > 0)
            {
                foreach($user_run as $user)
                {

                    ?>
              <form action="code-admin.php" method="POST" name="myForm" onsubmit="return validateForm()">
            <input type="hidden" name="user_id" value="<?=$user['admin_id'];?>">
            <div class="card-body">
                <div class="row2">
                    <label for="name">Name:</label>
                    <input type="text" name="_name" value="<?=$user['admin_name'];?>" id="name" class="form-control" required>
                </div>
                <div class="row3">
                    <label for="email">Email:</label>
                    <input type="email" name="_email" value="<?=$user['admin_email'];?>" id="email" class="form-control" required>
                </div>
                <div class="row4">
                    <label for="password">Password:</label>
                    <input type="text" name="_password" value="<?=$user['admin_password'];?>" id="password" class="form-control" required>
                </div>
                <div class="row5">
                    <button type="submit" name = "update_user" class="btn">Update</button>
                </div>
                </div>
    </form>
    <?php
                }
            }
            else
            {
                ?>
                <h4>No Record Found</h4>
                <?php
            }
        }
        ?>
</body>

</html>