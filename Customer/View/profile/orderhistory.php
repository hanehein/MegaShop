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
        <nav class="bg-white border-gray-200 w-full">
            <div class="w-full flex flex-wrap items-center justify-between mx-auto py-2 px-1">
                <!-- logo -->
                <a href="#" class="flex flex-col items-center justify-center font-['Wallpoet'] text-2xl text-[#024486] leading-none cursor-pointer">
                    <p class="">MEGA</p>
                    <p>SHOP</p>
                </a>
                <!-- humbermenu -->
                <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-[#024486] rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <!-- ul lists -->
                <div class="hidden w-full md:flex md:items-center md:justify-center md:w-auto" id="navbar-dropdown">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:flex-wrap md:space-x-8 md:mt-0 md:border-0 md:bg-white  font-['Poppins']">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Home</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Products<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-slate-200 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:text-white hover:bg-[#024486]">Categories</a>
                                </div>
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Fashion</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Home & Lifestyles</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Health & Beauty</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Kitchen ware</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Electronics</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Babies & Toys</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Sports & Outdoors</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Shops</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact Us</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Sign In</a>
                        </li>
                    </ul>
                    <div class="md:flex md:items-center md:justify-center cursor-pointer md:ml-6">
                        <a href="#" class="block md:py-2 md:pl-3 md:pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"><ion-icon name="cart" size="large" class="text-[#003366] hover:text-[#F68721] "></ion-icon><ion-icon name="ellipse" class="text-[#F68721] mb-6 hover:text-[#003366]"></ion-icon></a>
                        <a href="#" class="block md:py-2 md:pl-3 md:pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"><ion-icon name="person-circle" size="large" class="text-[#003366] md:pl-4 hover:text-[#F68721]"></ion-icon></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- body -->
    <div class="flex flex-col md:flex-row justify-between items-center mt-18 overflow-y-auto mb-10">
        <!-- profile section -->
        <div class="hidden md:w-1/6 h-1/2 mx-auto bg-gray-100 text-center rounded-xl py-4 mt-36 shadow-2xl md:flex flex-row md:flex-col">

            <p class="text-xl font-bold py-3 hidden md:block">User Profile</p>

            <div class="w-full h-1 bg-black hidden md:block"></div>

            <p class="text-md py-3 font-light hover:font-semibold cursor-pointer">User Info</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Followed Stores</p>

            <p class="text-md py-3 font-semibold cursor-pointer hover:font-semibold">Order History</p>

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
        <!-- history -->
        <div class="w-full md:w-1/2 items-center flex mx-auto mt-20">
            <div class="flex flex-col items-center justify-center">
                <p class="text-xl font-semibold">
                    Order History
                </p>
                <div class="rounded-lg  bg-[#FFFFFF] shadow-2xl mb-3 mt-3 border-solid border-2">
                    <div class="bg-[#003366] text-white text-lg md:text-xl font-semibold rounded-tr-lg rounded-tl-lg px-5 py-3">
                        Traffic Star >>>
                    </div>
                    <div class="flex items-center justify-between">
                        <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/3 md:w-1/6 h-1/3 ml-10 mt-3 rounded-lg mb-3">
                        <div class="py-3 text-left px-5 mr-10 ml-5 md:mr-20">
                            <p class="font-semibold text-sm md:text-lg mb-2 mt-2"> Tucano Backpacks TU-BP01</p>
                            <p class="mb-2 mt-2 text-xs">Tucano, Color Family:Blue</p>
                            <p class="mb-2 mt-2 text-xs">Color :Blue</p>
                            <p class="mb-2 mt-2 text-xs">Size : ###</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg  bg-[#FFFFFF] shadow-2xl mb-3 mt-3 border-solid border-2">
                    <div class="bg-[#003366] text-white text-lg md:text-xl font-semibold rounded-tr-lg rounded-tl-lg px-5 py-3">
                        Traffic Star >>>
                    </div>
                    <div class="flex items-center justify-between">
                        <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/3 md:w-1/6 h-1/3 ml-10 mt-3 rounded-lg mb-3">
                        <div class="py-3 text-left px-5 mr-10 ml-5 md:mr-20">
                            <p class="font-semibold text-sm md:text-lg mb-2 mt-2"> Tucano Backpacks TU-BP01</p>
                            <p class="mb-2 mt-2 text-xs">Tucano, Color Family:Blue</p>
                            <p class="mb-2 mt-2 text-xs">Color :Blue</p>
                            <p class="mb-2 mt-2 text-xs">Size : ###</p>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg  bg-[#FFFFFF] shadow-2xl mb-3 mt-3 border-solid border-2">
                    <div class="bg-[#003366] text-white text-lg md:text-xl font-semibold rounded-tr-lg rounded-tl-lg px-5 py-3">
                        Traffic Star >>>
                    </div>
                    <div class="flex items-center justify-between">
                        <img src="../resources/img/backpack 1.jpg" alt="" class="w-1/3 md:w-1/6 h-1/3 ml-10 mt-3 rounded-lg mb-3">
                        <div class="py-3 text-left px-5 mr-10 ml-5 md:mr-20">
                            <p class="font-semibold text-sm md:text-lg mb-2 mt-2"> Tucano Backpacks TU-BP01</p>
                            <p class="mb-2 mt-2 text-xs">Tucano, Color Family:Blue</p>
                            <p class="mb-2 mt-2 text-xs">Color :Blue</p>
                            <p class="mb-2 mt-2 text-xs">Size : ###</p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>