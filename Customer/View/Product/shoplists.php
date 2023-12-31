<?php
ini_set('display_errors', 1);
include "../../Controller/shopListController.php";
// print_r($shopLists);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shoplists</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <script src="../resources/js/shoplist.js" defer></script>
</head>

<body class="w-full bg-[#F6F6F6] overflow-x-hidden">

    <div class="w-full min-h-screen flex flex-col">
        <!-- navbar responsive -->

        <?php
        include "../components/responsiveNav.php";
        ?>

        <!-- description -->
        <div class="w-full flex justify-center items-center font-['Poppins'] text-md font-semibold text-[#024486] mt-[90px] space-x-2">
            <p>Shop by Shop Lists and Brands</p>
        </div>
        <div class="w-full flex flex-col justify-center items-center font-['Poppins'] text-md font-semibold text-[#024486] mt-5 space-y-1">
            <button id="down" class="bg-[#003366] px-2 py-2  rounded-md text-white text-xs flex items-center justify-center space-x-1 hover:bg-[#F68721]">
                <span> All Lists </span>
                <ion-icon name="chevron-down-outline"></ion-icon>
                </ion-icon>
            </button>
            <div id="allLists" class=" w-auto h-auto grid  grid-cols-3 grid-rows-4  gap-5 place-items-start bg-[#F6F6F6] bg-white text-xs rounded-md px-2 py-2 shadow-sm shadow-gray-400">
                <?php foreach ($shopName as $name) { ?>
                    <ul class=" w-auto h-auto hover:cursor-pointer list-none">
                        <a href="../shop/shopprofile.php?id=<?=$name["supplierId"]?>">
                            <li><?= $name["shopName"] ?></li>
                        </a>
                    </ul>
                <?php } ?>
            </div>
        </div>
        <!-- body box -->
        <div class="w-full container mx-auto grid lg:grid-cols-5 md:grid-cols-4 grid-cols-2 grid-rows-4  md:gap-14 gap-5  place-items-center bg-[#F6F6F6] mt-5">
            <?php foreach ($shopLists as $photo) { ?>
                <div class="list w-auto bg-white rounded-md shadow-md shadow-gray-400 hover:w-52 hover:cursor-pointer">
                    <a href="../shop/shopprofile.php?id=<?= $photo["supplierId"] ?>"><img src="../<?= $photo["shopPhoto"] ?>" alt="" width="100%" class="rounded-md"></a>
                </div>
            <?php } ?>
        </div>
        <!-- footer responsive -->
        <div class="w-full  flex flex-col items-center justify-center font-['Poppins'] bg-[#024486] mt-12">
            <!-- first one -->
            <div class="md:w-full w-full container md:flex mx-auto  items-center justify-between sm:justify-center mt-3 py-3 md:space-x-20">
                <!-- quicklink -->
                <div class=" md:w-50 w-full flex flex-col  items-center justify-center text-white text-xs px-3 py-2">
                    <p>Quick Links</p>
                    <ul class="list-disc mt-2">
                        <a href="../Product/aboutUs.php">
                            <li>About Us</li>
                        </a>
                        <a href="../order/userPrivacy.php">
                            <li>Pricacy & Policy</li>
                        </a>
                    </ul>
                </div>
                <!-- Help -->
                <div class=" lg:w-80 md:w-50 w-full flex flex-col  items-center justify-center text-white text-xs px-3 py-2 md:border-hidden border-t-2  border-b-white">
                    <p>Help?</p>
                    <ul class="list-disc mt-2 cursor-pointer">
                        <a href="../Product/cusfeedback.php">
                            <li>Feedback</li>
                        </a>
                        <a href="../Product/FAQ.php">
                            <li>FAQ</li>
                        </a>
                    </ul>
                </div>
                <!-- Contact Us -->
                <div class=" w-50 w-full flex flex-col items-center justify-center text-white text-xs px-3 py-2 md:border-hidden border-t-2 border-b-white ">
                    <p>Contact Us</p>
                    <ul class="list-disc mt-2 leading-5">
                        <li><ion-icon name="phone-portrait"></ion-icon><span class="ml-2">+95777777777</span></li>
                        <li><ion-icon name="mail"></ion-icon><span class="ml-2">service@gmail.com</span></li>
                    </ul>
                </div>
            </div>
            <!-- last one -->
            <div class="md:w-[80rem] w-full flex items-center justify-center border-t-2 border-b-white mt-1 py-3">
                <p class="text-white text-xs">&#64;2023 MEGA SHOP All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- script for flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>