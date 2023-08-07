<?php
session_start();
$product = $_SESSION["product_detail"];
$reviews = $_SESSION["product_reviews"];
$hasJsFile = FALSE;
include "../components/header.php";
?>

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php"; ?>
        <div class="col-span-5 relative">

            <?php
            $currentMenu = "Product Detail";
            include "../components/navbar.php";
            ?>

            <!-- start aye myat noe khin -->
            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>

                <?php if ($product["p_approved"] == 0) { ?>
                    <div class="p-5 rounded-md mb-2 bg-red-300">
                        <p>This product is not approved by admin. Customers will not able to see this product.</p>
                    </div>
                <?php } ?>

                <!-- product informations -->
                <div class="p-5 bg-white rounded-md mb-5">
                    <h2 class="text-lg font-semibold border-b border-slate-300">
                        Product Details
                    </h2>
                    <div class="details-container py-5">

                        <!-- start images -->
                        <div class="mb-8">
                            <span class="font-semibold text-slate-500">Product Images</span>
                            <!-- Images -->
                            <div class="flex flex-wrap mt-2">
                                <?php for ($i = 1; $i <= $product["max_photo"]; $i++) {
                                    if (!is_null($product["p_photo$i"])) {
                                ?>
                                        <div class="w-[200px] min-h-[200px] p-4 mr-5 rounded-md shadow-lg">
                                            <img class="w-full" src="../../../<?= $product["p_photo$i"] ?>" alt="product-img" />
                                        </div>
                                <?php
                                    }
                                };
                                ?>
                            </div>
                        </div>

                        <!-- start name -->
                        <div class="mb-8">
                            <span class="font-semibold text-slate-500">Product Name</span>
                            <p class="block text-black font-normal min-w-[200px] w-fit rounded-md mt-2">
                                <?= $product["p_name"] ?>
                            </p>
                        </div>

                        <!-- start category and brand -->
                        <div class="flex space-x-5 mb-8">
                            <div>
                                <span class="font-semibold text-slate-500">Category</span>
                                <p class="block text-black font-normal min-w-[200px] w-fit rounded-md mt-2">
                                    <?= $product["cat_name"] ?>
                                </p>
                            </div>

                            <div>
                                <span class="font-semibold text-slate-500">Brand</span>
                                <p class="block text-black font-normal min-w-[200px] w-fit rounded-md mt-2">
                                    <?= $product["band_name"] ?>
                                </p>
                            </div>
                        </div>

                        <!-- start buy price and sell price -->
                        <div class="flex space-x-10 mb-8">
                            <div>
                                <span class="font-semibold text-slate-500">Buy Price</span>
                                <p class="block text-black font-normal min-w-[200px] w-fit rounded-md mt-2">
                                    <?= $product["p_sell_price"] ?> MMK
                                </p>
                            </div>

                            <div>
                                <span class="font-semibold text-slate-500">Sell Price</span>
                                <p class="block text-black font-normal min-w-[200px] w-fit rounded-md mt-2">
                                    <?= $product["p_buy_price"] ?> Ks
                                </p>
                            </div>
                        </div>

                        <!-- start discount -->
                        <div class="mb-8">
                            <span class="font-semibold text-slate-500">Discount</span>
                            <p class="block text-black font-normal min-w-[200px] w-fit rounded-md mt-2">
                                <?= $product["p_discount"] ?> %
                            </p>
                        </div>

                        <!-- start stock -->
                        <div class="mb-8">
                            <span class="font-semibold text-slate-500">Stock</span>
                            <p class="block text-black font-normal min-w-[200px] w-fit rounded-md mt-2">
                                <?= $product["p_stock"] ?>
                            </p>
                        </div>

                        <!--start sizes -->
                        <div class="mb-8">
                            <span class="font-semibold text-slate-500">Sizes</span>
                            <div class="mt-2 flex space-x-5">
                                <span class="block text-black font-normal w-fit rounded-md">XL</span>
                                <span class="block text-black font-normal w-fit rounded-md">L</span>
                                <span class="block text-black font-normal w-fit rounded-md">M</span>
                            </div>
                        </div>

                        <!--start colors -->
                        <div class="mb-8">
                            <span class="font-semibold text-slate-500">Colors</span>
                            <div class="mt-2 flex space-x-5">
                                <span class="block text-black font-normal w-fit rounded-md">white</span>
                                <span class="block text-black font-normal w-fit rounded-md">black</span>
                                <span class="block text-black font-normal w-fit rounded-md">red</span>
                                <span class="block text-black font-normal w-fit rounded-md">black</span>
                                <span class="block text-black font-normal w-fit rounded-md">yellow</span>
                            </div>
                        </div>

                        <!-- start description -->
                        <div class="mb-8">
                            <label class="font-semibold text-slate-500">Product Description</label>
                            <p class="block text-black font-normal w-fit rounded-md mt-2">
                                <?= $product["p_description"] ?>
                            </p>
                        </div>

                        <!-- start edit btn -->
                        <div class="text-end">
                            <button class="p-2 w-[100px] text-white text-lg bg-green-600 rounded-md font-semibold">
                                <a href="">Edit</a>
                            </button>
                        </div>
                    </div>
                </div>

                
                <!-- product reviews -->
                <div class="p-5 bg-white rounded-md">

                    <h2 class="text-lg font-semibold border-b border-slate-300 py-3 mb-6">Ratings &
                        Reviews
                        (<?= count($reviews) ?>)</h2>

                    <div class="reviews-container">
                        <!-- start review -->
                        <?php foreach ($reviews as &$review) { ?>
                        <div class="p-4 shadow-lg rounded-md border border-slate-400  mb-4">
                            <div class="flex justify-between items-center">
                                <div class="flex space-x-3 items-center mb-3">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80" class="w-[40px] h-[40px] rounded-full" alt="user-profile" />
                                    <span class="text-grey text-sm font-bold"><?= $review["cus_name"] ?></span>
                                </div>
                                <div>
                                    <span class="text-grey"><?= $review["create_date"] ?></span>
                                </div>
                            </div>
                            <div>
                                <?php for ($i = 0; $i < $review["rating"] ; $i++) { ?>
                                    <ion-icon class=" text-orange-600" name="star"></ion-icon>
                                <?php } ?>
                            </div>
                            <p>
                                <?= $review["review"] ?>
                            </p>
                        </div>
                        <?php } ?>
                        <!-- end review -->
                    </div>

                    <!-- Pagination -->
                    <div class="w-full flex justify-center p-5">
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
            <!-- end aye myat noe khin -->
        </div>
    </section>
</body>

<?php include "../components/footer.php" ?>