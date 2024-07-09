<?php
include("connection.php");
include("admin_page.php");
//session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queen's Bakery</title>
    <link rel="stylesheet" href="Admin-edit.css">
    <script src="form-add-items.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Add Recommended Products</h1>
        </div>
        <form action="add-delete-recommended-products.php" method="POST" enctype="multipart/form-data"  name="myForm" onsubmit="return validateForm()">
            <div class="card-body">
                <div class="row2">
                    <label for="name">Name:</label>
                    <input type="text" name="_name" id="name" class="form-control" required >
                </div>
                <div class="row3">
                    <label for="price">Price:</label>
                    <input type="text" name="_price" id="price" class="form-control" required>
                </div>
                <div class="row4">
                    <label for="image">Image:</label>
                    <input type="file" name="_image"  id="image" class="form-control" required>
                </div>
                <div class="row5">
                    <button type="submit" name = "add_recommended-products" class="btn">Add</button>
                </div>
                </div>
    </form>
</body>
</html>   