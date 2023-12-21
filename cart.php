<?php
session_start();
$apiKey = '146aa96e613e6d5e20b5b81e751c8b12';
$city = 'Baghdad'; // Replace with your city

// Fetch weather data from OpenWeatherMap API
$weatherData = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey"));
// Function to get product information based on its name
function getProductInfo($productName) {
    // Replace the following with your actual logic to fetch product information from your data source
    $productData = [
        'Crop Top' => ['price' => '$25', 'image' => 'pics\croptop.webp'],
        'Legging' => ['price' => '$60', 'image' => 'pics\Joggers.webp'],
        'Hoodie' => ['price' => '$55', 'image' => 'pics\hoodie.webp'],
        'Stringer' => ['price' => '$30', 'image' => 'pics\stringer.webp'],
        'Short' => ['price' => '$50', 'image' => 'pics\short.webp'],
        'Jacket' => ['price' => '$15', 'image' => 'pics\jacket.webp'],
    ];

    // Check if the product exists in the data
    if (isset($productData[$productName])) {
        return [
            'name' => $productName,
            'price' => $productData[$productName]['price'],
            'image' => $productData[$productName]['image'],
        ];
    } 
}

// Check if the cart array exists
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    // Handle remove button click
    if (isset($_POST['remove'])) {
        $removeItem = $_POST['remove'];
        // Find the index of the item to remove
        $index = array_search($removeItem, $_SESSION['cart']);
        // Remove the item from the cart array
        if ($index !== false) {
            unset($_SESSION['cart'][$index]);
        }
    }

    // Calculate total
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $productInfo = getProductInfo($item);
        $total += str_replace('$', '', $productInfo['price']); // Remove $ and sum up prices
    }
    
    echo '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>FitnessHub</title>
            <link rel="stylesheet" type="text/css" href="home.css">
            <script src="https://cdn.tailwindcss.com"></script>
            <style>
                /* Add your modal styles here */
                .modal {
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: rgba(0, 0, 0, 0.5);
                    justify-content: center;
                    align-items: center;
                }

                .modal-content {
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 8px;
                    max-width: 400px;
                    margin: auto;
                }

                .close {
                    cursor: pointer;
                    position: absolute;
                    top: 10px;
                    right: 10px;
                }
            </style>
        </head>
    <body>
        <header id="head1">
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

        <main>
            <div class="mx-auto mt-16 bg-white rounded-lg overflow-hidden w-full lg:w-3/4 xl:w-2/3 2xl:w-1/2 border border-gray-400">
                <div class="px-4 py-2 border-b border-gray-200">
                    <h2 class="font-semibold text-gray-800">Shopping Cart</h2>
                </div>';

    // Display each item in the cart
    foreach ($_SESSION['cart'] as $item) {
        $productInfo = getProductInfo($item);
        echo '
                <form method="post" action="cart.php">
                    <div class="flex items-center py-4 px-6">
                        <img class="w-16 h-16 object-cover rounded" src="' . $productInfo['image'] . '" alt="Product Image">
                        <div class="ml-3">
                            <h3 class="text-gray-900 font-semibold">' . $productInfo['name'] . '</h3>
                            <p class="text-gray-700 mt-1">' . $productInfo['price'] . '</p>
                        </div>
                        <button type="submit" name="remove" value="' . $item . '" class="ml-auto py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">Remove</button>
                    </div>
                </form>';
    }

    echo '
    <div class="flex items-center justify-between px-6 py-3 bg-gray-100">
        <h3 class="text-gray-900 font-semibold">Total: $' . number_format($total, 2) . '</h3>
        <button id="checkoutBtn" class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-lg">Checkout</button>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Enter Credit Card Information</h2>
            <!-- Add your credit card form fields here -->
            <form action="process_payment.php" method="post">
                <!-- Add your credit card form fields here -->
                <label for="cardNumber">Card Number:</label>
                <input type="text" id="cardNumber" name="cardNumber" required>
                <!-- Add other credit card fields (e.g., expiration date, CVV) here -->
                <button type="submit">Submit Payment</button>
            </form>
        </div>
    </div>
        </main>
        '?>
        <div class="mx-auto mt-16 bg-white rounded-lg overflow-hidden w-full lg:w-3/4 xl:w-2/3 2xl:w-1/2 border border-gray-400">
            <div class="px-4 py-2 border-b border-gray-200">
                <h2 class="font-semibold text-gray-800">Weather</h2>
            </div>

            <div class="flex items-center py-4 px-6">
                <?php
                if ($weatherData) {
                    $temperature = round($weatherData->main->temp - 273.15, 1); // Convert temperature from Kelvin to Celsius
                    $description = $weatherData->weather[0]->description;
                    echo '
                        <div class="ml-3">
                            <h3 class="text-gray-900 font-semibold">Current Weather in ' . $city . '</h3>
                            <p class="text-gray-700 mt-1">' . $description . '</p>
                            <p class="text-gray-700 mt-1">Temperature: ' . $temperature . '°C</p>
                        </div>';
                } else {
                    echo '<p>Unable to fetch weather data</p>';
                }
                ?>
            </div>
        </div>
        <?php include 'footer.php';?>

        <?php echo'
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("checkoutBtn");

            // When the user clicks the button, open the modal
            btn.onclick = function() {
                modal.style.display = "flex";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            }

            // Close the modal
            function closeModal() {
                modal.style.display = "none";
            }
        </script>
    </body>
    </html>';
} else {
    echo "<p>Your shopping cart is empty.</p>";
}
?>
