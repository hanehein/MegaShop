<?php
include "../../Controller/products/categoryListController.php";
include "../../Controller/products/brandListController.php";
?>

<!-- Start header -->
<?php
$hasJsFile = TRUE;
$jsFileNames = ["addVariant", "addImage"];
include "../components/header.php";
?>
<!-- End header -->

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
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="../../Controller/products/addProductController.php" method="post" enctype="multipart/form-data">

                        <!-- <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="product_image">Product
                                Image:</label>
                            
                            <label for="product_image"
                                class="cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Choose Image
                            </label>
                            <span id="selected_image_name" class="ml-2 text-gray-600"></span>
                        </div> -->


                        <div class="mb-5">
                            <div>
                                <span class="block text-gray-700 text-sm font-bold mb-2">Product
                                    Image:</span>

                                <div class="image-container flex flex-wrap">
                                    <div class="product_image w-[300px] min-h-[150px] p-4 rounded-md shadow relative mr-5 mb-3">
                                        <label for="product_image1">
                                            <img id="out_image1" class="w-full" src="../resources/img/upload_image.jpg" alt="">
                                        </label>
                                        <input id="product_image1" type="file" name="photo1" accept="image/*" hidden>
                                    </div>
                                </div>


                            </div>


                            <div class="flex space-x-10 items-center">
                                <input class="add-image px-3 py-1 bg-blue-500 rounded-md text-white" value="Add Photo" type="button" />
                                <div class="image-warning-message"></div>
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
                                        <?php foreach ($categories as $category) { ?>
                                            <option value="<?= $category["id"] ?>"><?= $category["cat_name"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_brand">Product
                                        Brand:</label>
                                    <select class="shadow rounded w-[300px] py-2 px-3 bg-white border border-slate-300" id="product_brand" name="product_brand" required>
                                        <?php foreach ($brands as $brand) { ?>
                                            <option value="<?= $brand["id"] ?>"><?= $brand["band_name"]; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="flex space-x-10">

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_buy_price">Product Buy
                                        Price:</label>
                                    <input class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_buy_price" type="number" name="product_buy_price" placeholder="Enter product price" required>
                                </div>

                                <div>
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="product_sell_price">Product Sell
                                        Price:</label>
                                    <input class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_sell_price" type="number" name="product_sell_price" placeholder="Enter product price" required>
                                </div>
                            </div>

                        </div>

                        <div class="mb-5">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="product_stock">Product
                                Stock</label>
                            <input class="shadow appearance-none border rounded w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_stock" type="number" name="product_stock" step="1" placeholder="Enter product price" required>
                        </div>

                        <div class="mb-5">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="product_discount">Product
                                Discount:</label>
                            <input class="shadow appearance-none border rounded  w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_discount" type="number" name="product_discount" step="1" placeholder="Enter product price" required>
                        </div>


                        <div class="mb-5">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="product_description">Product
                                Description:</label>
                            <textarea class="shadow appearance-none border rounded w-1/2 h-[200px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="product_description" rows="4" name="product_description" placeholder="Enter product description" required></textarea>
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
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="from_addproduct" type="submit">
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