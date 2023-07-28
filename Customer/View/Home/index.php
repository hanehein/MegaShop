<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGA SHOP</title>

    <!-- <link rel="stylesheet" href="../resources/lib/tailwind/output.css"> -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/home.css">
    <script src="../resources/js/home.js" defer></script>
</head>

<body class="relative">

    <?php include "../components/navbarForHome.php"; ?>

    <!-- start hero section -->
    <!-- end hero section -->

    <!-- start discount section -->
    <section class="py-3 px-3 sm:px-10 bg-custom-orange">
        <h2 class="text-2xl text-white font-semibold">Discount Products</h2>
        <div class="line h-[2px] w-full bg-white mt-5 mb-5"></div>
        <div class="container mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">

            <!-- start card -->
            <div class="bg-white shadow-md hover:shadow-lg rounded-xl p-3">
                <!-- card header -->
                <div>
                    <img src="https://i5.walmartimages.com/asr/9a261ab6-c14f-41b5-9253-7a57a32ddf29.4f27d098d30daba67c363a4dcddad090.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" class="rounded-xl" alt="product-img" />
                </div>
                <!-- card header -->
                <!-- card body -->
                <div>
                    <div class="flex justify-between items-center">
                        <h2 class="text-custom-large font-bold">Coca Cola</h2>
                        <ion-icon name="heart-outline" class="text-red-600 text-custom-large"></ion-icon>
                    </div>
                    <div>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                    </div>
                    <div class="block sm:flex sm:justify-between sm:items-center mb-2">
                        <div class="text-custom-tiny font-bold">
                            <span class="text-red-600 line-through">10000 Ks</span>
                            <span class="text-red-600">( 20 % off)</span>
                        </div>
                        <div>
                            <span class="text-custom-blue text-custom-large font-bold">8000 ks</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="text-custom-orange bg-custom-blue w-full rounded py-1">
                            <ion-icon class="text-custom-large" name="cart"></ion-icon>
                            <span class="text-white">Add to Cart</span>
                        </button>
                    </div>
                </div>
                <!-- card body -->
            </div>

            <!-- start card -->
            <div class="bg-white shadow-md hover:shadow-lg rounded-xl p-3">
                <!-- card header -->
                <div>
                    <img src="https://i5.walmartimages.com/asr/9a261ab6-c14f-41b5-9253-7a57a32ddf29.4f27d098d30daba67c363a4dcddad090.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" class="rounded-xl" alt="product-img" />
                </div>
                <!-- card header -->
                <!-- card body -->
                <div>
                    <div class="flex justify-between items-center">
                        <h2 class="text-custom-large font-bold">Coca Cola</h2>
                        <ion-icon name="heart-outline" class="text-red-600 text-custom-large"></ion-icon>
                    </div>
                    <div>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                    </div>
                    <div class="block sm:flex sm:justify-between sm:items-center mb-2">
                        <div class="text-custom-tiny font-bold">
                            <span class="text-red-600 line-through">10000 Ks</span>
                            <span class="text-red-600">( 20 % off)</span>
                        </div>
                        <div>
                            <span class="text-custom-blue text-custom-large font-bold">8000 ks</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="text-custom-orange bg-custom-blue w-full rounded py-1">
                            <ion-icon class="text-custom-large" name="cart"></ion-icon>
                            <span class="text-white">Add to Cart</span>
                        </button>
                    </div>
                </div>
                <!-- card body -->
            </div>

            <!-- add more cards here -->
        </div>
        <div class="text-end mt-5">
            <button class="text-white text-xl bg-custom-blue px-10 py-2 rounded-lg">Shop More...</button>
        </div>
    </section>
    <!-- end discount section -->

    <!-- start just for you section -->
    <section class="py-3 px-3 sm:px-10 bg-white">
        <h2 class="bg-custom-blue py-2 text-2xl text-white text-center rounded-tr-2xl rounded-bl-2xl mb-5">
            Discount Products</h2>
        <div class="container mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">

            <!-- start card -->
            <div class="bg-blue-200 shadow-md hover:shadow-lg rounded-xl p-3">
                <!-- card header -->
                <div>
                    <img src="https://i5.walmartimages.com/asr/9a261ab6-c14f-41b5-9253-7a57a32ddf29.4f27d098d30daba67c363a4dcddad090.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" class="rounded-xl" alt="product-img" />
                </div>
                <!-- card header -->
                <!-- card body -->
                <div>
                    <div class="flex justify-between items-center">
                        <h2 class="text-custom-large font-bold">Coca Cola</h2>
                        <ion-icon name="heart-outline" class="text-red-600 text-custom-large"></ion-icon>
                    </div>
                    <div>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                    </div>
                    <div class="block sm:flex sm:justify-between sm:items-center mb-2">
                        <div class="text-custom-tiny font-bold">
                            <span class="text-red-600 line-through">10000 Ks</span>
                            <span class="text-red-600">( 20 % off)</span>
                        </div>
                        <div>
                            <span class="text-custom-blue text-custom-large font-bold">8000 ks</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="text-custom-orange bg-custom-blue w-full rounded py-1">
                            <ion-icon class="text-custom-large" name="cart"></ion-icon>
                            <span class="text-white">Add to Cart</span>
                        </button>
                    </div>
                </div>
                <!-- card body -->
            </div>

            <!-- add more cards here -->
        </div>
        <div class="text-end mt-5">
            <button class="text-white text-xl bg-custom-orange px-10 py-2 rounded-lg">Shop More...</button>
        </div>
    </section>
    <!-- end just for you section -->

    <!-- start recently viewed section -->
    <section class="py-3 px-3 sm:px-10 bg-white">
        <h2 class="bg-custom-blue py-2 text-2xl text-white text-center rounded-tr-2xl rounded-bl-2xl mb-5">
            Recently Viewed</h2>
        <div class="container mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">

            <!-- start card -->
            <div class="bg-blue-200 shadow-md hover:shadow-lg rounded-xl p-3">
                <!-- card header -->
                <div>
                    <img src="https://i5.walmartimages.com/asr/9a261ab6-c14f-41b5-9253-7a57a32ddf29.4f27d098d30daba67c363a4dcddad090.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" class="rounded-xl" alt="product-img" />
                </div>
                <!-- card header -->
                <!-- card body -->
                <div>
                    <div class="flex justify-between items-center">
                        <h2 class="text-custom-large font-bold">Coca Cola</h2>
                        <ion-icon name="heart-outline" class="text-red-600 text-custom-large"></ion-icon>
                    </div>
                    <div>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                    </div>
                    <div class="block sm:flex sm:justify-between sm:items-center mb-2">
                        <div class="text-custom-tiny font-bold">
                            <span class="text-red-600 line-through">10000 Ks</span>
                            <span class="text-red-600">( 20 % off)</span>
                        </div>
                        <div>
                            <span class="text-custom-blue text-custom-large font-bold">8000 ks</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="text-custom-orange bg-custom-blue w-full rounded py-1">
                            <ion-icon class="text-custom-large" name="cart"></ion-icon>
                            <span class="text-white">Add to Cart</span>
                        </button>
                    </div>
                </div>
                <!-- card body -->
            </div>

            <!-- add more cards here -->
        </div>
        <div class="text-end mt-5">
            <button class="text-white text-xl bg-custom-orange px-10 py-2 rounded-lg">Shop More...</button>
        </div>
    </section>
    <!-- end recently view section -->

    <?php include "../components/footer.php"; ?>












</body>


</html>