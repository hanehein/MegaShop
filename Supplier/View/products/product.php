<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "custom-grey": "#7B7B7B",
                        "custom-blue": "#024486",
                        "custom-orange": "#F68721",
                    },
                    backgroundColor: {
                        "custom-milk": "F1F2F4",
                        "custom-blue": "#024486",
                        "custom-orange": "#F68721",
                        "custom-grey": "#7B7B7B",
                        "custom-sky-blue": "#c9e0f5",
                        "custom-black-pale": "rgba(0,0,0,0.5)",
                        "custom-red": "FF0000"
                    },
                    fontSize: {
                        "custom-tiny": "12px",
                        "custom-medium": "16px",
                        "custom-large": "18px",
                        "custom-extra-large": "20px",
                    },
                    borderColor: {
                        "custom-blue": "#024486",
                        "custom-grey": "#7B7B7B",
                        "custom-orange": "#F68721",
                    },
                },
            },
        };
    </script>
    <script src="./singleProductDeatil.js" defer></script>
    <link rel="stylesheet" href="dashboard.css">
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
                        <ion-icon class="mr-3 text-custom-extra-large" name="cube-outline"></ion-icon> Products
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
                <div><span>Product</span></div>
                <div><span>June 30, 2023</span></div>
            </nav>

            <div class="p-5 text-end">
                <a href="./addproduct.php" class="bg-green-500 rounded-lg border-2 text-white px-3 py-1">
                    <span><ion-icon name="add-circle-outline" class="text-xl"></ion-icon></span>
                    Add Product
                </a>
            </div>
            <!--Start table-->
            <table class="min-w-full table-auto rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-[#66CC33] bg-opacity-50 text-white">
                        <th class="px-6 py-3 text-left text-sm text-black font-semibold uppercase tracking-wider">
                            Product
                        </th>
                        <th class="px-6 py-3 text-left text-sm text-black font-semibold uppercase tracking-wider">
                            Category
                        </th>
                        <th class="px-6 py-3 text-left text-sm text-black font-semibold uppercase tracking-wider">
                            Buy price
                        </th>
                        <th class="px-6 py-3 text-left text-sm text-black font-semibold uppercase tracking-wider">
                            Discount
                        </th>
                        <th class="px-6 py-3 text-left text-sm text-black font-semibold uppercase tracking-wider">
                            Sell price
                        </th>
                        <th class="px-6 py-3 text-left text-sm text-black font-semibold uppercase tracking-wider">
                            Stock
                        </th>
                        <th class="px-6 py-3 text-left text-sm text-black font-semibold uppercase tracking-wider">
                            Action
                        </th>
                        <th class="px-6 py-3 text-left text-sm text-black font-semibold uppercase tracking-wider">
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-1">
                                <img src="../resources/img/addidas.jpg" alt="" class="w-[50px] h-[50px]">
                                <a href="" class="text-blue-500 ">Addidas</a>
                            </div>

                        </td>
                        <td class="px-6 py-4 ">
                            Shoe
                        </td>
                        <td class="px-6 py-4">
                            <span>20000 Ks</span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="" class="text-blue-500 underline">2%</a>
                        </td>
                        <td class="px-6 py-4 ">
                            <span>24000 Ks</span>
                        </td>
                        <td class="px-6 py-4 ">
                            <span>20</span>
                        </td>
                        <td>
                            <a href="" class="bg-blue-500 border-2 rounded-lg px-3 py-1">Review</a>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col space-y-2">
                                <a href="#" class="bg-[#66CC33] rounded-lg px-3 py-1">Edit</a>
                                <a href="#" class="bg-[#FF0000] rounded-lg px-3 py-1">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <!--End Row1-->
                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-1">
                                <img src="../resources/img/addidas.jpg" alt="" class="w-[50px] h-[50px]">
                                <a href="" class="text-blue-500 ">Addidas</a>
                            </div>

                        </td>
                        <td class="px-6 py-4 ">
                            Shoe
                        </td>
                        <td class="px-6 py-4">
                            <span>20000 Ks</span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="" class="text-blue-500 underline">2%</a>
                        </td>
                        <td class="px-6 py-4 ">
                            <span>24000 Ks</span>
                        </td>
                        <td class="px-6 py-4 ">
                            <span>20</span>
                        </td>
                        <td>
                            <a href="" class="bg-blue-500 border-2 rounded-lg px-3 py-1">Review</a>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-col space-y-2">
                                <a href="" class="bg-[#66CC33] rounded-lg px-3 py-1">Edit</a>
                                <a href="" class="bg-[#FF0000] rounded-lg px-3 py-1">Delete</a>
                            </div>
                        </td>
                    </tr>
        </div>
    </section>
</body>

</html>