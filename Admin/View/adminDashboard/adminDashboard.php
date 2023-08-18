<?php
ini_set('display_errors', 1);
session_start();
$today = date("Y-m-d");
$admin = $_SESSION["admin"];
$supplier = $_SESSION["totalSuppliers"];
$customer = $_SESSION["totalCustomers"];
$product = $_SESSION["totalProducts"];
$brand = $_SESSION["totalBrand"];
$category = $_SESSION["totalCategory"];
$chart = $_SESSION["chart"];
$plan = $_SESSION["planChart"];
// print_r($chart);
// print_r($customer);
// echo "</br>";
// print_r($admin);
// echo "</br>";
// print_r($supplier);
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
    <script src="../resources/js/fetch.js" defer></script>
</head>

<body class="overflow-x-hidden">
    <!-- main div -->
    <div class="min-h-screen flex text-gray-800 ">
        <!-- dashboard div -->
        <?php
        include "../components/menu.php";
        ?>
        <!-- data display div -->
        <div class="w-5/6 flex flex-col items-start justify-center bg-gray-200  font-['Poppins'] px-10 shadow-md shadow-white">
            <div class="w-[65rem]  flex items-center justify-between text-md mt-1 font-semibold">
                <button class="rounded-tr-lg rounded-bl-lg flex items-center justify-center bg-[#003366] w-auto   text-white font-xs  px-4 py-2 space-x-2 mt-3 border-2 hover:bg-[#66CC33]">
                    <p>Welcome</p>
                    <p><?= $admin[0]["admin_name"] ?></p>
                </button>
                <div class="w-32 h-8 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    <input type="date" name="" id="" value="<?= $today ?>" class=" text-xs bg-white text-[#003366] text-xs rounded-tr-lg rounded-bl-lg font-semibold hover:text-white hover:bg-[#003366]">
                </div>
            </div>
            <!-- 1st sectioin -->
            <div class="flex items-center justify-center space-x-3 text-md mt-3 font-semibold ">
                <ion-icon name="grid-outline" class="text-[#66CC33]"></ion-icon>
                <p class="text-[#66CC33]">Suppliers & Customers</ion-icon></p>
            </div>
            <div class=" flex w-[65rem]  items-center justify-center  h-auto mt-3 space-x-10  ">

                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Total Suppliers</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"><?= $supplier[0]["total_suppliers"] ?></p>
                    </div>
                </div>

                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black ">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Total Customers</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"><?= $customer[0]["total_customers"] ?></p>
                    </div>
                </div>

                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black ">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Gold Plan</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"></p>
                    </div>
                </div>

                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black ">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Silver Plan</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"></p>
                    </div>
                </div>
                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black ">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Basic Plan</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"></p>
                    </div>
                </div>
            </div>
            <!-- 2nd section -->
            <div class="flex items-center justify-center space-x-3 text-md mt-3 font-semibold ">
                <ion-icon name="grid-outline" class="text-[#66CC33]"></ion-icon>
                <p class="text-[#66CC33]">Products</ion-icon></p>
            </div>
            <div class=" flex w-[65rem]  items-center justify-center  h-auto mt-3 space-x-10  ">
                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Total Products</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"><?= $product[0]["total_products"] ?></p>
                    </div>
                </div>

                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Total Brand</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"><?= $brand[0]["total_brand"] ?></p>
                    </div>
                </div>

                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Total Category</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"><?= $category[0]["total_category"] ?></p>
                    </div>
                </div>

                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Total Product Review</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"></p>
                    </div>
                </div>
                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Total Customer Review</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"></p>
                    </div>
                </div>
            </div>
            <!-- 3rd section -->
            <div class="flex items-center justify-center space-x-3 text-md mt-3  font-semibold ">
                <ion-icon name="grid-outline" class="text-[#66CC33]"></ion-icon>
                <p class="text-[#66CC33]">Orders</ion-icon></p>
            </div>
            <div class=" flex w-[65rem]  items-center justify-center  h-auto mt-3 space-x-10  ">
                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm">Total Order</p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"></p>
                    </div>
                </div>

                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm"></p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"></p>
                    </div>
                </div>

                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm"></p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"></p>
                    </div>
                </div>

                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm"></p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"></p>
                    </div>
                </div>
                <div class="w-[18%] h-auto flex flex-col item-center justify-center  rounded-md shadow-md shadow-black">
                    <div class="flex flex-col items-center justify-center w-full h-10 bg-[#003366]  space-y-2 rounded-t-lg">
                        <p class="text-white text-sm"></p>
                    </div>
                    <div class="w-full h-12 bg-gray-100 flex flex-col items-center justify-center  space-y-2 rounded-b-lg">
                        <p class="text-[#003366] text-sm font-semibold"></p>
                    </div>
                </div>
            </div>
            <!-- 4th section -->
            <div class=" flex w-[65rem]  items-center justify-between  h-auto mt-5 bg-gray-100 rounded-md">
                <div class="barChart">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="pieChart">
                    <canvas id="planChart"></canvas>
                </div>
            </div>
            <!-- 5th section -->
            <div class="w-[65rem]  flex items-center justify-between  h-auto mt-3 space-x-5 py-3">
                <!-- left graph -->
                <div class="w-[30rem] flex flex-col items-center justify-center ">
                    <div class="flex items-center justify-center space-x-3 text-md font-semibold ">
                        <ion-icon name="ribbon-outline" class="text-[#66CC33]"></ion-icon>
                        <p class="text-[#66CC33]">Best Selling Items</ion-icon></p>
                    </div>
                    <table cellpadding="12" class="w-full table-fixed border-collapse text-[#003366] text-center text-xs bg-gray-100 mt-2 border-2 ">
                        <thead class=" bg-[#0033667a] text-white text-sm font-semibold h-16 ">
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
                <div class="w-[30rem] flex flex-col items-center justify-center ">
                    <div class="flex items-center justify-center space-x-3 text-md font-semibold ">
                        <ion-icon name="ribbon-outline" class="text-[#66CC33]"></ion-icon>
                        <p class="text-[#66CC33]">Best Seller Shop</ion-icon></p>
                    </div>
                    <table cellpadding="12" class="w-full table-fixed border-collapse text-text-[#003366] bg-gray-100 text-center text-xs m-2">
                        <thead class=" bg-[#0033667a]  text-white text-sm font-semibold h-16">
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
           totalPerson.push(serverData[index].countPerson)
        }
        //pie chart
        for (let index = 0; index < serverData1.length; index++) {
            totalPlan.push(serverData1[index].plan);
        }
       
    </script>
</body>


</html>