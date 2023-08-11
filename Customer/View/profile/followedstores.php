<?php
session_start();
$follow = $_SESSION['profileEdit'];

$result = $follow;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Followed Stores</title>
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
    <!-- navbar responsive -->
    <?php include '../components/responsiveNav.php'; ?>
    <!-- body -->
    <div class="flex flex-col md:flex-row justify-evenly items-center mt-20 mb-10">
        <!-- profile section -->
        <!-- desktop view -->
        <div class="hidden md:w-1/6 h-1/2 mx-auto bg-gray-100 text-center rounded-xl py-4 mt-36 shadow-2xl md:flex flex-row md:flex-col">

            <p class="text-xl font-bold py-3 hidden md:block">User Profile</p>

            <div class="w-full h-1 bg-black hidden md:block"></div>

            <a href="./profile.php">
                <p class="text-md py-3 font-light hover:font-semibold cursor-pointer">User Info</p>
            </a>

            <a href="./followedStores.php">
                <p class="text-md py-3 font-semibold cursor-pointer hover:font-semibold">Followed Stores</p>
            </a>

            <a href="./orderHistory.php">
                <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Order History</p>
            </a>

            <a href="./myReviews.php">
                <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">My Reviews</p>
            </a>
            <a href="./wishlist.php">
                <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Wishlist</p>
            </a>

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
                <a href="./profile.php">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">My Profile</p>
                </a>
                <a href="./followedStores.php">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-black px-1 py-1 hover:border-black">Followed Stores</p>
                </a>
                <a href="./orderHistory.php">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">Order History</p>
                </a>
                <a href="./myReviews.php">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">My Reviews</p>
                </a>
                <a href="./wishlist.php">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">Wishlist</p>
                </a>
            </div>
        </div>
        <!-- stores -->
        <div class="w-4/5 md:w-1/2 h-1/3 mx-auto bg-gray-100 text-center rounded-xl py-4 mt-20 shadow-2xl overscroll-auto">
            <div class="">
                <p class="text-lg md:text-2xl text-black font-bold">Followed Stores</p>
            </div>
            <!-- desktop view -->


            <div class="block">
                <div class="flex flex-wrap justify-evenly px-2 md:px-10 mt-8 mb-8 cursor-pointer">
                    <?php foreach ($result as $follow) { ?>
                        <div class="w-40 md:w-1/3 bg-[#024486] rounded-lg ml-1 mr-1 md:ml-5 md:mr-5 items-center justify-center shadow-2xl border-2 border-solid">
                            <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                            <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-5">
                                <p class="text-white text-2xl font-semibold"><?php echo $follow["sup_name"]; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>

            </div>


        </div>
    </div>
    <!-- footer -->
    <?php include '../components/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>