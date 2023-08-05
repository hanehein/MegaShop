<?php
ini_set('display_errors', 1);
// session_start();
include "../../Controller/dashboardController.php";
// print_r($admin);
?>
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
    <link rel="stylesheet" href="../resources/css/dashboard.css">
</head>

<body class="overflow-x-hidden">
    <!-- main div -->
    <div class="min-h-screen flex text-gray-800 ">
        <!-- dashboard div -->
        <?php
        include "../components/menu.php";
        ?>
        <!-- data display div -->
        <div class="w-full flex flex-col items-center justify-start bg-gray-200 space-y-5 font-['Poppins']">
            <!-- 1st sectioin -->
            <button class="flex items-center justify-center bg-[#003366] w-auto h-10 rounded-md text-white font-xs font-semibold px-4 py-2 space-x-2">
                <p>Welcome</p> <p><?=$admin[0]["admin_name"]?></p>
            </button>
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