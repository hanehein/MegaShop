<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History Review</title>

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
        <div class="bg-white min-h-screen">
            <div class="h-[60px] flex justify-center items-center text-center">
                <span class="font-bold">MEGA SHOP</span>
            </div>
            <div class="menu-lists">
                <ul>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <ion-icon class="mr-3 text-custom-extra-large" name="clipboard-outline"></ion-icon> Dashboard
                    </li>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <ion-icon class="mr-3 text-custom-extra-large" name="bag-handle-outline"></ion-icon> Orders
                    </li>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <div class="flex justify-between items-center">
                            <div>
                                <ion-icon class="mr-3 text-custom-extra-large" name="person-outline"></ion-icon>
                                Customers
                            </div>
                            <div>
                                <button class="order-down-btn">
                                    <ion-icon class="mr-3 text-custom-extra-large" name="caret-down"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <ion-icon class="mr-3 text-custom-extra-large" name="star-half-outline"></ion-icon>Rating and
                        Reviews
                    </li>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <ion-icon class="mr-3 text-custom-extra-large" name="chatbox-outline"></ion-icon> Messages
                    </li>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <ion-icon class="mr-3 text-custom-extra-large" name="settings-outline"></ion-icon> Setting
                    </li>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <ion-icon class="mr-3 text-custom-extra-large" name="log-in-outline"></ion-icon> Log Out
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-span-5 relative">
            <nav class="h-[60px] px-3 items-center flex justify-between bg-[#66CC33] bg-opacity-80 fixed top-0 w-full">
                <div><span>Products</span></div>
                <div><span>June 30, 2023</span></div>
            </nav>

            <!-- start aye myat noe khin -->
            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>

                <div class="bg-white rounded-lg shadow-md">
                    <h2 class="px-5 py-4 text-custom-extra-large font-bold border-b border-slate-400 mb-10">
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
                                <tr class="border-b border-custom-grey">
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
                                            <span class="font-semibold text-custom-large">Size : </span>
                                            <span>XL</span>
                                        </div>
                                        <div>
                                            <span class="font-semibold text-custom-large">Color : </span>
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
                    <div class="px-5 py-4 flex justify-between mb-10">
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
                </div>
            </div>
            <!-- end aye myat noe khin -->
        </div>
    </section>
</body>

</html>