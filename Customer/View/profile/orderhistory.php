<?php
session_start();
$orders = $_SESSION['profileEdit'];

$result = $orders;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
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
        <?php include '../components/responsiveNav.php'; ?>
    </div>
    <!-- body -->
    <div class="flex flex-col md:flex-row justify-between items-center mt-18 overflow-y-auto mb-10">
        <!-- profile section -->
        <div class="hidden md:w-1/6 h-1/2 mx-auto bg-gray-100 text-center rounded-xl py-4 mt-36 shadow-2xl md:flex flex-row md:flex-col">

            <p class="text-xl font-bold py-3 hidden md:block">User Profile</p>

            <div class="w-full h-1 bg-black hidden md:block"></div>

            <a href="./profile.php?id=<?php echo $orders[0]["cus_id"]; ?>">
                <p class="text-md py-3 font-light hover:font-semibold cursor-pointer">User Info</p>
            </a>

            <a href="../../Controller/FollowedStoresController.php?id=<?php echo $orders[0]["cus_id"]; ?>">
                <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Followed Stores</p>
            </a>

            <a href="../../Controller/OrderHistoryController.php?id=<?php echo $orders[0]["cus_id"]; ?>">
                <p class="text-md py-3 font-semibold cursor-pointer hover:font-semibold">Order History</p>
            </a>

            <a href="../../Controller/MyReviewsController.php?id=<?php echo $orders[0]["cus_id"]; ?>">
                <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">My Reviews</p>
            </a>

            <a href="../../Controller/WishlistController.php?id=<?php echo $orders[0]["cus_id"]; ?>">
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
                <a href="./profile.php?id=<?php echo $orders[0]["cus_id"]; ?>">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">My Profile</p>
                </a>
                <a href="../../Controller/FollowedStoresController.php?id=<?php echo $orders[0]["cus_id"]; ?>">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-black px-1 py-1 hover:border-black">Followed Stores</p>
                </a>
                <a href="../../Controller/OrderHistoryController.php?id=<?php echo $orders[0]["cus_id"]; ?>">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">Order History</p>
                </a>
                <a href="../../Controller/MyReviewsController.php?id=<?php echo $orders[0]["cus_id"]; ?>">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">My Reviews</p>
                </a>
                <a href="../../Controller/WishlistController.php?id=<?php echo $orders[0]["cus_id"]; ?>">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">Wishlist</p>
                </a>
            </div>
        </div>
        <!-- history -->
        
        <div class="w-full md:w-1/2 items-center flex mx-auto mt-20">
            <?php if (count($result) == 0) { ?>
                <div class="flex flex-col items-center justify-center">
                    <p class="text-lg">You haven't ordered anything yet.</p>
                </div>
            <?php } else { ?>
                <div class="flex flex-col items-center justify-center">
                    <p class="text-xl font-semibold">
                        Order History
                    </p>
                    <?php foreach ($result as $orders) { ?>
                        <div class="rounded-lg  bg-[#FFFFFF] shadow-2xl mb-3 mt-3 border-solid border-2">

                            <div class="bg-[#003366] text-white text-lg md:text-xl font-semibold rounded-tr-lg rounded-tl-lg px-5 py-3">
                                Traffic Star >>>
                            </div>
                            <div class="flex items-center justify-between px-4">
                                <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/6 md:w-1/12 h-1/3 md:ml-10 mt-3 rounded-lg mb-3">

                                <p class="font-semibold text-xs md:text-lg mb-2 mt-2 line-clamp-3"> Tucano Backpacks TU-BP01</p>
                                <p class="font-semibold text-xs md:text-lg mb-2 mt-2"><?php echo $orders["sup_name"]; ?></p>
                                <p class="font-semibold text-xs md:text-lg mb-2 mt-2"><?php echo $orders["total_amount"]; ?> MMK</p>
                                <p class="font-semibold text-xs md:text-lg mb-2 mt-2"><?php echo $orders["create_date"]; ?></p>
                            </div>

                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

        </div>


    </div>

    <!-- footer -->
    <?php include '../components/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>