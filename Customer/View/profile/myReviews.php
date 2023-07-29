<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reviews</title>
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

<body class="bg-[#F6F6F6] font-['Poppins] no-scrollbar flex flex-col min-h-screen ">
    <div class="w-full flex flex-col items-center">
        <!-- navbar -->
        <?php include '../components/responsiveNav.php';?>
    </div>
    <!-- body -->
    <div class="flex flex-col md:flex-row justify-between items-center mt-18 overflow-y-auto mb-10">
        <!-- profile section -->
        <div class="hidden md:w-1/6 h-1/2 mx-auto bg-gray-100 text-center rounded-xl py-4 mt-36 shadow-2xl md:flex flex-row md:flex-col">

            <p class="text-xl font-bold py-3 hidden md:block">User Profile</p>

            <div class="w-full h-1 bg-black hidden md:block"></div>

            <p class="text-md py-3 font-light hover:font-semibold cursor-pointer">User Info</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Followed Stores</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Order History</p>

            <p class="text-md py-3 font-semibold cursor-pointer hover:font-semibold">My Reviews</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Wishlist</p>

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
                <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">My Profile</p>
                <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-black px-1 py-1 hover:border-black">Followed Stores</p>
                <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">Order History</p>
                <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">My Reviews</p>
                <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">Wishlist</p>
            </div>
        </div>
        <!-- reviews -->
        <div class="w-full md:w-1/2 items-center flex mx-auto mt-20">
            <div class="flex flex-col items-center justify-center">
                <p class="text-xl font-semibold">
                    Order History
                </p>
                <div class="rounded-lg  bg-[#FFFFFF] shadow-2xl mb-3 mt-3 border-solid border-2">
                    <div class="bg-[#003366] text-white text-md md:text-xl font-semibold rounded-tr-lg rounded-tl-lg px-5 py-3">
                        Traffic Star >>>
                    </div>
                    <div class="flex items-center justify-between">
                        <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/4 md:w-1/6 h-1/3 ml-10 mt-3 rounded-lg mb-3">
                        <div class="py-3 text-left px-2 md:px-5 mr-10 ml-5 md:mr-20">
                            <p class="font-semibold text-sm md:text-lg mb-2 mt-2"> Tucano Backpacks TU-BP01</p>
                            <p class="mb-2 mt-2 text-xs">Tucano, Color Family:Blue</p>
                            <p class="mb-2 mt-2 text-xs">Color :Blue</p>
                            <p class="mb-2 mt-2 text-xs">Size : ###</p>
                        </div>
                        <div class="flex flex-col items-center mr-5 md:mr-10">
                            <p class="text-md md:text-xl font-semibold mt-5 mb-5">5.0</p>
                            <div class="text-[#facc15] mt-5 mb-5 flex justify-evenly px-1">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="rounded-lg  bg-[#FFFFFF] shadow-2xl mb-3 mt-3 border-solid border-2">
                    <div class="bg-[#003366] text-white text-md md:text-xl font-semibold rounded-tr-lg rounded-tl-lg px-5 py-3">
                        Traffic Star >>>
                    </div>
                    <div class="flex items-center justify-between">
                        <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/4 md:w-1/6 h-1/3 ml-10 mt-3 rounded-lg mb-3">
                        <div class="py-3 text-left px-2 md:px-5 mr-10 ml-5 md:mr-20">
                            <p class="font-semibold text-sm md:text-lg mb-2 mt-2"> Tucano Backpacks TU-BP01</p>
                            <p class="mb-2 mt-2 text-xs">Tucano, Color Family:Blue</p>
                            <p class="mb-2 mt-2 text-xs">Color :Blue</p>
                            <p class="mb-2 mt-2 text-xs">Size : ###</p>
                        </div>
                        <div class="flex flex-col items-center mr-5 md:mr-10">
                            <p class="text-md md:text-xl font-semibold mt-5 mb-5">5.0</p>
                            <div class="text-[#facc15] mt-5 mb-5 flex justify-evenly px-1">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="rounded-lg  bg-[#FFFFFF] shadow-2xl mb-3 mt-3 border-solid border-2">
                    <div class="bg-[#003366] text-white text-md md:text-xl font-semibold rounded-tr-lg rounded-tl-lg px-5 py-3">
                        Traffic Star >>>
                    </div>
                    <div class="flex items-center justify-between">
                        <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/4 md:w-1/6 h-1/3 ml-10 mt-3 rounded-lg mb-3">
                        <div class="py-3 text-left px-2 md:px-5 mr-10 ml-5 md:mr-20">
                            <p class="font-semibold text-sm md:text-lg mb-2 mt-2"> Tucano Backpacks TU-BP01</p>
                            <p class="mb-2 mt-2 text-xs">Tucano, Color Family:Blue</p>
                            <p class="mb-2 mt-2 text-xs">Color :Blue</p>
                            <p class="mb-2 mt-2 text-xs">Size : ###</p>
                        </div>
                        <div class="flex flex-col items-center mr-5 md:mr-10">
                            <p class="text-md md:text-xl font-semibold mt-5 mb-5">5.0</p>
                            <div class="text-[#facc15] mt-5 mb-5 flex justify-evenly px-1">
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                                <ion-icon name="star"></ion-icon>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>

    <!-- footer -->
    <?php include '../components/responsiveFooter.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>
