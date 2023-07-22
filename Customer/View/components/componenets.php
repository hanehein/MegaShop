<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>components</title>
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
    <!-- no scroll bar -->
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="no-scrollbar">
    <!-- nav bar -->
    <div class="w-full flex flex-col items-center">

        <nav class="w-full h-14 bg-white flex justify-between items-center px-4 z-50 fixed">
            <div class="font-[Wallpoet] text-2xl text-[#003366] leading-none cursor-pointer">
                <p>MEGA</p>
                <p>SHOP</p>
            </div>
            <div class="w-auto px-2 py-2">
                <ul class="uppercase text-[#003366] text-lg font-semibold flex items-center space-x-5 font-['Poppins'] cursor-pointer">
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800"><a href="">Home</a></li>
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800"><a href="">Products</a></li>
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800"><a href="">Shops</a></li>
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800"><a href="">About US</a></li>
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800"><a href="">Contact US</a></li>
                </ul>
            </div>
            <div class="flex items-center justify-center space-x-2 cursor-pointer">
                <ion-icon name="cart" size="large" class="text-[#003366] hover:text-[#F68721] "></ion-icon>
                <ion-icon name="ellipse" class="text-[#F68721] mb-6 hover:text-[#003366]"></ion-icon>
                <ion-icon name="person-circle" size="large" class="text-[#003366] pl-4 hover:text-[#F68721]"></ion-icon>
            </div>

        </nav>
    </div>

    <!-- footer -->
    <div class="bg-[#024486] w-full h-auto mt-10 ">
        <div class="flex text-white justify-evenly ">
            <div class="py-5">
                <p class="text-xl font-semibold">Quick Links</p>
                <ul class="list-disc mt-3">
                    <li class="text-lg font-semibold cursor-pointer">About Us</li>
                    <li class="text-lg font-semibold cursor-pointer">Privacy & Policy</li>
                </ul>
            </div>
            <div class="py-5">
                <p class="text-xl font-semibold">Help?</p>
                <ul class="list-disc mt-3">
                    <li class="text-lg font-semibold cursor-pointer">Payment</li>
                    <li class="text-lg font-semibold cursor-pointer">FAQ</li>
                </ul>
            </div>
            <div class="py-5">
                <p class="text-xl font-semibold">Contact Us</p>
                <ul class="list-disc mt-3">
                    <li class="flex items-center text-lg font-semibold cursor-pointer"><ion-icon name="phone-portrait" class="text-2xl"></ion-icon> +95777777777</li>
                    <li class="flex items-center text-lg font-semibold cursor-pointer"><ion-icon name="mail" class="text-2xl"></ion-icon> megashopservice@gmail.com</li>
                </ul>
            </div>

        </div>
        <div class="w-2/3 h-0.5 bg-gray-100 mx-auto">

        </div>
        <div class="text-center mt-3 py-4 text-xl">
            <p class="text-white font-bold cursor-pointer">@2023 MEGA SHOP All rights reserved</p>
        </div>
    </div>
</body>

</html>