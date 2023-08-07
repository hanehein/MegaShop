<?php
session_start();
$order = $_SESSION["order"];
$orderDetails = $_SESSION["orderDetails"];
?>

<!-- Start header -->
<?php
$hasJsFile = FALSE;
include "../components/header.php";
?>
<!-- End header -->

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php"; ?>
        <div class="col-span-5 relative">
            <?php
            $currentMenu = "Order Code - ".$order["order_code"];
            include "../components/navbar.php";
            ?>

            <!-- start aye myat noe khin -->
            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>

                <div class="bg-white rounded-lg shadow-md p-5">
                    <h2 class="px-5 py-4 text-xl font-bold border-b border-slate-400 mb-10">
                        Order Details
                    </h2>
                    <div class="px-5 py-4 flex justify-between items-end mb-10">
                        <div class="">
                            <div class="mb-3">
                                <span><?= $order["cus_name"] ?></span>
                            </div>
                            <div class="mb-3">
                                <span>gfgfgfgfg, fgfgf, gfgfgf-5545454, Tawmae, Yangon</span>
                            </div>
                            <div class="mb-3">
                                <span>Email : <?= $order["cus_email"] ?></span>
                            </div>
                            <div class="mb-3">
                                <span>Phone : <?= $order["cus_phone"] ?></span>
                            </div>
                        </div>

                        <div class="min-w-[250px]">
                            <div class="grid grid-cols-2 gap-10 mb-3">
                                <div><span>Order ID</span></div>
                                <div><span><?= $order["order_code"] ?></span></div>
                            </div>
                            <div class="grid grid-cols-2 gap-10 mb-3">
                                <div><span>Payment Method</span></div>
                                <div><span>Cash On Delivery</span></div>
                            </div>
                            <div class="grid grid-cols-2 gap-10 mb-3">
                                <div><span>Payment Status</span></div>
                                <div><span>Unpaid</span></div>
                            </div>
                            <div class="grid grid-cols-2 gap-10 mb-3">
                                <div><span>Date</span></div>
                                <div><span><?= $order["order_create_date"] ?></span></div>
                            </div>
                            <div class="grid grid-cols-2 gap-10 mb-3">
                                <div><span>Amount</span></div>
                                <div><span><?= $order["total_amount"] ?> MMK</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="px-5 py-4 flex">
                        <table class="min-w-full table-auto mb-5 rounded-md overflow-hidden">
                            <thead class=" bg-[#66CC33] bg-opacity-30">
                                <tr class="border-b border-slate-500">
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                                        Product Title
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                                        Qty
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                                        Attribute
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                                        PricePerItem
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                                        Discount
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                                        PayMent Method
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                                        Date
                                    </th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                                        Total Price
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php foreach ($orderDetails as $detail) { ?>
                                    <tr>
                                        <td class="px-6 py-4 ">
                                            <a href="" class="text-blue-500 underline"><?= $detail["p_name"] ?></a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span><?= $detail["qty"] ?></span>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div>
                                                <span class="font-semibold text-lg">Size : </span>
                                                <span>XL</span>
                                            </div>
                                            <div>
                                                <span class="font-semibold text-lg">Color : </span>
                                                <span>White</span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <span><?= $detail["p_sell_price"] ?> MMK</span>
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <span><?= $detail["p_discount"] ?> %</span>
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <span>Cash On Delivery</span>
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <span><?= $order["order_create_date"] ?></span>
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <span>
                                                <?php 
                                                $discountPrice =$detail["p_sell_price"] -  (($detail["p_sell_price"] * $detail["p_discount"]) / 100);
                                                echo $discountPrice * $detail["qty"];
                                                ?> MMK
                                            </span>
                                        </td>
                                    </tr>
                                <?php } ?>

                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                    <div class="px-5 py-4 flex justify-between mb-5">
                        <div>
                        </div>

                        <div class="min-w-[250px]">
                            <div class="grid grid-cols-2 gap-10 py-3 border-b border-slate-300">
                                <div><span>Subtotal</span></div>
                                <div><span><?= $order["total_amount"] ?> MMK</span></div>
                            </div>
                            <div class="grid grid-cols-2 gap-10 py-3 border-b border-slate-300">
                                <div><span>Shipping</span></div>
                                <div><span><?= $order["delivery_fee"] ?> MMK</span></div>
                            </div>
                            <div class="grid grid-cols-2 gap-10 py-3">
                                <div><span>Total</span></div>
                                <div><span><?= $order["total_amount"] + $order["delivery_fee"]; ?> MMK</span></div>
                            </div>

                        </div>
                    </div>
                    <div class="text-end">
                        <button class="bg-slate-400 text-white font-semibold px-4 py-1 rounded-md active:scale-[1.05]">
                            <ion-icon class="text-lg" name="print-outline"></ion-icon>
                            <span>Print Invoice</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- end aye myat noe khin -->
        </div>
    </section>
</body>

<?php include "../components/footer.php"; ?>