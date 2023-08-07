<?php 
session_start();
// include "../../Controller/DashboardController.php";
// print_r($supplier);
?>
<?php
$hasJsFile = FALSE;
include "../components/header.php";
?>

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php" ?>

        <div class="col-span-5">
            <?php
            $currentMenu = "Dashboard";
            include "../components/navbar.php";
            ?>

            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>
                <div class="details grid grid-cols-4 space-x-6 p-5">
                    

                    <div class="bg-[#FFDD55] bg-opacity-30 p-5 flex space-x-5 justify-between items-center rounded-lg">
                        <div class="w-[50px] h-[50px] bg-white flex justify-center items-center rounded-md">
                            <ion-icon class="text-orange-500 text-[40px] rounded-md" name="cart-outline"></ion-icon>
                        </div>
                        <div>
                            <h2 class="text-slate-500 text-xl font-bold">Total Products</h2>
                            <div class="text-center">
                                <span>102</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#F68721] bg-opacity-30 p-5 flex space-x-5 justify-between items-center rounded-lg">
                        <div class="w-[50px] h-[50px] bg-white flex justify-center items-center rounded-md">
                            <ion-icon class="text-orange-500 text-[40px] rounded-md" name="bag-handle-outline"></ion-icon>
                        </div>
                        <div>
                            <h2 class="text-slate-500 text-xl font-bold">Total Orders</h2>
                            <div class="text-center">
                                <span>102</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#1EE1E1] bg-opacity-30 p-5 flex space-x-5 justify-between items-center rounded-lg">
                        <div class="w-[50px] h-[50px] bg-white flex justify-center items-center rounded-md">
                            <ion-icon class="text-orange-500 text-[40px] rounded-md" name="cash-outline"></ion-icon>
                        </div>
                        <div>
                            <h2 class="text-slate-500 text-xl font-bold">Total Sells</h2>
                            <div class="text-center">
                                <span>105200 Ks</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#361EE1] bg-opacity-30 p-5 flex space-x-5 justify-between items-center rounded-lg">
                        <div class="w-[50px] h-[50px] bg-white flex justify-center items-center rounded-md">
                            <ion-icon class="text-orange-500 text-[40px] rounded-md" name="people-outline"></ion-icon>
                        </div>
                        <div>
                            <h2 class="text-slate-500 text-xl font-bold">Total Customers</h2>
                            <div class="text-center">
                                <span>105</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="grid grid-cols-2 gap-4 p-5">
                    <div class="recent-order bg-white rounded-lg p-5">
                        <h2 class="font-bold text-lg">Recent Orders</h2>
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="border-b border-slate-500">
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        ID
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Date
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Payment
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Fulfillment
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 ">
                                        #A580
                                    </td>
                                    <td class="px-6 py-4 ">
                                        June 30, 2023
                                    </td>
                                    <td class="px-6 py-4 text-green  text-[#2C7607]">
                                        Paid
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span class="bg-green-500 py-1 px-2 rounded-md text-white font-semibold">Delivered</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 ">
                                        #A581
                                    </td>
                                    <td class="px-6 py-4 ">
                                        June 30, 2023
                                    </td>
                                    <td class="px-6 py-4 text-green  text-slate-500">
                                        UnPaid
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span class="bg-orange-500 py-1 px-2 rounded-md text-white font-semibold">In
                                            Progress</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 ">
                                        #A581
                                    </td>
                                    <td class="px-6 py-4 ">
                                        June 30, 2023
                                    </td>
                                    <td class="px-6 py-4 text-green  text-slate-500">
                                        UnPaid
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span class="bg-red-500 py-1 px-2 rounded-md text-white font-semibold">Cancel</span>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                    <div class="top-product bg-white rounded-lg shadow-md p-5">
                        <h2 class="font-bold text-lg">Top Products</h2>
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="border-b border-slate-500">
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Sold
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Amount
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4">
                                        Homesick New Home Reed Diffuser
                                    </td>
                                    <td class="px-6 py-4 ">
                                        10
                                    </td>
                                    <td class="px-6 py-4">
                                        120,000 Ks
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 ">
                                        Addias Shoes
                                    </td>
                                    <td class="px-6 py-4 ">
                                        8
                                    </td>
                                    <td class="px-6 py-4">
                                        157,000 Ks
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 ">
                                        Gray Light Bulb
                                    </td>
                                    <td class="px-6 py-4 ">
                                        5
                                    </td>
                                    <td class="px-6 py-4">
                                        14,000 Ks
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>


<?php include "../components/footer.php"; ?>