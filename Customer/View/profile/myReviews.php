<?php
include '../../Controller/MyReviewsController.php';

$review = $_SESSION['profileEdit'];
$result = $review;

$cus_id = $_SESSION["id"];


?>

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
        <?php include '../components/responsiveNav.php'; ?>
    </div>
    <!-- body -->
    <div class="flex flex-col md:flex-row justify-between items-center mt-18 overflow-y-auto mb-10">
        <!-- profile section -->
        <div class="hidden md:w-1/6 h-1/2 mx-auto bg-gray-100 text-center rounded-xl py-4 mt-36 shadow-2xl md:flex flex-row md:flex-col">

            <p class="text-xl font-bold py-3 hidden md:block">User Profile</p>
           
            <div class="w-full h-1 bg-black hidden md:block"></div>
            <a href="./profile.php?id=<?php echo $cus_id; ?>">
                <p class="text-md py-3 font-light hover:font-semibold cursor-pointer">User Info</p>
            </a>

            <a href="./followedStores.php?id=<?php echo $cus_id; ?>">
                <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Followed Stores</p>
            </a>

            <a href="./orderHistory.php?id=<?php echo $cus_id; ?>">
                <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Order History</p>
            </a>

            <a href="./myReviews.php?id=<?php echo $cus_id; ?>">
                <p class="text-md py-3 font-semibold cursor-pointer hover:font-semibold">My Reviews</p>
            </a>

            <a href="./wishlist.php?id=<?php echo $cus_id; ?>">
                <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Wishlist</p>
            </a>
        </div>
        <!-- mobile view -->
        <div class="md:hidden mt-4 mb-4">
            <div class="text-center mb-4">
                <p class="xl font-bold">My Account</p>
            </div>
            <div class="flex justify-evenly items-center">
                <a href="./profile.php?id=<?php echo $cus_id; ?>">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">My Profile</p>
                </a>
                <a href="./followedStores.php?id=<?php echo $cus_id; ?>">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">Followed Stores</p>
                </a>
                <a href="../orderHistory.php?id=<?php echo $cus_id; ?>">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">Order History</p>
                </a>
                <a href="../../Controller/MyReviewsController.php?id=<?php echo $cus_id; ?>">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-black px-1 py-1 hover:border-black">My Reviews</p>
                </a>
                <a href="./wishlist.php?id=<?php echo $review[0]["customer_id"]; ?>">
                    <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">Wishlist</p>
                </a>
            </div>

        </div>
        <!-- reviews -->
        <div class="w-full md:w-1/2 items-center flex mx-auto mt-20">
            <?php if (count($review) == 0) { ?>
                <div class="flex flex-col items-center justify-center">
                    <p class="text-lg">You haven't given any reviews.</p>
                </div>
            <?php } else { ?>
                <div class="flex flex-col items-center justify-center">
                    <p class="text-xl font-semibold">
                        My Reviews
                    </p>
                    <?php foreach ($result as $review) { ?>
                        <div class="rounded-lg  bg-[#FFFFFF] shadow-2xl mb-3 mt-3 border-solid border-2 md:w-full">
                            <div class="bg-[#003366] text-white text-md md:text-xl font-semibold rounded-tr-lg rounded-tl-lg px-5 py-3">
                                Traffic Star >>>
                            </div>
                            <div class="flex items-center justify-between ">
                                <img src="../<?php echo $review["p_photo1"]; ?>" alt="" class="w-1/4 md:w-1/6 h-1/3 ml-10 mt-3 rounded-lg mb-3">
                                <div class="py-3 text-left px-2 md:px-5 mr-10 ml-5 md:mr-20 md:w-1/4">
                                    <p class="font-semibold text-sm md:text-lg mb-2 mt-2 capitalize "><?php echo $review["p_name"]; ?></p>
                                    <p class="mb-2 mt-2 text-xs"><?php echo $review["p_color"]; ?></p>
                                    <p class="mb-2 mt-2 text-xs"><?php echo $review["p_size"]; ?></p>
                                </div>
                                <div class="py-3 text-left px-2 md:px-5 mr-10 ml-5 md:mr-20 md:w-1/4">
                                    <p class="font-semibold capitalize"><?php echo $review["review"]; ?></p>
                                </div>
                                <div class="flex flex-col items-center mr-5 md:mr-10 md:w-1/4">
                                    <p class="text-md md:text-xl font-semibold mt-5 mb-5"><?php echo $review["rating"]; ?></p>
                                    <div class="text-[#facc15]  flex justify-evenly px-1">
                                        <?php for ($i = 1; $i <= $review["rating"]; $i++) {  ?>
                                            <ion-icon name="star"></ion-icon>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php }  ?>
                <?php } ?>

                </div>
        </div>


    </div>

    <!-- footer -->
    <?php include '../components/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>