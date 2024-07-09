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
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="view-register-users.css">
    <title>Queen's Bakery</title>
</head>

<body>
    <div class="container">
        <?php
        include('message.php');
        ?>
        <div class="row">
            <h1>Registered Users Details</h1>
        </div>
        <div class="tab">
            <table>
                <thead>
                    <tr>
                        <!-- <th>Id</th> -->
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Password</th>
                        <!-- <th>Edit</th> -->
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM customer_information";
                    $query_run = mysqli_query($conn, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                    ?>
                            <tr>
                                <!-- <td><?= $row['customer_id']; ?></td> -->
                                <td><?= $row['customer_name']; ?></td>
                                <td><?= $row['customer_email']; ?></td>
                                <td><?= $row['phone']; ?></td>
                                <td><?= $row['customer_address']; ?></td>
                                <td><?= $row['password']; ?></td>
                                <!-- <td><a href="register-edit.php?id=<?=$row['customer_id'];?>" class="btn">Edit</a></td> -->
                                <td>
                                    <form action="code-delete-users.php" method="POST">
                                    <button type="submit" name="user_delete" value="<?=$row['customer_id'];?>" class="btn">Delete
                                    </button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="7">No Record Found</td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>