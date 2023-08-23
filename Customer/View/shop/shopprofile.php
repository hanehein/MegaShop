<?php
include "../../Controller/shop/shopProfileController.php";
include "../../Controller/products/brandListController.php";

$productIdsInWishlist = [];
foreach ($productsInWishlist as $product) {
    $productIdsInWishlist[] = $product["product_id"];
}

$followerIds = [];
foreach ($tot_followers as $follower) {
    $followerIds[] = $follower["cus_id"];
}
?>

<!-- start header -->
<?php 
$hasCssFile = FALSE;
$hasJsFile = TRUE;
$jsFiles = ["addWishlist","addCart"];
include "../components/header.php";
?>
<!-- end header -->

<body class="overflow-x-hidden bg-gray-50 w-full">
    <!--Start navbar-->
    <?php include "./../components/responsiveNav.php" ?>
    <!--end bar-->
    <div class="h-[80px]"></div>
    <div class="px-3">
        <div class="flex flex-row bg-white mt-3 w-full md:w-[500px] p-3 justify-between">
            <div class="flex flex-row space-x-2 md:space-x-4">
                <?php if (is_null($sup_data["shop_photo_path"])) : ?>
                    <img src="../resources/img/store.png" alt="" class="w-[50px] h-[50px]">
                <?php else : ?>
                    <img src="../../../<?= $sup_data["shop_photo_path"] ?>" alt="" class="w-[50px] h-[50px]">
                <?php endif; ?>

                <div class="flex flex-col">
                    <p class="text-blue-800 text-xl md:text-2xl font-semibold"><?= $sup_data["sup_shop_name"] ?></p>
                    <p><?= count($tot_followers) ?> followers</p>
                </div>
            </div>
            <div class="flex flex-row space-x-2 md:space-x-8">
                <div class="flex flex-col text-blue-800 justify-center items-center font-semibold">
                    <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                    <p>Chat Now</p>
                </div>
                <?php if(in_array($customer_id, $followerIds)):  ?>
                    <div class="flex flex-col text-orange-600 justify-center items-center font-semibold">
                        <ion-icon name="person-remove-outline"></ion-icon>
                        <a href="../../Controller/shop/unFollowController.php?supplier_id=<?= $sup_data["id"] ?>">Unfollow</a>
                    </div>
                <?php else: ?>
                    <div class="flex flex-col text-orange-600 justify-center items-center font-semibold">
                    <a href="../../Controller/shop/followController.php?supplier_id=<?= $sup_data["id"] ?>"><ion-icon name="person-add-outline"></ion-icon></a>
                        <a href="../../Controller/shop/followController.php?supplier_id=<?= $sup_data["id"] ?>">Follow</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!--submenu-->
    <div class="container mx-3 bg-white flex flex-row justify-between items-center mt-3 p-2 md:p-3 font-semibold text-md">
        <div class="flex flex-row space-x-5">
            <a class="relative" href="./shopProfile.php?id=<?= $sup_data["id"] ?>">
                All products
                <div class="line w-full h-[3px] bg-custom-blue absolute bottom-[-2px] left-0"></div>
            </a>
            <a href="./shopProfileDetail.php?id=<?= $sup_data["id"] ?>">
                Profile
            </a>
        </div>
    </div>

    <!--Start product section-->
    <section class="relative bg-white mt-3">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4 px-3 py-5">
            <?php foreach ($products as $product) : ?>
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
    </section>
    <!-- START footer SECTION -->
    <!--Start footer-->
    <?php include "../components/footer.php"; ?>
    <!-- END footer SECTION -->

</body>

</html>