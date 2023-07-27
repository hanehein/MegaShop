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
        <div class="col-span-5">
            <nav class="h-[60px] px-3 items-center flex justify-between bg-[#66CC33] bg-opacity-80 fixed top-0 w-full">
                <div><span>Ratings & Reviews</span></div>
                <div><span>June 30, 2023</span></div>
            </nav>

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
                            <div class="broder-b-2 border-custom-grey">
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
                        <table class="min-w-full table-auto rounded-lg overflow-hidden p-3 mb-3 shadow-md">
                            <thead>
                                <tr class="border-b-2 border-custom-grey bg-white">
                                    <th class="px-6 py-3 text-[#66CC33] text-left text-sm font-semibold tracking-wider">
                                        <input type="checkbox">
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
                                        <a href="" class="underline text-blue-500">#112233</a>
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
                                    <td class="px-6 py-4 "><span>Min Khant Wai</span></td>
                                    <td class="px-6 py-4 "><span>42,750 Ks</span></td>
                                    <td class="px-6 py-4 "><span>July 20,2023</span></td>
                                    <td class="px-6 py-4 flex space-x-3">
                                        <button class="px-3 py-1 bg-green-400 text-white rounded-md">Confirmed</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- end orderlist -->

                        <!-- start orderlist -->
                        <table class="min-w-full table-auto rounded-lg overflow-hidden p-3 mb-3 shadow-md">
                            <thead>
                                <tr class="border-b-2 border-custom-grey bg-white">
                                    <th class="px-6 py-3 text-[#66CC33] text-left text-sm font-semibold tracking-wider">
                                        <input type="checkbox">
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
                                        <a href="" class="underline text-blue-500">#112233</a>
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
                                    <td class="px-6 py-4 "><span>Min Khant Wai</span></td>
                                    <td class="px-6 py-4 "><span>42,750 Ks</span></td>
                                    <td class="px-6 py-4 "><span>July 20,2023</span></td>
                                    <td class="px-6 py-4 flex space-x-3">
                                        <button class="px-3 py-1 bg-red-400 text-white rounded-md">Rejected</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- end orderlist -->

                        <!-- start orderlist -->
                        <table class="min-w-full table-auto rounded-lg overflow-hidden p-3 mb-3 shadow-md">
                            <thead>
                                <tr class="border-b-2 border-custom-grey bg-white">
                                    <th class="px-6 py-3 text-[#66CC33] text-left text-sm font-semibold tracking-wider">
                                        <input type="checkbox">
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
                                        <a href="" class="underline text-blue-500">#112233</a>
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
                                    <td class="px-6 py-4 "><span>Min Khant Wai</span></td>
                                    <td class="px-6 py-4 "><span>42,750 Ks</span></td>
                                    <td class="px-6 py-4 "><span>July 20,2023</span></td>
                                    <td class="px-6 py-4 flex space-x-3">
                                        <button class="px-3 py-1 bg-red-400 text-white rounded-md">Rejected</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- end orderlist -->

                    </div>

                    <div class="text-end px-5">
                        <button class="px-3 py-1 text-white bg-red-500 rounded-md mr-2">Remove</button>
                        <button class="px-3 py-1 text-white bg-blue-500 rounded-md ">Cancel</button>
                    </div>

                    <!-- Pagination -->
                    <div class="w-full flex justify-center p-x mb-3">
                        <!-- Pagination component -->
                        <nav class="flex items-center justify-center">
                            <!-- Previous button -->
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]  rounded-tl-md rounded-bl-md">
                                <ion-icon name="chevron-back"></ion-icon>
                            </a>
                            <!-- Page numbers -->
                            <a href="#" class="active px-3 py-1 border border-[#66CC33] text-bold">1</a>
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]">2</a>
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]">3</a>
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]">...</a>
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]">10</a>
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]">11</a>
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]">12</a>
                            <!-- Next button -->
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33] rounded-tr-md rounded-br-md">
                                <ion-icon name="chevron-forward"></ion-icon>
                            </a>
                        </nav>
                    </div>

                </div>

            </div>
        </div>
    </section>
</body>



</html>