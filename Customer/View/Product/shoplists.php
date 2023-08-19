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
</head>

<body class="bg-[#F6F6F6] overflow-x-hidden">
    <div class="w-full h-screen  flex flex-col items-center">
        <!-- navbar responsive -->
        <?php
        include "../components/responsiveNav.php";
        ?>
        <!-- description -->
        <div class="w-full flex justify-center items-center font-['Poppins'] text-md font-semibold text-[#024486] mt-5">
            <p>Shop by Shop Lists and Brands</p>
        </div>
        <!-- body box -->
        <div class="w-auto h-auto container mx-auto grid lg:grid-cols-5 md:grid-cols-4 grid-cols-2 grid-rows-4  gap-16  place-items-center bg-[#F6F6F6] mt-5">
            <?php foreach ($shopLists as $photo) { ?>
                <div class="w-auto h-auto bg-white rounded-md shadow-md shadow-gray-400 hover:w-44 hover:cursor-pointer">
                    <a href="../shop/shopprofile.php?id=<?=$photo["supplierId"]?>"><img src="../<?= $photo["shopPhoto"] ?>" alt="" width="100%" class="rounded-md"></a>
                </div>
            <?php } ?>
        </div>
        <!-- footer responsive -->
        <div class="w-full  flex flex-col items-center justify-center font-['Poppins'] bg-[#024486] mt-12">
            <!-- first one -->
            <div class="md:w-full w-[28rem] container md:flex mx-auto  items-center justify-between sm:justify-center mt-3 py-3 md:space-x-20">
                <!-- quicklink -->
                <div class=" md:w-50 w-[28rem] flex flex-col  items-center justify-center text-white text-xs px-3 py-2">
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
                <div class=" md:w-50 w-[28rem] flex flex-col  items-center justify-center text-white text-xs px-3 py-2 md:border-hidden border-t-2  border-b-white">
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
                <div class=" w-50 w-[28rem] flex flex-col items-center justify-center text-white text-xs px-3 py-2 md:border-hidden border-t-2 border-b-white ">
                    <p>Contact Us</p>
                    <ul class="list-disc mt-2 leading-5">
                        <li><ion-icon name="phone-portrait"></ion-icon><span class="ml-2">+95777777777</span></li>
                        <li><ion-icon name="mail"></ion-icon><span class="ml-2">service@gmail.com</span></li>
                    </ul>
                </div>
            </div>
            <!-- last one -->
            <div class="md:w-[80rem] w-[28rem] flex items-center justify-center border-t-2 border-b-white mt-1 py-3">
                <p class="text-white text-xs">&#64;2023 MEGA SHOP All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- script for flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>