<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

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
        <div class="col-span-5 rounded-lg shadow-lg overflow-hidden">
            <nav class="h-[60px] px-3 items-center flex justify-between bg-[#66CC33] bg-opacity-80">
                <div><span>Dashboard</span></div>
                <div><span>June 30, 2023</span></div>
            </nav>
            <div>
                <div class="details grid grid-cols-4 space-x-6 p-5">

                    <div class="bg-[#FFDD55] bg-opacity-30 p-5 flex space-x-5 justify-between items-center rounded-lg">
                        <div class="w-[50px] h-[50px] bg-white flex justify-center items-center rounded-md">
                            <ion-icon class="text-custom-orange text-[40px] rounded-md" name="cart-outline"></ion-icon>
                        </div>
                        <div>
                            <h2 class="text-custom-grey text-custom-extra-large font-bold">Total Products</h2>
                            <div class="text-center">
                                <span>102</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#F68721] bg-opacity-30 p-5 flex space-x-5 justify-between items-center rounded-lg">
                        <div class="w-[50px] h-[50px] bg-white flex justify-center items-center rounded-md">
                            <ion-icon class="text-custom-orange text-[40px] rounded-md" name="bag-handle-outline"></ion-icon>
                        </div>
                        <div>
                            <h2 class="text-custom-grey text-custom-extra-large font-bold">Total Orders</h2>
                            <div class="text-center">
                                <span>102</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#1EE1E1] bg-opacity-30 p-5 flex space-x-5 justify-between items-center rounded-lg">
                        <div class="w-[50px] h-[50px] bg-white flex justify-center items-center rounded-md">
                            <ion-icon class="text-custom-orange text-[40px] rounded-md" name="cash-outline"></ion-icon>
                        </div>
                        <div>
                            <h2 class="text-custom-grey text-custom-extra-large font-bold">Total Sells</h2>
                            <div class="text-center">
                                <span>105200 Ks</span>
                            </div>
                        </div>
                    </div>

                    <div class="bg-[#361EE1] bg-opacity-30 p-5 flex space-x-5 justify-between items-center rounded-lg">
                        <div class="w-[50px] h-[50px] bg-white flex justify-center items-center rounded-md">
                            <ion-icon class="text-custom-orange text-[40px] rounded-md" name="people-outline"></ion-icon>
                        </div>
                        <div>
                            <h2 class="text-custom-grey text-custom-extra-large font-bold">Total Customers</h2>
                            <div class="text-center">
                                <span>105</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="grid grid-cols-2 gap-4 p-5">
                    <div class="recent-order bg-white rounded-lg p-5">
                        <h2 class="font-bold text-custom-large">Recent Orders</h2>
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="border-b border-custom-grey">
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
                                        <span class="bg-green-500 p-1 rounded-md text-white font-semibold">Delivered</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 ">
                                        #A581
                                    </td>
                                    <td class="px-6 py-4 ">
                                        June 30, 2023
                                    </td>
                                    <td class="px-6 py-4 text-green  text-custom-grey">
                                        UnPaid
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span class="bg-custom-orange p-1 rounded-md text-white font-semibold">In
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
                                    <td class="px-6 py-4 text-green  text-custom-grey">
                                        UnPaid
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span class="bg-red-500 p-1 rounded-md text-white font-semibold">Cancel</span>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                    <div class="top-product bg-white rounded-lg shadow-md p-5">
                        <h2 class="font-bold text-custom-large">Top Products</h2>
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="border-b border-custom-grey">
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


</html>