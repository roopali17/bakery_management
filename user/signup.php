<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="signup.css">
    <script>
		function validateForm() {
			var name = document.forms["myForm"]["f_name"].value;
			var email = document.forms["myForm"]["email"].value;
			var phone = document.forms["myForm"]["phone"].value;
			var address = document.forms["myForm"]["address"].value;
			var password = document.forms["myForm"]["password"].value;

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
  

			if (phone.match(/^\d{10}$/)) {
				// Phone number is valid
			} else {
				alert("Phone number should contain only 10 digits.");
				return false;
			}

			if (address.match(/^[0-9a-zA-Z\s]+$/)) {
				// Address is valid
			} else {
				alert("Address should contain only positive digit and upper and lower case letters.");
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
    <div class="nameofshop">
        <h1>QUEEN'S BAKERY</h1>
    </div>
    <div class="main_container">
        <div class="login">
            <h1>SIGN UP</h1>
        </div>
        <div class="form">
            <form action="register.php"  method="POST" name="myForm" onsubmit="return validateForm()">
                <div class="container1">
                    <label for="full_name">Full Name:
                        <input type="text" name="f_name" id="full_name" placeholder="Enter full name" required>
                    </label>
                </div>
                <div class="container2">
                    <label for="e_mail">E-mail:
                        <input type="email" name="email" id="e_mail" placeholder="Email" required>
                    </label>
                </div>
                <div class="container3">
                    <label for="p_no">Phone no:
                        <input type="tel" name="phone" id="p_no" placeholder="Phone number" required>
                    </label>
                </div>
                <div class="container4">
                    <label for="address">Address:
                        <input type="text" name="address" id="address" placeholder="Address" required>
                    </label>
                </div>
                <div class="container5">
                    <label for="Password">Password:
                        <input type="password" name="password" id="Password" placeholder="Password" required>
                    </label>
                </div>
                <div class="container6">
                    <input type="submit" value="Sign up" name="submit" id="btn" class="submit">
                </div>
            </form>
        </div>
    </div>
</body>
</html>