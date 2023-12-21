<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product = $_POST['product'];

    // Initialize the cart array if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Add the selected product to the cart array
    $_SESSION['cart'][] = $product;
    
}

// Redirect back to the previous page
header("Location: shop.php");
exit();
?>
