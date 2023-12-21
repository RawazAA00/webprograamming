<script>
function validateForm() {
    // Retrieve form data
    var username = document.forms["signupForm"]["username"].value;
    var email = document.forms["signupForm"]["email"].value;
    var phone = document.forms["signupForm"]["phone"].value;
    var password = document.forms["signupForm"]["password"].value;
    var confirmPassword = document.forms["signupForm"]["confirm_password"].value;

    // Perform validation
    if (username.length < 4) {
        alert("Username must be at least 4 characters long.");
        return false;
    }

    // Validate email format using a regular expression
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Invalid email format.");
        return false;
    }

    if (phone.length < 1) {
        alert("Phone is required.");
        return false;
    }

    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Password and Confirm Password must match.");
        return false;
    }

    // If all validations pass, return true to allow form submission
    return true;
}
</script>
