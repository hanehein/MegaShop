<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>

    <!-- <link rel="stylesheet" href="../resources/lib/tailwind/output.css"> -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php"; ?>
        <div class="col-span-5 relative">
            <?php
            $currentMenu = "Orders";
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
                                <span>Min Khant Wai</span>
                            </div>
                            <div class="mb-3">
                                <span>gfgfgfgfg, fgfgf, gfgfgf-5545454, Tawmae, Yangon</span>
                            </div>
                            <div class="mb-3">
                                <span>Email : example@gmail.com</span>
                            </div>
                            <div class="mb-3">
                                <span>Phone : 09-345435534</span>
                            </div>
                        </div>

                        <div class="min-w-[250px]">
                            <div class="grid grid-cols-2 gap-10 mb-3">
                                <div><span>Order ID</span></div>
                                <div><span>#20232607GEpZj5</span></div>
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
                                <div><span>July 23, 2023</span></div>
                            </div>
                            <div class="grid grid-cols-2 gap-10 mb-3">
                                <div><span>Amount</span></div>
                                <div><span>139,00 MMK</span></div>
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
                                <tr>
                                    <td class="px-6 py-4 ">
                                        <a href="" class="text-blue-500 underline">Instant Coffee MIx</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span>3</span>
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
                                        <span>15,000 MMK</span>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>5 %</span>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>Cash On Delivery</span>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>July 20,2023</span>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>42,750 MMK</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 ">
                                        <a href="" class="text-blue-500 underline">Homesick New Home Reed Diffuser</a>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span>3</span>
                                    </td>
                                    <td class="px-6 py-4">

                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>15,000 MMK</span>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>5 %</span>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>Cash On Delivery</span>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>July 20,2023</span>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>42,750 MMK</span>
                                    </td>
                                </tr>
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
                                <div><span>85500 MMK</span></div>
                            </div>
                            <div class="grid grid-cols-2 gap-10 py-3 border-b border-slate-300">
                                <div><span>Shipping</span></div>
                                <div><span>0 MMK</span></div>
                            </div>
                            <div class="grid grid-cols-2 gap-10 py-3">
                                <div><span>Total</span></div>
                                <div><span>85500 MMK</span></div>
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

</html>