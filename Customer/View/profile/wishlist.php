<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-[#F6F6F6] font-['Poppins] no-scrollbar flex flex-col min-h-screen">
    <div class="w-full flex flex-col items-center">
        <!-- navbar -->
        <?php include '../components/responsiveNav.php';?>
    </div>
    <!-- body -->
    <div class="flex flex-col md:flex-row md:justify-between items-center mt-18 overflow-y-auto mb-10">
        <!-- profile section -->
        <div class="hidden md:w-1/6 h-1/2 mx-auto bg-gray-100 text-center rounded-xl py-4 mt-36 shadow-2xl md:flex flex-row md:flex-col">

            <p class="text-xl font-bold py-3 hidden md:block">User Profile</p>

            <div class="w-full h-1 bg-black hidden md:block"></div>

            <p class="text-md py-3 font-light hover:font-semibold cursor-pointer">User Info</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Followed Stores</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Order History</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">My Reviews</p>

            <p class="text-md py-3 font-semibold cursor-pointer hover:font-semibold">Wishlist</p>

            <div class="md:flex justify-center items-center hidden">
                <ion-icon name="log-out-outline" class="text-xl font-light cursor-pointer hover:font-semibold"></ion-icon>
                <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Logout</p>
            </div>
        </div>
        <!-- mobile view -->
        <div class="md:hidden mt-4 mb-4">
            <div class="text-center mb-4">
                <p class="xl font-bold">My Account</p>
            </div>
            <div class="flex justify-evenly items-center">
                <p class="text-xs ml-2 mr-2 font-semibold px-1 py-1">My Profile</p>
                <p class="text-xs ml-2 mr-2 font-semibold px-1 py-1">Followed Stores</p>
                <p class="text-xs ml-2 mr-2 font-semibold px-1 py-1">Order History</p>
                <p class="text-xs ml-2 mr-2 font-semibold px-1 py-1">My Reviews</p>
                <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-black px-1 py-1 hover:shadow-xl">Wishlist</p>
            </div>
        </div>
        <!-- wishlist -->
        <div class="w-full md:w-1/2 items-center flex mx-auto mt-20 justify-center">
            <!-- desktop view -->
            <div class=" flex flex-col items-center justify-center ">
                <p class="text-xl font-semibold">
                    Wishlist
                </p>
                <div class="bg-[#d6d3d1] mt-10 rounded-lg mb-10 w-full">
                    <div class="flex justify-around bg-[#003366] w-full rounded-tr-lg rounded-tl-lg px-5 py-5 md:px-10 md:py-10">

                        <p class="text-white text-xs md:text-lg font-bold mr-24 md:mr-72">Products</p>
                        <p class="text-white text-xs md:text-lg font-bold ml-10 md:ml-20">Unit Price</p>
                        <p class="text-white text-xs md:text-lg font-bold">Stock Status</p>
                        <p class="text-white text-xs md:text-lg font-bold">Action</p>

                    </div>
                    <div class="rounded-lg   bg-[#FFFFFF] shadow-2xl mb-5 mt-5 ml-3 mr-3 border-solid border-2">

                        <div class="flex items-center justify-between mr-10">
                            <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/4 md:w-1/6 h-1/3 md:ml-10 mt-3 rounded-lg mb-3">
                            <div class="py-3 text-left px-2 md:px-5 mr-10 ml-5 md:mr-20">
                            <p class="font-semibold text-sm md:text-lg mb-2 mt-2"> Tucano Backpacks TU-BP01</p>
                            <p class="mb-2 mt-2 text-xs">Tucano, Color Family:Blue</p>
                            <p class="mb-2 mt-2 text-xs">Color :Blue</p>
                            <p class="mb-2 mt-2 text-xs">Size : ###</p>
                        </div>

                            <p class="text-sm md:text-xl font-semibold mr-5 md:mr-10">100$</p>

                            <p class="text-xs md:text-xl font-semibold ml-2">In Stock</p>

                            <div class="text-sm font-semibold py-3 md:mr-10 md:px-3 md:md-10">
                                <button class="w-auto bg-[#dc2626] px-1 py-1 md:px-2 md:py-2 text-xs md:text-lg text-white rounded-lg shadow-xl ml-7 ">Remove</button>
                            </div>
                        </div>

                    </div>
                    <div class="rounded-lg   bg-[#FFFFFF] shadow-2xl mb-5 mt-5 ml-3 mr-3 border-solid border-2">

                        <div class="flex items-center justify-between mr-10">
                            <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/4 md:w-1/6 h-1/3 md:ml-10 mt-3 rounded-lg mb-3">
                            <div class="py-3 text-left px-2 md:px-5 mr-10 ml-5 md:mr-20">
                            <p class="font-semibold text-sm md:text-lg mb-2 mt-2"> Tucano Backpacks TU-BP01</p>
                            <p class="mb-2 mt-2 text-xs">Tucano, Color Family:Blue</p>
                            <p class="mb-2 mt-2 text-xs">Color :Blue</p>
                            <p class="mb-2 mt-2 text-xs">Size : ###</p>
                        </div>

                            <p class="text-sm md:text-xl font-semibold mr-5 md:mr-10">100$</p>

                            <p class="text-xs md:text-xl font-semibold ml-2">In Stock</p>

                            <div class="text-sm font-semibold py-3 md:mr-10 md:px-3 md:md-10">
                                <button class="w-auto bg-[#dc2626] px-1 py-1 md:px-2 md:py-2 text-xs md:text-lg text-white rounded-lg shadow-xl ml-7 ">Remove</button>
                            </div>
                        </div>

                    </div>
                    <div class="rounded-lg   bg-[#FFFFFF] shadow-2xl mb-5 mt-5 ml-3 mr-3 border-solid border-2">

                        <div class="flex items-center justify-between mr-10">
                            <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/4 md:w-1/6 h-1/3 md:ml-10 mt-3 rounded-lg mb-3">
                            <div class="py-3 text-left px-2 md:px-5 mr-10 ml-5 md:mr-20">
                            <p class="font-semibold text-sm md:text-lg mb-2 mt-2"> Tucano Backpacks TU-BP01</p>
                            <p class="mb-2 mt-2 text-xs">Tucano, Color Family:Blue</p>
                            <p class="mb-2 mt-2 text-xs">Color :Blue</p>
                            <p class="mb-2 mt-2 text-xs">Size : ###</p>
                        </div>

                            <p class="text-sm md:text-xl font-semibold mr-5 md:mr-10">100$</p>

                            <p class="text-xs md:text-xl font-semibold ml-2">In Stock</p>

                            <div class="text-sm font-semibold py-3 md:mr-10 md:px-3 md:md-10">
                                <button class="w-auto bg-[#dc2626] px-1 py-1 md:px-2 md:py-2 text-xs md:text-lg text-white rounded-lg shadow-xl ml-7 ">Remove</button>
                            </div>
                        </div>

                    </div>
                    

                </div>
                


            </div>
            <!-- mobile view -->
            
        </div>


    </div>

    <!-- footer -->
    <?php include '../components/footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>