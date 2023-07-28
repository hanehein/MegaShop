<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
                        "custom-red": "#FF0000"
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
                        "custom-teal": "#00534F"
                    },
                },
            },
        };
    </script>
    <script src="./singleProductDeatil.js" defer></script>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
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
        <div class="col-span-5 rounded-lg shadow-lg overflow-hidden mb-5">
            <nav class="h-[60px] px-3 items-center flex justify-between bg-[#66CC33] bg-opacity-80">
                <div><span>Product</span></div>
                <div><span>June 30, 2023</span></div>
            </nav>

            <!--Start product edit-->
            <span class="py-4 px-6">Add Products</span>
            <div class="grid grid-cols-5 bg-custom-grey shadow-lg rounded-lg p-5 m-[15px]">
                <div class="col-span-3">
                    <div class="flex flex-col space-y-3">

                        <!--Start photo section-->
                        <div class="flex space-x-3">
                            <div class="w-[150px] h-[200px] border-2">
                                <img src="../resources/img/addidas.jpg" alt="" class="w-[150px] h-[200px]">
                            </div>
                            <div class="w-[150px] h-[200px] border-2">
                                <ion-icon name="add-outline" class="w-[150px] h-[200px]"></ion-icon>
                            </div>
                            <!--End photo section-->
                        </div>
                        <!--Start description-->
                        <span>Description</span>
                        <input type="text" class="w-[450px] h-[200px] border-2 rounded-lg">
                        <!--End description-->

                        <div class="flex space-x-3 items-center">
                            <div class="flex flex-col space-y-3">
                                <span>Buy Price</span>
                                <input type="text" class="px-3 py-1 border-2 rounded-lg" value="15000 Ks" required>
                            </div>
                            <div class="flex flex-col space-y-3">
                                <span>Sell Price</span>
                                <input type="text" class="px-3 py-1 rounded-lg border-2" value="20000 Ks" required>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <span>Discount</span>
                            <input type="text" class="px-3 py-1 rounded-lg border-2 w-[230px]" value="2%">
                        </div>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="flex flex-col space-y-5">
                        <div class="flex flex-col space-y-1">
                            <span class="font-semibold text-custom-medium">Product Name</span>
                            <input type="text" class="border-2 px-3 py-1 rounded-lg text-custom-grey" value="Nike Air" required>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <span class="font-semibold text-custom-medium">Category</span>
                            <input type="text" class="border-2 px-3 py-1 rounded-lg text-custom-grey" value="Sneaker" required>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <span class="font-semibold text-custom-medium">Brand</span>
                            <input type="text" class="border-2 px-3 py-1 rounded-lg text-custom-grey" value="Nike" required>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <span class="font-semibold text-custom-medium">Stock</span>
                            <input type="text" class="border-2 px-3 py-1 rounded-lg text-custom-grey" value="20" required>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <span class="font-semibold text-custom-medium">Variants</span>
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="border-2 text-left bg-white font-medium rounded-lg text-sm px-5 py-1" type="button">Add Options like size or color
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                                <ul class="py-2 hidden text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Size</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Style</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Color</a>
                                    </li>
                                </ul>
                            </div>

                            <span>Option Name</span>
                            <input type="text" class="border-2 px-3 py-1 rounded-lg text-custom-grey" value="Style">
                            <span>Option Value</span>
                            <input type="text" class="border-2 px-3 py-1 rounded-lg text-custom-grey" value="Classic">
                        </div>
                        <button class="bg-white border-2 px-3 py-1 rounded-lg">Add another option</button>
                    </div>
                </div>
            </div>
            <!--End product edit-->
            <div class="text-right m-5">
                <button class="border-2 bg-[#FF0000] text-white rounded-lg px-3 py-1 w-[80px]">Cancel</button>
                <button class="border-2 bg-[#66CC33] text-white rounded-lg px-3 py-1 w-[80px]">Add</button>
            </div>
        </div>



    </section>

</body>

</html>