<?php
include "../../Controller/home/homeController.php";
$productIdsInWishlist = [];
foreach ($productsInWishlist as $product) {
    $productIdsInWishlist[] = $product["product_id"];
}
?>

<!-- start header -->
<?php
$hasCssFile = FALSE;
$hasJsFile = TRUE;
$jsFiles = ["home","addWishlist","searchProduct","addCart"];
include "./../components/header.php";
?>
<!-- end header -->

<body class="relative">

    <?php include "../components/navbarForHome.php"; ?>

    <!-- start hero section -->
    <!-- end hero section -->

    <!-- start discount section -->
    <section class="py-3 px-3 sm:px-10 bg-custom-orange">
        <h2 class="text-2xl text-white font-semibold">Discount Products</h2>
        <div class="line h-[2px] w-full bg-white mt-5 mb-5"></div>
        <div class="container mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
            <?php foreach ($discountedProducts as $product) : ?>
                <!-- start card -->
                <div class="bg-white shadow-md hover:shadow-lg rounded-xl p-3">
                    <!-- card header -->
                    <div class="mb-2 flex justify-center">
                        <a href="../../Controller/products/productDetailsController.php?product_id=<?= $product["id"] ?>">
                            <img src="../../../<?= $product["p_photo1"] ?>" class="rounded-xl h-[150px]" alt="product-img" />
                        </a>
                    </div>
                    <!-- card body -->
                    <div>
                        <div class="flex justify-between items-center">
                            <h2 class="text-base sm:text-lg font-bold">
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
                                <?php if (in_array($product["id"], $productIdsInWishlist)) : ?>
                                    <ion-icon name="heart" class="heart-icon text-red-600 text-lg"></ion-icon>
                                <?php else : ?>
                                    <ion-icon name="heart-outline" class="heart-icon text-red-600 text-lg"></ion-icon>
                                <?php endif; ?>
                            </button>
                        </div>
                        <div>
                            <?php
                            $currentProductRating = 0;
                            $filterRating = [];
                            foreach ($productRatings as $rating) {
                                if ($rating["product_id"] == $product["id"]) {
                                    $filterRating[] = $rating;
                                }
                            }

                            if (count($filterRating) != 0) {
                                $currentProductRating = $filterRating[0]["average_rating"];
                            }
                            ?>
                            <?php
                            for ($i = 1; $i <= 5; $i++) :
                                if ($i < round($currentProductRating)) {
                            ?>
                                    <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                                <?php } else { ?>
                                    <ion-icon class="text-custom-medium text-slate-500" name="star"></ion-icon>

                            <?php }
                            endfor; ?>
                        </div>
                        <div class="block mb-2">
                            <?php
                            $discountPrice = ($product["p_discount"] * $product["p_sell_price"]) / 100;
                            $price = $product["p_sell_price"] - $discountPrice;
                            ?>
                            <div class="text-custom-tiny font-bold">
                                <span class="text-red-600 line-through"><?= $product["p_sell_price"] ?> Ks</span>
                                <span class="text-red-600">( <?= $product["p_discount"] ?> % off)</span>
                            </div>
                            <div>
                                <span class="text-custom-blue text-lg font-bold"><?= $price ?> ks</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="add-cart-btn text-custom-orange bg-custom-blue w-full rounded py-1">
                                <input class="supplier-id" type="number" value="<?= $product["supplier_id"] ?>" hidden>
                                <input class="product-id" type="number" value="<?= $product["id"] ?>" hidden>
                                <ion-icon class="text-lg" name="cart"></ion-icon>
                                <span class="text-white">Add to Cart</span>
                            </button>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>
        </div>
        <div class="text-end mt-5">
            <a href="./../Product/allProduct.php">
                <button class="text-white text-xl bg-custom-blue px-10 py-2 rounded-lg">Shop More...</button>
            </a>
        </div>
    </section>
    <!-- end discount section -->

    <!-- start just for you section -->
    <section class="py-3 px-3 sm:px-10 bg-white">
        <h2 class="bg-custom-blue py-2 text-2xl text-white text-center rounded-tr-2xl rounded-bl-2xl mb-5">
            Just For You</h2>
        <div class="container mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
            <?php foreach ($products as $product) : ?>
                <!-- start card -->
                <div class="bg-white shadow-md hover:shadow-lg rounded-xl p-3">
                    <!-- card header -->
                    <div class="mb-2 flex justify-center">
                        <a href="../../Controller/products/productDetailsController.php?product_id=<?= $product["id"] ?>">
                            <img src="../../../<?= $product["p_photo1"] ?>" class="rounded-xl h-[150px]" alt="product-img" />
                        </a>
                    </div>
                    <!-- card body -->
                    <div>
                        <div class="flex justify-between items-center">
                            <h2 class="text-base sm:text-lg font-bold">
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
                                <?php if (in_array($product["id"], $productIdsInWishlist)) : ?>
                                    <ion-icon name="heart" class="heart-icon text-red-600 text-lg"></ion-icon>
                                <?php else : ?>
                                    <ion-icon name="heart-outline" class="heart-icon text-red-600 text-lg"></ion-icon>
                                <?php endif; ?>
                            </button>
                        </div>
                        <div>
                            <?php
                            $currentProductRating = 0;
                            $filterRating = [];
                            foreach ($productRatings as $rating) {
                                if ($rating["product_id"] == $product["id"]) {
                                    $filterRating[] = $rating;
                                }
                            }

                            if (count($filterRating) != 0) {
                                $currentProductRating = $filterRating[0]["average_rating"];
                            }
                            ?>
                            <?php
                            for ($i = 1; $i <= 5; $i++) :
                                if ($i < round($currentProductRating)) {
                            ?>
                                    <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                                <?php } else { ?>
                                    <ion-icon class="text-custom-medium text-slate-500" name="star"></ion-icon>

                            <?php }
                            endfor; ?>
                        </div>
                        <div class="block mb-2">
                            <?php
                            $discountPrice = ($product["p_discount"] * $product["p_sell_price"]) / 100;
                            $price = $product["p_sell_price"] - $discountPrice;
                            ?>
                            <?php if($product["p_discount"] != 0): ?>
                                <div class="text-custom-tiny font-bold">
                                    <span class="text-red-600 line-through"><?= $product["p_sell_price"] ?> Ks</span>
                                    <span class="text-red-600">( <?= $product["p_discount"] ?> % off)</span>
                                </div>
                                <div>
                                    <span class="text-custom-blue text-lg font-bold"><?= $price ?> ks</span>
                                </div>
                            <?php else: ?>
                                <div>
                                    <span class="text-custom-blue text-lg font-bold"><?= $price ?> ks</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="text-center">
                            <button class="add-cart-btn text-custom-orange bg-custom-blue w-full rounded py-1">
                                <input class="supplier-id" type="number" value="<?= $product["supplier_id"] ?>" hidden>
                                <input class="product-id" type="number" value="<?= $product["id"] ?>" hidden>
                                <ion-icon class="text-lg" name="cart"></ion-icon>
                                <span class="text-white">Add to Cart</span>
                            </button>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>
        </div>
        <div class="text-end mt-5">
            <a href="./../Product/allProduct.php">
                <button class="text-white text-xl bg-custom-orange px-10 py-2 rounded-lg">Shop More...</button>
            </a>
        </div>
    </section>
    <!-- end just for you section -->

    <!-- start recently viewed section -->
    <section class="py-3 px-3 sm:px-10 bg-white">
        <h2 class="bg-custom-blue py-2 text-2xl text-white text-center rounded-tr-2xl rounded-bl-2xl mb-5">
            Recently Viewed</h2>
        <div class="container mx-auto grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">

            <!-- start card -->
            <div class="bg-blue-200 shadow-md hover:shadow-lg rounded-xl p-3">
                <!-- card header -->
                <div>
                    <img src="https://i5.walmartimages.com/asr/9a261ab6-c14f-41b5-9253-7a57a32ddf29.4f27d098d30daba67c363a4dcddad090.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" class="rounded-xl" alt="product-img" />
                </div>
                <!-- card header -->
                <!-- card body -->
                <div>
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-bold">Coca Cola</h2>
                        <ion-icon name="heart-outline" class="text-red-600 text-lg"></ion-icon>
                    </div>
                    <div>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                        <ion-icon class="text-custom-medium text-custom-orange" name="star"></ion-icon>
                    </div>
                    <div class="block sm:flex sm:justify-between sm:items-center mb-2">
                        <div class="text-custom-tiny font-bold">
                            <span class="text-red-600 line-through">10000 Ks</span>
                            <span class="text-red-600">( 20 % off)</span>
                        </div>
                        <div>
                            <span class="text-custom-blue text-lg font-bold">8000 ks</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="text-custom-orange bg-custom-blue w-full rounded py-1">
                            <ion-icon class="text-lg" name="cart"></ion-icon>
                            <span class="text-white">Add to Cart</span>
                        </button>
                    </div>
                </div>
                <!-- card body -->
            </div>

            <!-- add more cards here -->
        </div>
        <div class="text-end mt-5">
            <button class="text-white text-xl bg-custom-orange px-10 py-2 rounded-lg">Shop More...</button>
        </div>
    </section>
    <!-- end recently view section -->

    <?php include "../components/footer.php"; ?>












</body>


</html>