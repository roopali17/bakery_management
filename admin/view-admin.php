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
    <!-- <link rel="stylesheet" href="dashboard.css"> -->
    <link rel="stylesheet" href="view-admin.css">
    <title>Queen's Bakery</title>
</head>

<body>
    <div class="container">
    <?php
        include('message.php');
        ?>
        <div class="row">
            <h1>Admin Details</h1>
        </div>
        <div class="add-admin">
        <a href="register-admin.php">Add admin</a>
        </div>
        <div class="tab">
            <table>
                <thead>
                    <tr>
                        <!-- <th>Id</th> -->
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM admin";
                    $query_run = mysqli_query($conn, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                    ?>
                            <tr>
                                <!-- <td><?= $row['admin_id']; ?></td> -->
                                <td><?= $row['admin_name']; ?></td>
                                <td><?= $row['admin_email']; ?></td>
                                <td><?= $row['admin_password']; ?></td>
                                <td><a href="admin-edit.php?id=<?=$row['admin_id'];?>" class="btn">Edit</a></td>
                                <td>
                                    <form action="code-admin.php" method="POST">
                                    <button type="submit" name="user_delete" value="<?=$row['admin_id'];?>" class="btn">Delete
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