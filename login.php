<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    // Retrieve user input from the login form
    $inputEmail =$_POST['email'];
    $inputPassword =$_POST['password'];
    
    // Check if the input credentials match the stored ones
    if ($inputEmail == $_SESSION['email'] && $inputPassword == $_SESSION['password']) {
        // Credentials match, redirect to home page
        header('Location: home.php');
        exit();
    } else {
        // Credentials do not match, redirect to signup page
        header('Location: signupp.php');
        exit();
    }
}

?>
