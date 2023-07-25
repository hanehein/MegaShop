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
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-[#F6F6F6] font-['Poppins] no-scrollbar flex flex-col min-h-screen">
    <!-- navbar responsive -->
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
    <div class="flex flex-col md:flex-row justify-evenly items-center mt-20 mb-10">
        <!-- profile section -->
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
                <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">My Profile</p>
                <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-black px-1 py-1 hover:border-black">Followed Stores</p>
                <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">Order History</p>
                <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">My Reviews</p>
                <p class="text-xs ml-2 mr-2 font-semibold border-b-2 border-transparent px-1 py-1 hover:border-black">Wishlist</p>
            </div>
        </div>
        <!-- stores -->
        <div class="w-4/5 md:w-1/2 h-1/3 mx-auto bg-gray-100 text-center rounded-xl py-4 mt-20 shadow-2xl overscroll-auto">
            <div class="">
                <p class="text-lg md:text-2xl text-black font-bold">Followed Stores</p>
            </div>
            <!-- desktop view -->
            <div class="hidden md:block">
            <div class="hidden md:flex flex-wrap justify-evenly px-2 md:px-10 mt-8 mb-8 cursor-pointer">
                <div class="w-1/4 md:w-5/12 bg-[#024486] rounded-lg ml-1 mr-1 md:ml-5 md:mr-5 items-center justify-center shadow-2xl border-2 border-solid">
                    <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                    <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-5">
                        <p class="text-white text-2xl font-semibold">Adidas</p>
                    </div>
                </div>
                <div class="w-1/4 md:w-5/12 bg-[#024486] rounded-lg ml-1 mr-1 md:ml-5 md:mr-5 items-center justify-center shadow-2xl border-2 border-solid">
                    <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                    <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-5">
                        <p class="text-white text-sm md:text-2xl font-semibold">Adidas</p>
                    </div>
                </div>

            </div>
            <div class="hidden md:flex flex-wrap justify-evenly px-2 md:px-10 mt-8 mb-8 cursor-pointer">
                <div class="w-1/4 md:w-5/12 bg-[#024486] rounded-lg ml-1 mr-1 md:ml-5 md:mr-5 items-center justify-center shadow-2xl border-2 border-solid">
                    <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                    <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-5">
                        <p class="text-white text-2xl font-semibold">Adidas</p>
                    </div>
                </div>
                <div class="w-1/4 md:w-5/12 bg-[#024486] rounded-lg ml-1 mr-1 md:ml-5 md:mr-5 items-center justify-center shadow-2xl border-2 border-solid">
                    <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                    <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-5">
                        <p class="text-white text-sm md:text-2xl font-semibold">Adidas</p>
                    </div>
                </div>

            </div>
            <div class="hidden md:flex flex-wrap justify-evenly px-2 md:px-10 mt-8 mb-8 cursor-pointer">
                <div class="w-1/4 md:w-5/12 bg-[#024486] rounded-lg ml-1 mr-1 md:ml-5 md:mr-5 items-center justify-center shadow-2xl border-2 border-solid">
                    <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                    <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-5">
                        <p class="text-white text-2xl font-semibold">Adidas</p>
                    </div>
                </div>
                <div class="w-1/4 md:w-5/12 bg-[#024486] rounded-lg ml-1 mr-1 md:ml-5 md:mr-5 items-center justify-center shadow-2xl border-2 border-solid">
                    <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                    <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-5">
                        <p class="text-white text-sm md:text-2xl font-semibold">Adidas</p>
                    </div>
                </div>

            </div>
            </div>
            <!-- mobile view -->
            <div class="md:hidden"> 
            <div class="flex flex-wrap justify-evenly mt-5">
                <div class="w-40 md:w-5/12 bg-[#024486] rounded-lg  items-center justify-center shadow-2xl border-2 border-solid">
                    <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                    <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-2">
                        <p class="text-white text-lg font-semibold">Adidas</p>
                    </div>
                </div>
                <div class="w-40 md:w-5/12 bg-[#024486] rounded-lg  items-center justify-center shadow-2xl border-2 border-solid">
                    <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                    <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-2">
                        <p class="text-white text-lg font-semibold">Adidas</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-evenly mt-5">
                <div class="w-40 md:w-5/12 bg-[#024486] rounded-lg  items-center justify-center shadow-2xl border-2 border-solid">
                    <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                    <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-2">
                        <p class="text-white text-lg font-semibold">Adidas</p>
                    </div>
                </div>
                <div class="w-40 md:w-5/12 bg-[#024486] rounded-lg  items-center justify-center shadow-2xl border-2 border-solid">
                    <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                    <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-2">
                        <p class="text-white text-lg font-semibold">Adidas</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap justify-evenly mt-5">
                <div class="w-40 md:w-5/12 bg-[#024486] rounded-lg  items-center justify-center shadow-2xl border-2 border-solid">
                    <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                    <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-2">
                        <p class="text-white text-lg font-semibold">Adidas</p>
                    </div>
                </div>
                <div class="w-40 md:w-5/12 bg-[#024486] rounded-lg  items-center justify-center shadow-2xl border-2 border-solid">
                    <img src="../resources/img/adidas-logo-svgrepo-com.svg" alt="" class="w-4/5 mx-auto mt-5 rounded-lg">
                    <div class="bg-orange-400 w-full mb-0 mt-8 rounded-br-lg rounded-bl-lg py-2">
                        <p class="text-white text-lg font-semibold">Adidas</p>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="w-full  flex flex-col items-center justify-center font-['Poppins'] bg-[#024486] mt-auto">
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