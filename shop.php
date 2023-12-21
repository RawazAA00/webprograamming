<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fitness Website - Classes</title>
	<link rel="stylesheet" type="text/css" href="shop.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include 'header.php';?>

    <main>
        <div class="bg-blue-100">
            <div class="container px-6 py-8 mx-auto">
                <div class="flex flex-col items-center justify-center space-y-8 lg:-mx-4 lg:flex-row lg:items-stretch lg:space-y-0">
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-blue-950 dark:border-gray-700">
                        <form method="post" action="cartphp.php">
                            <input type="hidden" name="product" value="Crop Top">
                            <div>
                                <img src="pics\croptop.webp" alt="">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50 dark:bg-gray-700"> Crop Top</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100">$25</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>
                    <!-- Legging -->
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-blue-950 dark:border-gray-700">
                        <form method="post" action="cartphp.php">
                            <input type="hidden" name="product" value="Legging">
                            <div>
                                <img src="pics\Joggers.webp" alt="">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50 dark:bg-gray-700"> Legging</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100">$60</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>

                    <!-- Hoodie -->
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-blue-950 dark:border-gray-700">
                        <form method="post" action="cartphp.php">
                            <input type="hidden" name="product" value="Hoodie">
                            <div>
                                <img src="pics\hoodie.webp" alt="">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50 dark:bg-gray-700"> Hoodie</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100">$55</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue-100">
            <div class="container px-6 py-8 mx-auto">
                <div class="flex flex-col items-center justify-center space-y-8 lg:-mx-4 lg:flex-row lg:items-stretch lg:space-y-0">
                    <!-- Stringer -->
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-blue-950 dark:border-gray-700">
                        <form method="post" action="cartphp.php">
                            <input type="hidden" name="product" value="Stringer">
                            <div>
                                <img src="pics\stringer.webp" alt="">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50 dark:bg-gray-700"> Stringer</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100">$30</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>

                    <!-- Short -->
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-blue-950 dark:border-gray-700">
                        <form method="post" action="cartphp.php">
                            <input type="hidden" name="product" value="Short">
                            <div>
                                <img src="pics\short.webp" alt="">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50 dark:bg-gray-700"> Short</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100">$50</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>

                    <!-- Jacket -->
                    <div class="flex flex-col w-full max-w-sm p-8 space-y-8 text-center bg-white border-2 border-gray-200 rounded-lg lg:mx-4 dark:bg-blue-950 dark:border-gray-700">
                        <form method="post" action="cartphp.php">
                            <input type="hidden" name="product" value="Jacket">
                            <div>
                                <img src="pics\jacket.webp" alt="">
                            </div>
                            <div class="flex-shrink-0">
                                <h2 class="inline-flex items-center justify-center px-2 font-semibold tracking-tight text-red-600 uppercase rounded-lg bg-gray-50 dark:bg-gray-700"> Jacket</h2>
                            </div>
                            <div class="flex-shrink-0">
                                <span class="pt-2 text-4xl font-bold text-gray-800 uppercase dark:text-gray-100">$15</span>
                            </div>
                            <button type="submit" class="cta-button">Buy</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php';?>

</body>
</html>