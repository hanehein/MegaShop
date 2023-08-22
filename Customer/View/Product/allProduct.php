<?php
include "../../Controller/products/brandListController.php";
include "../../Controller/products/productListsController.php";

$productIdsInWishlist = [];
foreach ($productsInWishlist as $product) {
    $productIdsInWishlist[] = $product["product_id"];
}

?>

<!-- start header -->
<?php
$hasCssFile = TRUE;
$cssFiles = ["home", "allProduct"];
$hasJsFile = TRUE;
$jsFiles = ["home", "allProduct", "addWishlist", "searchProduct","productSortBy","addCart"];
include "../components/header.php";
?>
<!-- end header -->

<body>
    <?php include "../components/navbarForHome.php"; ?>

    <!-- START products SECTION -->
    <section class="relative">
        <div class="p-2 border-custom-grey border-b-2">
            <ul class="flex space-x-2 items-center">
                <li><a class="text-custom-grey">Home</a></li>
                <li><ion-icon class="text-custom-grey" name="chevron-forward"></ion-icon></li>
                <li><a class="text-custom-grey">Products</a></li>
                <?php 
                    if(isset($filterCategory)): 
                        foreach($categories as $category): 
                            if($category["id"] == $filterCategory):
                ?>
                    <li><ion-icon class="text-custom-grey" name="chevron-forward"></ion-icon></li>
                    <li class="text-orange-500"><?= $category["cat_name"] ?></li>

                <?php 
                            endif;
                        endforeach; 
                    endif; 
                ?>
            </ul>
        </div>
        <div class="block sm:grid sm:grid-cols-6 gap-4">
            <div class="hidden md:block border-r-2 border-custom-grey  min-h-screen">

                <form action="" method="GET">
                    <div class="brands-box p-4 border-custom-grey border-b-2 flex justify-between">
                        <h2 class="text-xl">Filter</h2>
                        <div>
                            <button class="px-3 py-1 bg-blue-500 text-white rounded-md">Search</button>
                        </div>
                    </div>

                    <!-- filter by category -->
                    <?php if(isset($filterCategory)): ?>
                        <input type="number" name="category" value="<?= $filterCategory ?>" hidden>
                        <div class="categories-box p-4 border-b-2 border-custom-grey">
                            <h2 class="text-xl">Category</h2>
                            <ul class="text-custom-medium px-2">
                                <?php 
                                    foreach($categories as $category): 
                                        if($category["id"] == $filterCategory):
                                ?>
                                    <li class="text-orange-500"><?= $category["cat_name"] ?></li>
                                <?php 
                                        endif;
                                    endforeach; 
                                ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <!-- filter by brand -->
                    <div class="brands-box p-4 border-custom-grey border-b-2">
                        <h2 class="text-xl">Brands</h2>
                        <ul class="text-custom-medium text-custom-grey px-2">
                            <?php foreach ($brands as $brand): ?>
                                <li>
                                    <input 
                                        type="checkbox" 
                                        name="brands[]" 
                                        id="brand-<?= $brand["id"] ?>" 
                                        class="brand-checkbox" 
                                        value="<?= $brand["id"] ?>" 
                                        <?php if (isset($filterBrands) && in_array($brand["id"], $filterBrands)) { echo "checked"; } ?>
                                    >
                                    <label for="brand-<?= $brand["id"] ?>"><?= $brand["band_name"] ?></label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- filter by price -->
                    <div class="price-box p-4 border-custom-grey border-b-2">
                        <h2 class="text-xl">Price</h2>
                        <div class="flex space-x-2">
                            <input 
                                id="min-price" 
                                class="w-[70px] border border-custom-grey rounded-md px-2" 
                                type="text" 
                                placeholder="min" 
                                name="min_price" \
                                value="<?php if ($filterByPrice) { echo $min_price; } else { echo ""; } ?>"
                            >
                            <span> - </span>
                            <input 
                                id="max-price" 
                                class="w-[70px] border border-custom-grey rounded-md px-2" 
                                type="text" placeholder="max" 
                                name="max_price" 
                                value="<?php if ($filterByPrice) { echo $max_price; } else { echo ""; } ?>"
                            >
                        </div>
                    </div>
                </form>



            </div>
            <div class="col-span-5">
                <div class="px-5 py-2 border-custom-grey border-b-2">
                    <div class="x-3 flex justify-between items-center mb-4">
                        <h2 class="hidden sm:block text-custom-blue">all products</h2>
                        <div>
                            <label for="sort-by" class="text-custom-grey">Sort By :</label>
                            <select id="sort-by" class="bg-inherit border border-custom-orange text-custom-orange text-custom-medium px-3 py-1 rounded-md">
                                <option value="0">Date</option>
                                <option value="1">Price Low To High</option>
                                <option value="2">Price High To Low</option>
                            </select>
                        </div>
                        <div class="block sm:hidden">
                            <button class="sub-menu-show">
                                <ion-icon class="text-xl" name="menu-outline"></ion-icon>
                            </button>
                        </div>
                    </div>
                    <?php if (isset($filterBrands)) { ?>
                        <div>
                            <small class="mb-3"><?= count($productLists) ?> items found</small>
                            <div class="flex space-x-4 items-center">
                                <small class="text-custom-grey">Filtered By : </small>
                                <?php
                                foreach ($filterBrands as $filterBrandID) :
                                    $currentBrandName = "";
                                    foreach ($brands as $brand) {
                                        if ($brand["id"] == $filterBrandID) {
                                            $currentBrandName .= $brand["band_name"];
                                        }
                                    }
                                ?>
                                    <div class="bg-custom-orange px-3 py-1 rounded-lg text-white">
                                        <?= $currentBrandName ?>
                                    </div>
                                <?php
                                endforeach;
                                ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4 px-3 py-5">
                    <?php foreach ($productLists as $product) : ?>
                        <!-- start card -->
                        <div class="bg-white shadow-md hover:shadow-2xl rounded-xl p-3 cursor-pointer">
                            <!-- card header -->
                            <div class="mb-2 flex justify-center">
                                <a href="../../Controller/products/productDetailsController.php?product_id=<?= $product["id"] ?>">
                                    <img src="../../../<?= $product["p_photo1"] ?>" class="rounded-xl h-[150px]" alt="product-img" />
                                </a>
                            </div>
                            <!-- card body -->
                            <div>
                                <div class="flex justify-between">
                                    <h2 class="text-md font-bold ">
                                        <a href="../../Controller/products/productDetailsController.php?product_id=<?= $product["id"] ?>">
                                            <?php
                                            if (strlen($product["p_name"]) > 14) {
                                                echo substr($product["p_name"], 0, 14) . "...";
                                            } else {
                                                echo $product["p_name"];
                                            }
                                            ?>
                                        </a>
                                    </h2>
                                    <button class="add-wishlist-btn">
                                        <input type="number" class="product-id" value="<?= $product["id"] ?>" hidden>
                                        <?php if (in_array($product["id"], $productIdsInWishlist)) { ?>
                                            <ion-icon name="heart" class="heart-icon text-red-600 text-lg"></ion-icon>
                                        <?php } else { ?>
                                            <ion-icon name="heart-outline" class="heart-icon text-red-600 text-lg"></ion-icon>
                                        <?php } ?>
                                    </button>
                                </div>

                                <!-- start stars -->
                                <div>
                                    <?php
                                    $currentProductRating = 0;
                                    $filteredProductRating = [];
                                    foreach ($productRatings as $rating) {
                                        if ($rating["product_id"] == $product["id"]) {
                                            $filteredProductRating[] = $rating;
                                        }
                                    }
                                    if (count($filteredProductRating) != 0) {
                                        $currentProductRating = $filteredProductRating[0]["average_rating"];
                                    }
                                    ?>
                                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                        <?php if ($i < round($currentProductRating)) { ?>
                                            <ion-icon class="text-[#F68721]" name="star"></ion-icon>
                                        <?php } else { ?>
                                            <ion-icon class="text-slate-500" name="star"></ion-icon>
                                        <?php } ?>
                                    <?php } ?>
                                </div>

                                <div class="block mb-2">
                                    <?php
                                    $discountPrice = ($product["p_discount"] * $product["p_sell_price"]) / 100;
                                    $price = $product["p_sell_price"] - $discountPrice;
                                    ?>
                                    <?php if ($product["p_discount"] != 0) : ?>
                                        <div class="text-custom-tiny font-bold">
                                            <span class="text-red-600 line-through"><?= $product["p_sell_price"] ?> Ks</span>
                                            <span class="text-red-600">( <?= $product["p_discount"] ?> % off)</span>
                                        </div>
                                        <div>
                                            <span class="text-custom-blue text-lg font-bold"><?= $price ?> ks</span>
                                        </div>
                                    <?php else : ?>
                                        <div>
                                            <span class="text-custom-blue text-lg font-bold"><?= $price ?> ks</span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="text-center">
                                    <button class="add-cart-btn text-custom-orange bg-custom-blue w-full rounded py-1 hover:scale-105">
                                        <input class="supplier-id" type="number" value="<?= $product["supplier_id"] ?>" hidden>
                                        <input class="product-id" type="number" value="<?= $product["id"] ?>" hidden>
                                        <ion-icon class="text-custom-large" name="cart"></ion-icon>
                                        <span class="text-white">Add to Cart</span>
                                    </button>
                                </div>
                            </div>
                            <!-- card body -->
                        </div>
                        <!-- end card -->
                    <?php endforeach; ?>

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

                    <form action="" method="GET">
                        <div class="brands-box p-4 border-custom-grey border-b-2 flex justify-between">
                            <h2 class="text-xl">Filter</h2>
                            <div>
                                <button class="px-3 py-1 bg-blue-500 text-white rounded-md">Search</button>
                            </div>
                        </div>

                        <!-- filter by category -->
                        <?php if(isset($filterCategory)): ?>
                            <input type="number" name="category" value="<?= $filterCategory ?>" hidden>
                            <div class="categories-box p-4 border-b-2 border-custom-grey">
                                <h2 class="text-xl">Category</h2>
                                <ul class="text-custom-medium px-2">
                                    <?php 
                                        foreach($categories as $category): 
                                            if($category["id"] == $filterCategory):
                                    ?>
                                        <li class="text-orange-500"><?= $category["cat_name"] ?></li>
                                    <?php 
                                            endif;
                                        endforeach; 
                                    ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <!-- filter by brand -->
                        <div class="brands-box p-4 border-custom-grey border-b-2">
                            <h2 class="text-xl">Brands</h2>
                            <ul class="text-custom-medium text-custom-grey px-2">
                                <?php foreach ($brands as $brand) { ?>
                                    <li>
                                        <input 
                                            type="checkbox" 
                                            name="brands[]" 
                                            id="<?= $brand["id"] ?>" 
                                            value="<?= $brand["id"] ?>" 
                                            <?php if (isset($filterBrands) && in_array($brand["id"], $filterBrands)) { echo "checked"; } ?>
                                        >
                                        <label for="<?= $brand["id"] ?>"><?= $brand["band_name"] ?></label>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>

                        <!-- filter by price -->
                        <div class="price-box p-4 border-custom-grey border-b-2">
                            <h2 class="text-xl">Price</h2>
                            <div class="flex space-x-2">
                                <input 
                                    class="w-[70px] border border-custom-grey rounded-md px-2" 
                                    type="text" 
                                    placeholder="min" 
                                    name="min_price" 
                                    value="<?php if ($filterByPrice) { echo $min_price; } else { echo ""; } ?>"
                                >
                                <span> - </span>
                                <input 
                                    class="w-[70px] border border-custom-grey rounded-md px-2" 
                                    type="text" 
                                    placeholder="max" 
                                    name="max_price" 
                                    value="<?php if ($filterByPrice) { echo $max_price; } else { echo ""; } ?>"
                                >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- END product SECTION -->

    <?php include "../components/footer.php"; ?>

</body>

</html>