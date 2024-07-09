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
            var price = document.forms["myForm"]["_price"].value;
            if (name.match(/^[0-9a-zA-Z\s]+$/)) {
                // name is valid
            } else {
                alert("Name should contain only upper and lower case letters.");
                return false;
            }
            if (price.match(/^\d+$/)) {
                // Priceis valid
            } else {
                alert("price must contain only positive numbers.");
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
            <h1>Add Muffins</h1>
        </div>
        <form action="add-delete-muffins.php" method="POST" enctype="multipart/form-data"  name="myForm" onsubmit="return validateForm()">
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
                    <button type="submit" name = "add_muffins" class="btn">Add</button>
                </div>
                </div>
    </form>
</body>
</html>   