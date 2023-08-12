<?php include "../../Controller/products/productListsController.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>all product</title>

    <!-- <link rel="stylesheet" href="../resources/lib/tailwind/output.css"> -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/allProduct.css">
    <link rel="stylesheet" href="../resources/css/home.css">
    <script src="../resources/js/allProduct.js" defer></script>
    <script src="../resources/js/home.js" defer></script>
</head>

<body>
    <?php include "../components/navbarForHome.php"; ?>

    <!-- START products SECTION -->
    <section class="relative">
        <div class="p-2 border-custom-grey border-b-2">
            <ul class="flex space-x-2 items-center">
                <li><a class="text-custom-grey">Home</a></li>
                <li><ion-icon class="text-custom-grey" name="chevron-forward"></ion-icon></li>
                <li><a class="text-custom-grey">Products</a></li>
                <!-- <li><ion-icon class="text-custom-grey" name="chevron-forward"></ion-icon></li> -->
            </ul>
        </div>
        <div class="block sm:grid sm:grid-cols-6 gap-4">
            <div class="hidden sm:block border-r-2 border-custom-grey">

                <div class="categories-box p-4 border-b-2 border-custom-grey">
                    <h2 class="text-custom-extra-large">Categories</h2>
                    <ul class="text-custom-medium text-custom-grey px-2">
                        <li>Fashion</li>
                        <li>Light Bulb</li>
                        <li>Books</li>
                        <li>Fashion</li>
                    </ul>
                </div>

                <div class="brands-box p-4 border-custom-grey border-b-2">
                    <h2 class="text-custom-extra-large">Brands</h2>
                    <ul class="text-custom-medium text-custom-grey px-2">
                        <li><input type="checkbox"> Nike</li>
                        <li><input type="checkbox"> Addids</li>
                        <li><input type="checkbox"> Stable Edge</li>
                        <li><input type="checkbox"> Apple</li>
                    </ul>
                </div>

                <div class="sizes-box p-4 border-custom-grey border-b-2">
                    <h2 class="text-custom-extra-large">Sizes</h2>
                    <ul class="text-custom-medium text-custom-grey px-2">
                        <li><input type="checkbox"> XXS</li>
                        <li><input type="checkbox"> XS</li>
                        <li><input type="checkbox"> S</li>
                        <li><input type="checkbox"> M</li>
                        <li><input type="checkbox"> L</li>
                        <li><input type="checkbox"> XL</li>
                        <li><input type="checkbox"> XXL</li>
                    </ul>
                </div>

                <div class="colors-box p-4 border-custom-grey border-b-2">
                    <h2 class="text-custom-extra-large">Colors</h2>
                    <ul class="text-custom-medium text-custom-grey px-2">
                        <li><input type="checkbox"> white</li>
                        <li><input type="checkbox"> yellow</li>
                        <li><input type="checkbox"> black</li>
                        <li><input type="checkbox"> red</li>
                        <li><input type="checkbox"> blue</li>
                        <li><input type="checkbox"> green</li>
                        <li><input type="checkbox"> purple</li>
                    </ul>
                </div>

                <div class="price-box p-4 border-custom-grey border-b-2">
                    <h2 class="text-custom-extra-large">Price</h2>
                    <div class="flex space-x-2">
                        <input class="w-[70px] border border-custom-grey rounded-md px-2" type="text" placeholder="min">
                        <span> - </span>
                        <input class="w-[70px] border border-custom-grey rounded-md px-2" type="text" placeholder="max">
                        <button class="bg-custom-orange text-white p-1 rounded-md"><ion-icon name="caret-forward"></ion-icon></button>
                    </div>
                </div>

            </div>
            <div class="col-span-5">
                <div class="px-5 py-2 border-custom-grey border-b-2">
                    <div class="x-3 flex justify-between items-center mb-4">
                        <h2 class="hidden sm:block text-custom-blue">all products</h2>
                        <div>
                            <label for="categories" class="text-custom-grey">Sort By :</label>
                            <select id="categories" class="bg-inherit border border-custom-orange text-custom-orange text-custom-medium px-3 py-1 rounded-md">
                                <option value="">Price Low To High</option>
                                <option value="">Price High To Low</option>
                            </select>
                        </div>
                        <div class="block sm:hidden">
                            <button class="sub-menu-show">
                                <ion-icon class="text-custom-extra-large" name="menu-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <div>
                        <small class="mb-3">124 items found</small>
                        <div class="flex space-x-4 items-center">
                            <small class="text-custom-grey">Filtered By : </small>
                            <div class="bg-custom-orange px-3 py-1 rounded-lg text-white">
                                Nike <ion-icon name="close"></ion-icon>
                            </div>
                            <div class="bg-custom-orange px-3 py-1 rounded-lg text-white">
                                Men's Shoe <ion-icon name="close"></ion-icon>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-4 px-3 py-5">
                    <?php foreach ($productLists as $product) { ?>
                        <!-- start card -->
                        <div class="bg-white shadow-md hover:shadow-2xl rounded-xl p-3 cursor-pointer">
                            <!-- card header -->
                            <div class="mb-2 flex justify-center">
                                <a href="../../Controller/products/productDetailsController.php?product_id=<?= $product["id"] ?>">
                                    <img src="../../../<?= $product["p_photo1"] ?>" class="rounded-xl h-[150px]" alt="product-img" />
                                </a>
                            </div>
                            <!-- card header -->
                            <!-- card body -->
                            <div>
                                <div class="flex justify-between">
                                    <h2 class="text-md font-bold ">
                                        <a href="../../Controller/products/productDetailsController.php?product_id=<?= $product["id"] ?>">
                                            <?php if (strlen($product["p_name"]) > 14) {
                                                echo substr($product["p_name"], 0, 14) . "...";
                                            } else {
                                                echo $product["p_name"];
                                            }
                                            ?>
                                        </a>
                                    </h2>
                                    <button>
                                        <ion-icon name="heart-outline" class="text-red-600 text-lg"></ion-icon>
                                    </button>
                                </div>
                                <div>
                                    <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                                    <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                                    <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                                    <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                                </div>
                                <div class="block mb-2">
                                    <div class="text-custom-tiny font-bold">
                                        <span class="<?php
                                                        if ($product["p_discount"] != 0) {
                                                            echo "text-red-600 line-through";
                                                        } else {
                                                            echo "text-custom-blue text-custom-large font-bold";
                                                        } ?>">
                                            <?= $product["p_sell_price"] ?> MMK
                                        </span>
                                        <?php if ($product["p_discount"] != 0) { ?>
                                            <span class="text-red-600">( <?= $product["p_discount"] ?> % off)</span>
                                        <?php } ?>
                                    </div>
                                    <div>
                                        <?php if ($product["p_discount"] != 0) { ?>
                                            <span class="text-custom-blue text-custom-large font-bold">
                                                <?= ($product["p_sell_price"] * (100 - $product["p_discount"])) / 100  ?> MMK
                                            </span>
                                        <?php } ?>

                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="text-custom-orange bg-custom-blue w-full rounded py-1">
                                        <ion-icon class="text-custom-large" name="cart"></ion-icon>
                                        <span class="text-white">Add to Cart</span>
                                    </button>
                                </div>
                            </div>
                            <!-- card body -->
                        </div>
                        <!-- end card -->
                    <?php } ?>

                </div>

            </div>
        </div>

        <div class="sub-menu-box hidden sm:hidden absolute top-0 left-0 right-0 bottom-0">
            <div class="flex justify-between">
                <div></div>
                <div class="min-w-[300px] bg-white">
                    <div class="pt-2 pr-2 text-end">
                        <button class="sub-menu-hide"><ion-icon class="text-2xl" name="close"></ion-icon></button>
                    </div>
                    <div class="categories-box p-4 border-b-2 border-custom-grey">
                        <h2 class="text-custom-extra-large">Categories</h2>
                        <ul class="text-custom-medium text-custom-grey px-2">
                            <li>Fashion</li>
                            <li>Light Bulb</li>
                            <li>Books</li>
                            <li>Fashion</li>
                        </ul>
                    </div>

                    <div class="brands-box p-4 border-custom-grey border-b-2">
                        <h2 class="text-custom-extra-large">Brands</h2>
                        <ul class="text-custom-medium text-custom-grey px-2">
                            <li><input type="checkbox"> Nike</li>
                            <li><input type="checkbox"> Addids</li>
                            <li><input type="checkbox"> Stable Edge</li>
                            <li><input type="checkbox"> Apple</li>
                        </ul>
                    </div>

                    <div class="sizes-box p-4 border-custom-grey border-b-2">
                        <h2 class="text-custom-extra-large">Sizes</h2>
                        <ul class="text-custom-medium text-custom-grey px-2">
                            <li><input type="checkbox"> XXS</li>
                            <li><input type="checkbox"> XS</li>
                            <li><input type="checkbox"> S</li>
                            <li><input type="checkbox"> M</li>
                            <li><input type="checkbox"> L</li>
                            <li><input type="checkbox"> XL</li>
                            <li><input type="checkbox"> XXL</li>
                        </ul>
                    </div>

                    <div class="colors-box p-4 border-custom-grey border-b-2">
                        <h2 class="text-custom-extra-large">Colors</h2>
                        <ul class="text-custom-medium text-custom-grey px-2">
                            <li><input type="checkbox"> white</li>
                            <li><input type="checkbox"> yellow</li>
                            <li><input type="checkbox"> black</li>
                            <li><input type="checkbox"> red</li>
                            <li><input type="checkbox"> blue</li>
                            <li><input type="checkbox"> green</li>
                            <li><input type="checkbox"> purple</li>
                        </ul>
                    </div>

                    <div class="price-box p-4 border-custom-grey border-b-2">
                        <h2 class="text-custom-extra-large">Price</h2>
                        <div class="flex space-x-2">
                            <input class="w-[70px] border border-custom-grey rounded-md px-2" type="text" placeholder="min">
                            <span> - </span>
                            <input class="w-[70px] border border-custom-grey rounded-md px-2" type="text" placeholder="max">
                            <button class="bg-custom-orange text-white p-1 rounded-md"><ion-icon name="caret-forward"></ion-icon></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END product SECTION -->

    <?php include "../components/footer.php"; ?>

</body>

</html>