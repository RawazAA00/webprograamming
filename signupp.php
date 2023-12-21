
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FitnessHub</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<script src="https://cdn.tailwindcss.com"></script>
    <script src="signup.js"></script>

</head>
<body>
    <header class="head1">
		<nav>
			<img src="logo.png" alt="" class="logo">
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="shop.php">Shop</a></li>
                <li><a href="cart.php">Cart</a></li>	
				<li><a href="contact.php">Contact</a></li>	
				<li><a href="loginn.php">Log in</a></li>	
			</ul>
		</nav>
	</header>
    <div class="bg-img">
        <div class="content">
           <header>Sign Up</header>
           <form name="signupForm" action="signup.php" method="post" onsubmit="return validateForm()">
                <div class="field space">
                    <span class="fa fa-user"></span>
                    <input type="text" name="username" placeholder="Username">
                    <div id="usernameError" class="error-message"></div>
                </div>
                <div class="field space">
                    <span class="fa fa-user"></span>
                    <input type="text" name="email" placeholder="Email">
                    <div id="emailError" class="error-message"></div>
                </div>
                <div class="field space">
                    <span class="fa fa-user"></span>
                    <input type="text" name="phone" placeholder="Phone">
                    <div id="phoneError" class="error-message"></div>
                </div>
                <div class="field space">
                    <span class="fa fa-user"></span>
                    <input type="password" name="password" class="pass-key" placeholder="Password">
                    <div id="passwordError" class="error-message"></div>
                </div>
                <div class="field space">
                    <span class="fa fa-user"></span>
                    <input type="password" name="confirm_password" class="pass-key" placeholder="Confirm Password">
                    <div id="confirmPasswordError" class="error-message"></div>
                </div>
                <div class="field space">
                    <input type="submit" value="SIGN UP">
                </div>
            
            
           </form>
           <div class="signup">
              Already have an account?
              <a href="login.html">Log in</a>
           </div>
        </div>
     </div>
     <?php include 'footer.php';?>

</body>

<script>
    function validateForm() {
        // Retrieve form data
        var username = document.forms["signupForm"]["username"].value;
        var email = document.forms["signupForm"]["email"].value;
        var phone = document.forms["signupForm"]["phone"].value;
        var password = document.forms["signupForm"]["password"].value;
        var confirmPassword = document.forms["signupForm"]["confirm_password"].value;

        // Initialize an error variable to track validation errors
        var errors = false;

        // Perform validation and display error messages
        if (username.length < 4) {
            displayError("usernameError", "Username must be at least 4 characters long.");
            errors = true;
        } else {
            hideError("usernameError");
        }

        // Validate email format using a regular expression
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            displayError("emailError", "Invalid email format.");
            errors = true;
        } else {
            hideError("emailError");
        }

        // Validate phone number
        var phoneRegex = /^\d{11}$/;
        if (!phoneRegex.test(phone)) {
            displayError("phoneError", "Phone number must be 11 digits.");
            errors = true;
        } else {
            hideError("phoneError");
        }

        if (password.length < 8) {
            displayError("passwordError", "Password must be at least 8 characters long.");
            errors = true;
        } else {
            hideError("passwordError");
        }

        if (password !== confirmPassword) {
            displayError("confirmPasswordError", "Password and Confirm Password must match.");
            errors = true;
        } else {
            hideError("confirmPasswordError");
        }

        // If there are errors, prevent form submission
        if (errors) {
            return false;
        }

        
    }

    // Function to display error message
    function displayError(elementId, message) {
        var errorElement = document.getElementById(elementId);
        if (errorElement) {
            errorElement.innerHTML = message;
            errorElement.style.display = "block";
        }
    }

    // Function to hide error message
    function hideError(elementId) {
        var errorElement = document.getElementById(elementId);
        if (errorElement) {
            errorElement.innerHTML = "";
            errorElement.style.display = "none";
        }
    }
</script>



    
    
</html>

