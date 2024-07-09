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
    <link rel="stylesheet" href="view-cake.css">
    <title>Queen's Bakery</title>
</head>

<body>
    <div class="container">
    <?php
        include('message.php');
        ?>
        <div class="row">
            <h1>Donuts</h1>
        </div>
        <div class="add">
        <a href="add-donuts.php">Add item</a>
        </div>
        <div class="tab">
            <table>
                <thead>
                    <tr>
                        <!-- <th>Id</th> -->
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <!-- <th>Edit</th>-->
                        <th>Delete</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM donuts";
                    $query_run = mysqli_query($conn, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                        foreach ($query_run as $row) {
                    ?>
                            <tr class="data">
                                <!-- <td><?= $row['id']; ?></td> -->
                                <td><?= $row['name']; ?></td>
                                <td>Rs.<?= $row['price']; ?></td>
                                <td><?php echo '<img src=" '.($row['photopath']).'" alt="picture">';?>
                                 </td>
                                <!-- <td><a href="register-edit.php?id=<?=$row['customer_id'];?>" class="btn">Edit</a></td> -->
                                <td>
                                    <form action="add-delete-donuts.php" method="POST">
                                    <button type="submit" name="donuts_delete" value="<?=$row['id'];?>" class="btn">Delete
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