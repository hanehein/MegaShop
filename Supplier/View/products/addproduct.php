<?php
$hasJsFile = TRUE;
$JsFileName = "addProduct";
include "../components/header.php";
?>

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

                <div>
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="../../Controller/products/addProductController.php" method="post">

                        <!-- <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="product_image">Product
                                Image:</label>
                            
                            <label for="product_image"
                                class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Choose Image
                            </label>
                            <span id="selected_image_name" class="ml-2 text-gray-600"></span>
                        </div> -->

                        <div class="w-full max-w-md">
                            <div class="mb-5">
                                <label class="block text-gray-700 text-sm font-bold mb-4" for="product_image">Product
                                    Image:</label>
                                <div class="p-3 rounded-lg shadow-lg">
                                    <div class="border-2 border-dashed border-gray-400 rounded-lg p-4">
                                        <div class="mx-auto h-12 w-12 text-gray-600">
                                            <svg class="h-full w-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                        </div>
                                        <div class="text-center mt-2 text-gray-600">Drag and drop or click to upload</div>
                                        <input type="file" class="hidden">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="product_name">Product
                                Name:</label>
                            <input class="shadow border rounded w-1/2 py-2 px-3 text-gray-700 focus:outline-none focus:shadow-outline" id="product_name" name="product_name" type="text" placeholder="Enter product name" required>
                        </div>

                        <div class="mb-5">
                            <div class="flex space-x-10">
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_category">Product
                                        Category:</label>
                                    <select class="shadow rounded w-[300px] py-2 px-3 bg-white border border-slate-300" id="product_category" name="product_category" required>
                                        <option value="1">Men Fashion</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_brand">Product
                                        Brand:</label>
                                    <select class="shadow rounded w-[300px] py-2 px-3 bg-white border border-slate-300" id="product_brand" name="product_brand" required>
                                        <option value="1">Nike</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="flex space-x-10">

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_buy_price">Product Buy
                                        Price:</label>
                                    <input class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_buy_price" type="number" 
                                    name="product_buy_price" 
                                    placeholder="Enter product price" required>
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_sell_price">Product Sell
                                        Price:</label>
                                    <input class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_sell_price" type="number" 
                                    name="product_sell_price" 
                                    placeholder="Enter product price" required>
                                </div>
                            </div>

                        </div>

                        <div class="mb-5">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="product_stock">Product
                                Stock</label>
                            <input class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_stock" type="number" 
                            name="product_stock" 
                            step="1" placeholder="Enter product price" required>
                        </div>

                        <div class="mb-5">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="product_discount">Product
                                Discount:</label>
                            <input class="shadow appearance-none border rounded  w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_discount" type="number"
                            name="product_discount" 
                            step="1" placeholder="Enter product price" required>
                        </div>


                        <div class="mb-5">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="product_description">Product
                                Description:</label>
                            <textarea class="shadow appearance-none border rounded w-1/2 h-[200px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_description" rows="4"
                            name="product_description"
                            placeholder="Enter product description" required></textarea>
                        </div>

                        <div class="mb-5">
                            <h2 class="block text-gray-700 text-sm font-bold mb-2">Variants :</h2>
                            <div class="variant-lists-container mb-2">
                            </div>
                            <div class="mb-2">
                                <div class="flex space-x-3 items-center">
                                    <select class="variant-lists shadow rounded w-[300px] py-2 px-3 bg-white border border-slate-300" id="other_options" required>
                                        <option value="1">Size</option>
                                        <option value="2">Color</option>
                                        <option value="3">RAM</option>
                                        <option value="4">Other</option>
                                    </select>

                                    <div>
                                        <button type="button" class="add-variant px-3 py-2 text-white bg-blue-500 rounded-md captalize">add option</button>
                                    </div>
                                </div>
                                <div class="alert-message"></div>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            name="from_addproduct"
                            type="submit">
                                Add Your Product
                            </button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- end aye myat noe khin -->
        </div>
    </section>
</body>

<?php include "../components/footer.php"; ?>