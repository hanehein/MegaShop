<?php
ini_set('display_errors', 1);
include "../../Controller/dashboardController.php";

$today = date("Y-m-d");
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
    <link rel="stylesheet" href="../resources/css/chart.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
    <script src="../resources/js/chart.js" defer></script>
</head>

<body class="overflow-x-hidden">
    <!-- main div -->
    <div class="min-h-screen flex text-gray-800">
        <!-- dashboard div -->
        <?php
        include "../components/menu.php";
        ?>
        <!-- data display div -->
        <div class="w-5/6 flex flex-col items-center justify-center bg-gray-200  font-['Poppins'] py-4">
            <div class="w-[70rem]  flex items-center justify-between text-md mt-1 font-semibold">
                <button class="rounded-tr-lg rounded-bl-lg flex items-center justify-center bg-[#003366] w-auto   text-white font-xs  px-4 py-2 space-x-2 mt-3 border-2 hover:bg-[#66CC33]">
                    <p>Welcome Back</p>
                    <p><?= $admin[0]["admin_name"] ?></p>
                </button>
                <div class="w-32 h-8 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    <input type="date" name="" id="" value="<?= $today ?>" class=" text-xs bg-white text-[#003366] text-xs rounded-tr-lg rounded-bl-lg font-semibold hover:text-white hover:bg-[#003366]">
                </div>
            </div>
            <!-- 1st sectioin -->
            <div class=" flex w-[70rem]  items-center justify-center  h-auto mt-5 space-x-20">
                <div class="w-[15%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Verified Suppliers</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold">
                            <?php
                            if ($supplier == null) {
                                echo "0";
                            } else {
                                echo $supplier[0]["total_suppliers"];
                            }
                            ?>
                        </p>
                    </div>
                </div>

                <div class="w-[15%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black ">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Verified Customers</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold">
                            <?php
                            if ($customer == null) {
                                echo "0";
                            } else {
                                echo $customer[0]["total_customers"];
                            }
                            ?>
                        </p>
                    </div>
                </div>

                <div class="w-[15%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Verified Products</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold">
                            <?php
                            if ($product == null) {
                                echo "0";
                            } else {
                                echo $product[0]["total_products"];
                            }
                            ?>
                        </p>
                    </div>
                </div>

                <div class="w-[15%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Total Brand</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold">
                            <?php
                            if ($brand == null) {
                                echo "0";
                            } else {
                                echo $brand[0]["total_brand"];
                            }
                            ?>
                        </p>
                    </div>
                </div>

                <div class="w-[15%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Total Category</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold">
                            <?php
                            if ($category == null) {
                                echo "0";
                            } else {
                                echo $category[0]["total_category"];
                            }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- 2nd section -->
            <div class=" flex w-[70rem]  items-center justify-center  h-auto mt-5 space-x-20  ">
                <div class="w-[15%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Pending Suppliers</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold">
                            <?php
                            if ($pendingSuppliers == null) {
                                echo "0";
                            } else {
                                echo $pendingSuppliers[0]["pending_suppliers"];
                            }
                            ?></p>
                    </div>
                </div>

                <div class="w-[15%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Total Sells</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"></p>
                    </div>
                </div>

                <div class="w-[15%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Pending Products</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold">
                            <?php
                            if ($pendingProducts == null) {
                                echo "0";
                            } else {
                                echo $pendingProducts[0]["pending_products"];
                            }
                            ?>
                        </p>
                    </div>
                </div>

                <div class="w-[15%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Total Orders</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold">
                            <?php
                            if ($order == null) {
                                echo "0";
                            } else {
                                echo $order[0]["total_orders"];
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="w-[15%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Rating & Review</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold">
                            <?php
                                if ($feedback == null) {
                                    echo "0";
                                } else {
                                    echo $feedback[0]["total_feedbacks"];
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
            <!-- 3rd section -->
            <div class=" flex w-[70rem] items-center justify-center h-auto mt-5 bg-gray-100 rounded-md space-x-24 shadow-md shadow-black py-2">
                <div class="barChart mt-5">
                    <div class="w-56  flex items-center justify-start bg-gray-400 px-2 py-2 rounded-md">
                        <p class="text-sm text-white">Daily Numbers of Subscriber</p>
                    </div>
                    <canvas id="myChart"></canvas>
                </div>
                <div class="">
                    <div class="w-56  flex items-center justify-start bg-gray-400 px-2 py-2 rounded-md">
                        <p class="text-sm text-white">Suppliers' Types of Plan</p>
                    </div>
                    <canvas id="planChart"></canvas>
                </div>
            </div>
            <!-- 4th section -->
            <div class="flex w-[70rem] items-center justify-center h-auto mt-5 bg-gray-100 rounded-md space-x-24 shadow-md shadow-black py-2">
                <div class="barChart">
                    <div class="w-40 f flex items-center justify-start bg-gray-400 px-2 py-2 rounded-md mt-3">
                        <p class="text-sm text-white">Top Brand</p>
                    </div>
                    <canvas id="productChart"></canvas>
                </div>
                <div class="">
                    <div class="w-40 flex items-center justify-start bg-gray-400 px-2 py-2 rounded-md">
                        <p class="text-sm text-white">Top Category</p>
                    </div>
                    <canvas id="donutChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- chart_js -->
    <script>
        let serverData = <?php echo json_encode($chart) ?>;
        let serverData1 = <?php echo json_encode($plan) ?>;
        let dates = [];
        let totalPerson = [];
        let totalPlan = [];
        //bar chart
        for (let index = 0; index < serverData.length; index++) {
            dates.push(serverData[index].create_date);
            totalPerson.push(serverData[index].countPerson);
        }
        //pie chart
        for (let index = 0; index < serverData1.length; index++) {
            totalPlan.push(serverData1[index].plan);
        }
    </script>
</body>


</html>