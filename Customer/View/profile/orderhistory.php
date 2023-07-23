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
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-[#F6F6F6] font-['Poppins] no-scrollbar flex flex-col min-h-screen">
    <div class="w-full flex flex-col items-center">
        <!-- navbar -->
        <nav class="w-full h-14 bg-white flex justify-between items-center px-4 z-50 fixed">
            <div class=" md:hidden">
                <ion-icon name="menu" size="large" class="text-[#024486] hover:text-[#F68721]"></ion-icon>
            </div>
            <div class="font-['Wallpoet'] text-2xl text-[#024486] leading-none cursor-pointer">
                <p class="">MEGA</p>
                <p>SHOP</p>
            </div>
            <div class="md:w-auto hidden md:flex px-2 py-2">
                <ul class="uppercase text-[#003366] text-lg font-semibold flex items-center space-x-5 font-['Poppins'] cursor-pointer">
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800 text-sm"><a href="">Home</a></li>
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800 text-sm"><a href="">Products</a></li>
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800 text-sm"><a href="">Shops</a></li>
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800 text-sm"><a href="">About US</a></li>
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800 text-sm"><a href="">Contact US</a></li>
                </ul>
            </div>
            <div class="flex items-center justify-center space-x-2 cursor-pointer">
                <ion-icon name="cart" size="large" class="text-[#003366] hover:text-[#F68721] "></ion-icon>
                <ion-icon name="ellipse" class="text-[#F68721] mb-6 hover:text-[#003366]"></ion-icon>
                <ion-icon name="person-circle" size="large" class="text-[#003366] pl-4 hover:text-[#F68721]"></ion-icon>
            </div>

        </nav>
    </div>
    <!-- body -->
    <div class="flex justify-between items-center mt-18 overflow-y-auto">
        <!-- profile section -->
        <div class="w-1/6 h-1/2 mx-auto bg-gray-100 text-center rounded-xl py-4 mt-36 shadow-2xl">

            <p class="text-xl font-bold py-3">User Profile</p>

            <div class="w-full h-1 bg-black"></div>

            <p class="text-md py-3 font-light hover:font-semibold cursor-pointer">User Info</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Followed Stores</p>

            <p class="text-md py-3 font-semibold cursor-pointer hover:font-semibold">Order History</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">My Reviews</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Wishlist</p>

            <div class="flex justify-center items-center">
                <ion-icon name="log-out-outline" class="text-xl font-light cursor-pointer hover:font-semibold"></ion-icon>
                <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Logout</p>

            </div>
        </div>
        <!-- history -->
        <div class="w-1/2 items-center flex mx-auto mt-20">
            <div class="flex flex-col items-center justify-center">
                <p class="text-xl font-semibold">
                    Order History
                </p>
                <div class="rounded-lg   bg-[#FFFFFF] shadow-2xl mb-3 mt-3 border-solid border-2">
                    <div class="bg-[#003366] text-white text-xl font-semibold rounded-tr-lg rounded-tl-lg px-5 py-3">
                        Traffic Star >>>
                    </div>
                    <div class="flex items-center justify-around">
                        <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/6 h-1/3 ml-3 mt-3 rounded-lg">
                        <div class="py-3 text-left px-5">
                            <p class="font-semibold text-lg mb-2 mt-2"> Tucano Backpacks TU-BP01</p>
                            <p class="mb-2 mt-2">Tucano, Color Family:Blue</p>
                            <p class="mb-2 mt-2">Color :Blue</p>
                            <p class="mb-2 mt-2">Size : ###</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg   bg-[#FFFFFF] shadow-2xl mb-3 mt-3 border-solid border-2">
                    <div class="bg-[#003366] text-white text-xl font-semibold rounded-tr-lg rounded-tl-lg px-5 py-3">
                        Traffic Star >>>
                    </div>
                    <div class="flex items-center justify-around">
                        <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/6 h-1/3 ml-3 mt-3  rounded-lg">
                        <div class="py-3 text-left px-5">
                            <p class="font-semibold text-lg mb-2 mt-2"> Tucano Backpacks TU-BP01</p>
                            <p class="mb-2 mt-2">Tucano, Color Family:Blue</p>
                            <p class="mb-2 mt-2">Color :Blue</p>
                            <p class="mb-2 mt-2">Size : ###</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg   bg-[#FFFFFF] shadow-2xl mb-3 mt-3 border-solid border-2">
                    <div class="bg-[#003366] text-white text-xl font-semibold rounded-tr-lg rounded-tl-lg px-5 py-3">
                        Traffic Star >>>
                    </div>
                    <div class="flex items-center justify-around">
                        <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/6 h-1/3 ml-3 mt-3 rounded-lg">
                        <div class="py-3 text-left px-5">
                            <p class="font-semibold text-lg mb-2 mt-2"> Tucano Backpacks TU-BP01</p>
                            <p class="mb-2 mt-2">Tucano, Color Family:Blue</p>
                            <p class="mb-2 mt-2">Color :Blue</p>
                            <p class="mb-2 mt-2">Size : ###</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- footer -->
    <div class="w-full  flex flex-col items-center justify-center font-['Poppins'] bg-[#024486] mt-10">
        <!-- first one -->
        <div class="md:w-full w-[28rem] container md:flex mx-auto  items-center justify-between sm:justify-center mt-3 py-3 md:space-x-20">
            <!-- quicklink -->
            <div class=" md:w-50 w-[28rem] flex flex-col  items-center justify-center text-white text-sm font-semibold px-3 py-2">
                <p>Quick Links</p>
                <ul class="list-disc mt-2">
                    <li>About Us</li>
                    <li>Pricacy & Policy</li>
                </ul>
            </div>
            <!-- Help -->
            <div class=" md:w-50 w-[28rem] flex flex-col  items-center justify-center text-white text-sm font-semibold px-3 py-2 md:border-hidden border-t-2  border-b-white">
                <p>Help?</p>
                <ul class="list-disc mt-2">
                    <li>Payment</li>
                    <li>FAQ</li>
                </ul>
            </div>
            <!-- Contact Us -->
            <div class=" w-50 w-[28rem] flex flex-col items-center justify-center text-white text-sm font-semibold px-3 py-2 md:border-hidden border-t-2 border-b-white ">
                <p>Contact Us</p>
                <ul class="list-disc mt-2 leading-5">
                    <li><ion-icon name="phone-portrait"></ion-icon><span class="ml-2">+95777777777</span></li>
                    <li><ion-icon name="mail"></ion-icon><span class="ml-2">service@gmail.com</span></li>
                </ul>
            </div>
        </div>
        <!-- last one -->
        <div class="md:w-[80rem] w-[28rem] flex items-center justify-center border-t-2 border-b-white mt-1 py-3">
            <p class="text-white text-sm font-semibold">&#64;2023 MEGA SHOP All Rights Reserved.</p>
        </div>
    </div>
</body>

</html>