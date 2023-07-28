<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="overflow-x-hidden">
    <!-- main div -->
    <div class="min-h-screen flex text-gray-800 ">
        <!-- dashboard div -->
        <div class="fixed flex flex-col top-0 left-0 w-64 bg-white h-full border-r">
            <div class="flex justify-center items-center mt-3">
                <div class="font-['Wallpoet'] text-2xl text-[#024486] leading-none cursor-pointer">
                    <p class="">MEGA</p>
                    <p>SHOP</p>
                </div>
            </div>
            <!-- Menu -->
            <div class="overflow-y-auto overflow-x-hidden flex-grow font-['Poppins']">
                <!-- ul list -->
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="grid" class=""></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="diamond"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Income</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate font-semibold">Messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="people"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Supplier Lists</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="people"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Customer Lists</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="list-circle"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Proudcts Lists</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="cube"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Order Lists</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="help-circle"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">FAQ</span>
                        </a>
                    </li>
                    <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-500">Settings</div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="person-circle"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Admin Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="apps"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Web UI</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="log-out"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- data display div -->
        <div class="w-full flex flex-col items-center justify-start bg-gray-200 space-y-5 font-['Poppins']">
            <!-- 1st sectioin -->
            <div class="flex  items-center justify-end w-full h-auto mt-3 space-x-7 px-4">
                <!-- 1 card -->
                <div class="w-[10%] h-auto flex flex-col item-center justify-center bg-white">
                    <div class="flex flex-col items-center justify-center w-full h-auto bg-white py-2">
                        <!-- circle -->
                        <div class="w-24 h-24 flex flex-col items-center justify-center rounded-full border-8 border-[#00336698]">
                            <p class="text-sm text-[#003366] text-center">Total</p>
                            <p class="text-lg text-[#003366] font-semibold">25</p>
                            <p class="text-sm text-[#003366] text-center">Shops</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center w-full h-16 bg-[#003366]  space-y-2">
                        <p class="text-white text-sm">Gold Plan</p>
                        <p class="text-white text-base">10 shops</p>
                    </div>
                    <div class="w-full h-16 flex flex-col items-center justify-center bg-gray-400  space-y-2">
                        <p class="text-white text-sm">Silver Plan</p>
                        <p class="text-white text-base">10 shops</p>
                    </div>
                    <div class="w-full h-16 bg-blue-200 flex flex-col items-center justify-center  space-y-2">
                        <p class="text-white text-sm">Free Trial</p>
                        <p class="text-white text-sm">5 shops</p>
                    </div>
                </div>
                <!-- 2 card -->
                <div class="w-[10%] h-auto flex flex-col item-center justify-center bg-white">
                    <div class="flex flex-col items-center justify-center w-full h-auto bg-white py-2">
                        <!-- circle -->
                        <div class="w-24 h-24 flex flex-col items-center justify-center rounded-full border-8 border-[#00336698] space-y-2">
                            <p class="text-sm text-[#003366] text-center">Total</p>
                            <p class="text-sm text-[#003366] font-semibold">2,5000,000</p>
                            <p class="text-sm text-[#003366] text-center">Ks</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center w-full h-16 bg-[#003366]  space-y-2">
                        <p class="text-white text-sm">Gold Plan</p>
                        <p class="text-white text-base">1,500,000 Ks</p>
                    </div>
                    <div class="w-full h-16 flex flex-col items-center justify-center bg-gray-400  space-y-2">
                        <p class="text-white text-sm">Silver Plan</p>
                        <p class="text-white text-base">1,000,000 Ks</p>
                    </div>
                    <div class="w-full h-16 bg-[#003366] flex flex-col items-center justify-center space-y-2">
                        <p class="text-white text-sm">Website Viewers</p>
                        <p class="text-white text-lg">100</p>
                    </div>
                </div>
                <!-- 3rd card -->
                <div class="w-[10%] h-auto flex flex-col item-center justify-center space-y-8">
                    <div class="flex flex-col items-center justify-center w-full h-32 bg-[#003366]  space-y-2">
                        <p class="text-white text-sm">Total Sales</p>
                        <p class="text-white text-base">1,500,000 Ks</p>
                    </div>

                    <div class="w-full h-32 bg-[#003366] flex flex-col items-center justify-center space-y-2">
                        <p class="text-white text-sm text-center">Total Registered Users</p>
                        <p class="text-white text-lg">100</p>
                    </div>
                </div>
                <!-- 4 cards -->
                <div class="w-[10%] h-auto flex flex-col item-center justify-center space-y-8">
                    <div class="flex flex-col items-center justify-center w-full h-32 bg-[#003366]  space-y-2">
                        <p class="text-white text-sm">Total Products</p>
                        <p class="text-white text-base">300</p>
                    </div>

                    <div class="w-full h-32 bg-[#003366] flex flex-col items-center justify-center space-y-2">
                        <p class="text-white text-sm">Total Orders</p>
                        <p class="text-white text-lg">100</p>
                    </div>
                </div>
                <!-- 5th card -->
                <div class="w-[10%] h-auto flex flex-col item-center justify-center space-y-8">
                    <div class="flex flex-col items-center justify-center w-full h-32 bg-[#003366]  space-y-2">
                        <p class="text-white text-sm">Approved Products</p>
                        <p class="text-white text-base">150 Ks</p>
                    </div>

                    <div class="w-full h-32 bg-[#003366] flex flex-col items-center justify-center space-y-2">
                        <p class="text-white text-sm">Pending Products</p>
                        <p class="text-white text-lg">150</p>
                    </div>
                </div>
                <!-- 6 card -->
                <div class="w-[10%] h-auto flex flex-col item-center justify-center bg-white">
                    <div class="flex flex-col items-center justify-center w-full h-auto bg-white py-2">
                        <!-- circle -->
                        <div class="w-24 h-24 flex flex-col items-center justify-center rounded-full border-8 border-[#00336698]">
                            <p class="text-sm text-[#003366] text-center">Total</p>
                            <p class="text-lg text-[#003366] font-semibold">25</p>
                            <p class="text-sm text-[#003366] text-center">Shops</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center w-full h-16 bg-[#003366]  space-y-2">
                        <p class="text-white text-sm">Gold Plan</p>
                        <p class="text-white text-base">10 shops</p>
                    </div>
                    <div class="w-full h-16 flex flex-col items-center justify-center bg-gray-400  space-y-2">
                        <p class="text-white text-sm">Silver Plan</p>
                        <p class="text-white text-base">10 shops</p>
                    </div>
                    <div class="w-full h-16 bg-[#003366] flex flex-col items-center justify-center  space-y-2">
                        <p class="text-white text-sm">Free Trial</p>
                        <p class="text-white text-sm">5 shops</p>
                    </div>
                </div>
                <!-- 7 card -->
                <div class="w-[10%] h-auto flex flex-col item-center justify-center bg-white">
                    <div class="flex flex-col items-center justify-center w-full h-auto bg-white py-2">
                        <!-- circle -->
                        <div class="w-24 h-24 flex flex-col items-center justify-center rounded-full border-8 border-[#00336698] space-y-2">
                            <p class="text-sm text-[#003366] text-center">Total</p>
                            <p class="text-sm text-[#003366] font-semibold">2,5000,000</p>
                            <p class="text-sm text-[#003366] text-center">Ks</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center w-full h-16 bg-[#003366]  space-y-2">
                        <p class="text-white text-sm">Gold Plan</p>
                        <p class="text-white text-base">1,500,000 Ks</p>
                    </div>
                    <div class="w-full h-16 flex flex-col items-center justify-center bg-gray-400  space-y-2">
                        <p class="text-white text-sm">Silver Plan</p>
                        <p class="text-white text-base">1,000,000 Ks</p>
                    </div>
                    <div class="w-full h-16 bg-[#003366] flex flex-col items-center justify-center space-y-2">
                        <p class="text-white text-sm">Website Viewers</p>
                        <p class="text-white text-lg">100</p>
                    </div>
                </div>
            </div>
            <!-- 2nd section -->
            <div class="flex items-center justify-center w-[50rem] h-52 bg-white mt-3 rounded-md">

            </div>
            <!-- 3rd section -->
            <div class="w-full flex items-center justify-center  mt-3 space-x-5 py-3">
                <!-- left graph -->
                <div class="w-[25rem] flex flex-col items-center justify-center bg-white">
                    <table cellpadding="12" class="w-[25rem] table-fixed border-collapse text-[#003366] text-center text-xs">
                        <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16">
                            <tr>
                                <th>Title</th>
                                <th>Sold Qty</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>Women's Fashion</td>
                                <td>100</td>
                                <td>500,000 Ks</td>
                            </tr>
                            <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>Cosmetics</td>
                                <td>50</td>
                                <td>300,000 Ks</td>
                            </tr>
                            <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>Cosmetics</td>
                                <td>50</td>
                                <td>300,000 Ks</td>
                            </tr>
                            <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>Cosmetics</td>
                                <td>50</td>
                                <td>300,000 Ks</td>
                            </tr>
                            <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>Cosmetics</td>
                                <td>50</td>
                                <td>300,000 Ks</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- right graph -->
                <div class="w-[25rem] flex flex-col items-center justify-center bg-white">
                    <table cellpadding="12" class="w-[25rem] table-fixed border-collapse text-[#003366] text-center text-xs">
                        <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16">
                            <tr>
                                <th>Title</th>
                                <th>Sold Qty</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>Women's Fashion</td>
                                <td>100</td>
                                <td>500,000 Ks</td>
                            </tr>
                            <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>Cosmetics</td>
                                <td>50</td>
                                <td>300,000 Ks</td>
                            </tr>
                            <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>Cosmetics</td>
                                <td>50</td>
                                <td>300,000 Ks</td>
                            </tr>
                            <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>Cosmetics</td>
                                <td>50</td>
                                <td>300,000 Ks</td>
                            </tr>
                            <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>Cosmetics</td>
                                <td>50</td>
                                <td>300,000 Ks</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>