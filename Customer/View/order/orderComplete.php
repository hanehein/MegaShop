<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order_complete</title>
    
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css">
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
                            <a href="#" class="block py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Sing In</a>
                        </li>
                    </ul>
                    <div class="md:flex md:items-center md:justify-center cursor-pointer md:ml-6">
                        <a href="#" class="block md:py-2 md:pl-3 md:pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"><ion-icon name="cart" size="large" class="text-[#003366] hover:text-[#F68721] "></ion-icon><ion-icon name="ellipse" class="text-[#F68721] mb-6 hover:text-[#003366]"></ion-icon></a>
                        <a href="#" class="block md:py-2 md:pl-3 md:pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"><ion-icon name="person-circle" size="large" class="text-[#003366] md:pl-4 hover:text-[#F68721]"></ion-icon></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- second section -->
        <div class="w-full h-10 flex items-center justify-start bg-gray-400 font-['Poppins'] px-2 space-x-3">
            <a href=""><span class="text-white text-sm">shopping cart</span></a>
            <ion-icon name="arrow-redo-circle" class="text-[#F68721]"></ion-icon>
            <a href=""><span class="text-white text-sm">checkout</span></a>
            <ion-icon name="arrow-redo-circle" class="text-[#F68721]"></ion-icon>
            <a href=""><span class="text-blue-800 text-sm ">order complete</span></a>
        </div>
        <!-- third section -->
        <div class="w-full container mx-auto flex flex-col items-start justify-center font-['Poppins'] bg-blue-400 space-y-2">
            <div class="flex items-center justify-center">
                <p class="text-sm text-[#024486] font-semibold">We received your order. Please make your payment.</p>
            </div>
            <div class="flex items-center justify-between">
                <p class="text-sm text-[#024486]">Payable Amount</p>
                <p class="text-sm text-[#024486]">20,000 MMK</p>
            </div class="flex items-center justify-between">
                <button class="bg-[#F68721] rounded-md w-40 px-2p py-2 text-sm text-white"><a href="">Continue Shopping</a></button>
            <div>

            </div>
        </div>
        <!-- footer responsive -->
        <div class="w-full  flex flex-col items-center justify-center font-['Poppins'] bg-[#024486]">
            <!-- first one -->
            <div class="md:w-full w-[28rem] container md:flex mx-auto  items-center justify-between sm:justify-center mt-3 py-3 md:space-x-20">
                <!-- quicklink -->
                <div class=" md:w-50 w-[28rem] flex flex-col  items-center justify-center text-white text-xs px-3 py-2">
                    <p>Quick Links</p>
                    <ul class="list-disc mt-2">
                        <li>About Us</li>
                        <li>Pricacy & Policy</li>
                    </ul>
                </div>
                <!-- Help -->
                <div class=" md:w-50 w-[28rem] flex flex-col  items-center justify-center text-white text-xs px-3 py-2 md:border-hidden border-t-2  border-b-white">
                    <p>Help?</p>
                    <ul class="list-disc mt-2">
                        <li>Payment</li>
                        <li>FAQ</li>
                    </ul>
                </div>
                <!-- Contact Us -->
                <div class=" w-50 w-[28rem] flex flex-col items-center justify-center text-white text-xs px-3 py-2 border-t-2 border-b-white  md:border-hidden ">
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
<!-- blue 800
    slate-100
    orange-500
     primary - #024486
     secondary - #F68721
     tertiary - #F6F6F6
    <ion-icon name="person-circle"></ion-icon>
    <ion-icon name="cart"></ion-icon>
    <ion-icon name="ellipse"></ion-icon>
    <ion-icon name="caret-down"></ion-icon>
    <ion-icon name="logo-facebook"></ion-icon>
    <ion-icon name="logo-instagram"></ion-icon>
    <ion-icon name="logo-twitter"></ion-icon>
    <ion-icon name="search"></ion-icon>
    <ion-icon name="phone-portrait"></ion-icon>
    <ion-icon name="mail"></ion-icon>
    <ion-icon name="gift"></ion-icon>
    class="text-[#F68721]"
    <ion-icon name="arrow-redo-circle"></ion-icon>
-->

<!-- <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id="> -->