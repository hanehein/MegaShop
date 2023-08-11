<?php

session_start();

$profile = $_SESSION['profileEdit'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
    <script src="../resources/js/img.js"></script>
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-slate-100 font-['Poppins] no-scrollbar flex flex-col min-h-screen">
    <!-- navbar responsive -->
    <?php include '../components/responsiveNav.php'; ?>
    <!-- body -->
    <div class="flex flex-col md:flex-row justify-evenly items-center mt-20 mb-10">
        <!-- desktop view -->
        <div class="hidden md:w-1/6 h-1/2 mx-auto bg-gray-100 text-center rounded-xl py-4 mt-36 shadow-2xl md:flex flex-row md:flex-col">

            <p class="text-xl font-bold py-3 hidden md:block">User Profile</p>

            <div class="w-full h-1 bg-black hidden md:block"></div>

            <p class="text-md py-3 font-semibold hover:font-semibold cursor-pointer">User Info</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Followed Stores</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Order History</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">My Reviews</p>

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
        <!-- save -->
        <div class="w-2/3 md:w-5/12 h-1/2 mx-auto bg-gray-100 shadow-2xl text-center rounded-xl py-4 mt-5">

            <form action="../../Controller/ProfileUpdateController.php" method="post" enctype="multipart/form-data">
                <div class="flex  items-center justify-center">

                    <label for="profile" class="w-2/3 justify-center items-center">
                        <img src="../<?php echo $profile[0]["cus_photo"] ?>" id="outImg" class="w-2/3 md:w-1/3 h-1/6 rounded-full ml-10 cursor-pointer">
                    </label>
                    <input type="file" name="profile" id="profile" hidden accept=".png,.jpg,.svg">
                    <div class="hidden md:flex flex-col items-center">
                        <p class="text-xl font-bold py-6"><?php echo $profile[0]["cus_name"]; ?></p>
                        <p class="text-lg font-semibold py-6"><?php echo $profile[0]["cus_address"]; ?></p>
                    </div>
                </div>



                <div class="flex flex-col mx-auto">
                    <input type="hidden" name="id" value="<?php echo $profile[0]["id"]; ?>">
                    <div class="w-1/2 ml-2 md:ml-24 mt-3 ">
                        <p class="text-xl font-semibold">Name</p>
                    </div>
                    <div class="mt-5 cursor-pointer">
                        <input type="text" name="name" id="" value="<?php echo $profile[0]["cus_name"] ?>" class="w-2/3 md:w-1/3 h-10 rounded-md border-solid border-1  px-4 active:border-solid" required>
                    </div>
                    <div class="w-1/2 ml-10 md:ml-32 mt-5">
                        <p class="text-xl font-semibold">Email address</p>
                    </div>
                    <div class="mt-5 cursor-pointer">
                        <input type="email" name="email" id="" value="<?php echo $profile[0]["cus_email"] ?>" class="w-2/3 md:w-1/3 h-10 rounded-md border-solid border-1  px-4" required>
                    </div>
                    <div class="w-1/2 ml-2 md:ml-28 mt-5">
                        <p class="text-xl font-semibold">Location</p>
                    </div>
                    <div class="mt-5 cursor-pointer">
                        <input type="text" name="address" id="" value="<?php echo $profile[0]["cus_address"] ?>" class="w-2/3 md:w-1/3 h-10 rounded-md border-solid border-1  px-4" required>
                    </div>
                    <div class="w-1/2 ml-10 md:ml-36 mt-5">
                        <p class="text-xl font-semibold">Phone Number</p>
                    </div>
                    <div class="mt-5 cursor-pointer">
                        <input type="number" inputmode="numeric" name="phone" id="phone" value="<?php echo $profile[0]["cus_phone"] ?>" class="w-2/3 md:w-1/3 h-10 rounded-md border-solid border-1  px-4" required>
                    </div>

                </div>

                <button class="bg-[#024486] w-1/6 md:w-1/12 mt-10 py-2 rounded-lg mr-16 md:mr-64 mb-20 float-right cursor-pointer hover:bg-blue-300 text-white font-bold hover:text-black">
                    Save
                </button>
            </form>
        </div>
    </div>
    <!-- footer -->
    <?php include '../components/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>