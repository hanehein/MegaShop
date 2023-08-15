<?php include "../../Controller/orders/orderHistoryReviewController.php" ?>

<!-- Start header -->
<?php
$hasJsFile = FALSE;
include "../components/header.php";
?>
<!-- End header -->

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php"; ?>
        <div class="col-span-5">
            <?php
            $currentMenu = "Order History Review";
            include "../components/navbar.php";
            ?>

            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>

                <!-- start search bar -->
                <div class="px-5 mb-5 flex justify-between items-center">
                    <div>
                        <input class="w-[400px] p-2 rounded-lg border border-[#66CC33] shadow" type="text" placeholder="Search By ID Number">
                        <button class="bg-[#66CC33] text-white rounded-lg p-2 px-3">search</button>
                    </div>
                    <div>
                        <!-- <div class="bg-[#66CC33] py-2 px-5 text-[14px] font-semibold rounded-md">
                            <div class="broder-b-2 border-slate-500">
                                <ion-icon name="calendar-outline"></ion-icon>
                                Sort By Date
                            </div>
                            <div class="text-center"><span>2023/08/05</span></div>
                        </div> -->
                    </div>
                </div>


                <div>
                    <!-- Orderlists container -->
                    <div class="px-5">
                        <!-- start orderlist -->
                        <?php foreach ($orderHistoryLists as $order) { ?>
                            <table class="min-w-full table-auto rounded-lg overflow-hidden p-3 mb-4 shadow-md">
                                <thead>
                                    <tr class="border-b-2 border-slate-500 bg-white">
                                        <th class="px-6 py-3 text-[#66CC33] text-left text-sm font-semibold tracking-wider">
                                            Order ID
                                        </th>
                                        <th class="px-6 py-3 text-[#66CC33] text-left text-sm font-semibold tracking-wider">
                                            Payment Method
                                        </th>
                                        <th class="px-6 py-3 text-[#66CC33] text-left text-sm font-semibold tracking-wider">
                                            Payment Status
                                        </th>
                                        <th class="px-6 py-3 text-[#66CC33] text-left text-sm font-semibold tracking-wider">
                                            Fulfillment
                                        </th>
                                        <th class="px-6 py-3 text-[#66CC33] text-left text-sm font-semibold tracking-wider">
                                            Customer
                                        </th>
                                        <th class="px-6 py-3 text-[#66CC33] text-left text-sm font-semibold tracking-wider">
                                            Total Price
                                        </th>
                                        <th class="px-6 py-3 text-[#66CC33] text-left text-sm font-semibold tracking-wider">
                                            Date
                                        </th>
                                        <th class="px-6 py-3 text-[#66CC33] text-left text-sm font-semibold tracking-wider">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 ">
                                            <a href="../../Controller/orders/orderDetailController.php?order_id=<?= $order["order_id"] ?>" 
                                            class="underline text-blue-500"><?= $order["order_code"] ?></a>
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <span>Cash On Delivery</span>
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <span>Unpaid</span>
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <span>In Progress</span>
                                        </td>
                                        <td class="px-6 py-4 "><span><?= $order["cus_name"] ?></span></td>
                                        <td class="px-6 py-4 "><span><?= $order["total_amount"] ?> MMK</span></td>
                                        <td class="px-6 py-4 "><span><?= $order["order_create_date"] ?></span></td>
                                        <td class="px-6 py-4 flex space-x-3">
                                            <?php if ($order["order_status"] == 1) { ?>
                                                <button class="px-3 py-1 bg-green-400 text-white rounded-md">Confrimed</button>
                                            <?php } else if ($order["order_status"] == 2) { ?>
                                                <button class="px-3 py-1 bg-red-400 text-white rounded-md">Rejected</button>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        <?php } ?>
                        <!-- end orderlist -->
                    </div>

                    <!-- Pagination -->
                    <div class="w-full flex justify-center p-x mb-3">
                        <!-- Pagination component -->
                        <nav class="flex items-center justify-center">
                            <!-- Previous button -->
                            <a href="?page=<?= $page-1 ?>" class="px-3 py-1 bg-white border border-[#66CC33]  rounded-tl-md rounded-bl-md 
                            <?php if($page <= 1) { echo "pointer-events-none"; } ?>
                            ">
                                <ion-icon name="chevron-back"></ion-icon>
                            </a>
                            <!-- Page numbers -->
                            <?php for ($i = 1; $i <= $pageLists ; $i++) { ?>
                                <a href="?page=<?= $i ?>" 
                                class="<?php if($i == $page) {echo "pagination-active";} ?> px-3 py-1 border border-[#66CC33] text-bold"><?= $i ?></a>
                            <?php } ?>
                            
                            <!-- Next button -->
                            <a href="?page=<?= $page+1 ?>" class="px-3 py-1 bg-white border border-[#66CC33] rounded-tr-md rounded-br-md
                            <?php if($page >= $pageLists) { echo "pointer-events-none"; } ?>
                            ">
                                <ion-icon name="chevron-forward"></ion-icon>
                            </a>
                        </nav>
                    </div>

                </div>

            </div>
        </div>
    </section>
</body>

<?php include "../components/footer.php"; ?>