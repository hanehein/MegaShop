<?php
session_start();
$product = $_SESSION["product_detail"];
$reviews = $_SESSION["product_reviews"];
$averageRating = $_SESSION["average_rating"];
$rate_count = $_SESSION["rate_count"];

$total_rate_user = count($reviews);

// colors
if (strlen($product["p_color"]) == 0) {
    $colors = [];
} else {
    $colors = explode(",", $product["p_color"]);
}

// sizes
if (strlen($product["p_size"]) == 0) {
    $sizes = [];
} else {
    $sizes = explode(",", $product["p_size"]);
}

if (count($averageRating) != 0) {
    $rating = $averageRating[0]["average_rating"];
} else {
    $rating = 0;
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single product details</title>

    <!-- <link rel="stylesheet" href="../resources/lib/tailwind/output.css"> -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <script src="../resources/js/quantityAmount.js" defer></script>
    <script src="../resources/js/singleProductDetail.js" defer></script>
</head>

<body class="bg-body">
    <?php include "../components/responsiveNav.php"; ?>
    <!-- START Product detail SECTION -->
    <section class="py-4 px-[20px] sm:px-[0px]">
        <div class="container mx-auto">
            <div class="block md:grid md:grid-cols-3 gap-4">
                <div class="p-3 shadow-lg rounded-md mb-4">
                    <div class="mb-2 flex justify-center">
                        <img class="current-img h-[300px]" src="../../../<?= $product["p_photo1"] ?>" alt="product-img" />
                    </div>
                    <div class="flex space-x-2 justify-center items-center">
                        <div>
                            <button class="prev cursor-pointer">
                                <ion-icon class="text-black text-[50px]" name="chevron-back"></ion-icon>
                            </button>
                        </div>
                        <div class="image-lists flex space-x-2 justify-between">
                            <?php
                            for ($i = 1; $i <= $product["max_photo"]; $i++) :
                                if (!is_null($product["p_photo$i"])) :
                            ?>
                                    <div class="hover:cursor-pointer">
                                        <img class="slide-img w-[50px] h-[50px] sm:w-[70px] sm:h-[70px] hover:scale-110" src="../../../<?= $product["p_photo$i"] ?>" alt="product-img" />
                                    </div>
                            <?php
                                endif;
                            endfor;
                            ?>
                        </div>
                        <div>
                            <div class="next cursor-pointer">
                                <ion-icon class="text-black text-[50px]" name="chevron-forward"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 p-3 shadow-lg rounded-md">
                    <div class="border-b-2 py-2">
                        <div>
                            <!-- stars -->
                            <?php for ($i = 0; $i < 5; $i++) { ?>
                                <?php if ($i < round($rating)) { ?>
                                    <ion-icon class="text-base text-[#F68721]" name="star"></ion-icon>
                                <?php } else { ?>
                                    <ion-icon class="text-base text-slate-500" name="star"></ion-icon>
                                <?php } ?>
                            <?php } ?>
                            <!-- stars -->
                            <span class="text-base text-slate-500">
                                <?= number_format($rating, 1) ?>
                            </span>
                        </div>
                        <h2 class="text-2xl text-[#1F5BB8] font-bold">
                            <?= $product["p_name"] ?>
                        </h2>
                        <div>
                            <p class="text-lg text-[#F68721] font-bold">
                                <?php if ($product["p_discount"] != 0) {
                                    $discountPrice = ( $product["p_discount"] * $product["p_sell_price"] ) / 100;
                                    $price = $product["p_sell_price"] - $discountPrice;
                                    echo $price;
                                } else {
                                    echo $product["p_sell_price"];
                                } ?> MMK
                            </p>
                            <?php if ($product["p_discount"] != 0) { ?>
                                <p class="text-red-600 text-xs">
                                    <span class="line-through"><?= $product["p_sell_price"] ?> MMK</span> (<?= $product["p_discount"] ?>% off)
                                </p>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="border-b-2 py-2">

                        <!-- color box -->
                        <?php if (count($colors) != 0) { ?>
                            <div class="flex space-x-2 items-center mb-3">
                                <span class="text-slate-500">Color : </span>
                                <?php foreach ($colors as $color) { ?>
                                    <div class="w-[20px] h-[20px] rounded-full flex justify-center items-center shadow-sm cursor-pointer" style="background-color:<?= $color ?>"></div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <!-- color box -->

                        <!-- size box -->
                        <?php if (!count($sizes) == 0) { ?>
                            <div class="flex space-x-2 items-center mb-3">
                                <span class="text-slate-500">Size : </span>
                                <?php foreach ($sizes as $size) { ?>
                                    <div class="w-[35px] h-[20px] rounded-md bg-slate-500 flex justify-center items-center">
                                        <span class="text-xs font-bold"><?= $size ?></span>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } ?>
                        <!-- size box -->

                        <!-- quantity box -->
                        <div class="flex space-x-2 items-center mb-5">
                            <span class="text-slate-500">Quantity : </span>
                            <div id="reduce-qty" class="w-[30px] h-[30px] rounded-md bg-slate-500 flex justify-center items-center cursor-pointer active:scale-105">
                                <ion-icon class="text-white" name="remove"></ion-icon>
                            </div>
                            <div class="w-[50px] h-[30px] rounded-md bg-slate-500 flex justify-center items-center bg-transparent">
                                <span id="qty-amt" class="font-bold">1</span>
                            </div>
                            <div id="increase-qty" class="w-[30px] h-[30px] rounded-md bg-slate-500 flex justify-center items-center cursor-pointer active:scale-105">
                                <ion-icon class="text-white" name="add"></ion-icon>
                            </div>
                            <div>
                                <input id="stock_amt" type="number" value="<?= $product["p_stock"]; ?>" hidden>
                                <small class="text-red-500 text-semibold"><?= $product["p_stock"]; ?> items left</small>
                            </div>
                        </div>
                        <!-- quantity box -->

                        <!-- button box -->
                        <div class="flex space-x-5 items-center">
                            <button class="bg-[#F68721] text-white py-2 px-3 sm:px-6 rounded-md hover:bg-[#FFA94E] hover:scale-105">
                                <ion-icon class="text-lg" name="cart"></ion-icon> Add
                                to Cart
                            </button>
                            <button class="bg-[#024486] text-white py-2 px-3 sm:px-6 rounded-md hover:bg-[#1F5BB8] hover:scale-105">
                                <ion-icon class="text-lg" name="basket"></ion-icon>
                                Buy Now
                            </button>
                        </div>
                        <!-- button box -->
                    </div>

                    <div class="border-b-2 py-2">
                        <h2 class="text-lg font-bold mb-2">Description</h2>
                        <p>
                            <?= $product["p_description"] ?>
                        </p>
                    </div>

                    <div class="py-2">
                        <h2 class="text-lg font-bold mb-2">Store</h2>
                        <div class="flex space-x-3 items-center">
                            <div>
                                <img src="data:image/png;base64,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" class="w-[50px] h-[50px] rounded-full" alt="" />
                            </div>
                            <div>
                                <a href="./../shop/shopprofile.php?id=<?= $product["supplier_id"] ?>">
                                    <span><?= $product["sup_shop_name"] ?></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END Product Detail SECTION -->

    <!-- START Product Rating & Review Section -->
    <section class="py-4 px-[20px] sm:px-[0px]">
        <div class="container mx-auto">
            <div class="p-5">
                <div class="bg-[#024486] px-3 py-4">
                    <h2 class="text-lg text-white font-bold">
                        Rating & Reviews of <?= $product["p_name"] ?>
                    </h2>
                </div>

                <div class="block sm:flex sm:space-x-10 py-4">
                    <div class="mb-5 sm:mb-[0px]">
                        <div class="font-bold">
                            <p class="mb-4">
                                <span class="text-6xl"><?= number_format($rating, 1) ?></span>
                                <span class="text-5xl text-slate-500"> / 5</span>
                            </p>
                        </div>
                        <div>
                            <?php for ($i = 0; $i < 5; $i++) {  ?>
                                <?php if ($i < round($rating)) { ?>
                                    <ion-icon class="text-3xl text-[#F68721]" name="star"></ion-icon>
                                <?php } else { ?>
                                    <ion-icon class="text-3xl text-slate-500" name="star"></ion-icon>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>

                    <div>
                        <?php for ($i = 6; $i > 0; $i--) { ?>
                            <?php
                            $current_star_rate_percent = 0;
                            $current_star_rate_user_count = 0;

                            $filtered_rate_count = [];
                            foreach ($rate_count as $rate) {
                                if ($rate["rating"] == $i - 1) {
                                    $filtered_rate_count = $rate;
                                }
                            }

                            if (count($filtered_rate_count) != 0) {
                                $current_star_rate_user_count = $filtered_rate_count["rate_count"];
                                $current_star_rate_percent = ($filtered_rate_count["rate_count"] * 100) / $total_rate_user;
                            }
                            ?>
                            <div class="flex space-x-2 sm:space-x-5 items-center mb-3">
                                <div>
                                    <?php for ($x = 0; $x < 5; $x++) { ?>
                                        <?php if ($x < $i - 1) { ?>
                                            <ion-icon class="text-base sm:text-lg text-[#F68721]" name="star"></ion-icon>
                                        <?php } else { ?>
                                            <ion-icon class="text-base sm:text-lg text-slate-500" name="star"></ion-icon>
                                        <?php } ?>
                                    <?php } ?>
                                </div>

                                <div class="w-[150px] sm:w-[200px] h-[17px] bg-slate-500 relative">
                                    <div class="absoulte top-0 left-0 h-[100%] w-[<?= $current_star_rate_percent ?>%] bg-[#F68721]"></div>
                                </div>

                                <div><span class="text-base text-slate-500"><?= $current_star_rate_user_count ?></span></div>
                            </div>
                        <?php } ?>
                    </div>

                </div>

                <h2 class="py-3 mb-4 border-t-2 border-b-2 border-custom-grey">
                    Product Rating and Reviews (<?= count($reviews) ?>)
                </h2>

                <?php foreach ($reviews as $review): ?>
                    <!-- start review -->
                    <div class="p-4 shadow-lg rounded-md border-2 border-custom-blue mb-4">
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-3 items-center mb-3">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80" class="w-[40px] h-[40px] rounded-full" alt="user-profile" />
                                <span class="text-slate-500 text-sm font-bold"><?= $review["cus_name"] ?></span>
                            </div>
                            <div>
                                <span class="text-slate-500"><?= $review["review_create_date"] ?></span>
                            </div>
                        </div>
                        <div>
                            <?php 
                                for ($i = 0; $i < 5; $i++):
                                    if ($i < $review["rating"]):
                            ?>
                                <ion-icon class="text-lg text-[#F68721]" name="star"></ion-icon>
                            <?php else: ?>
                                <ion-icon class="text-lg text-slate-500" name="star"></ion-icon>
                            <?php 
                                    endif;
                                endfor; 
                            ?>
                        </div>
                        <p>
                            <?= $review["review"] ?>
                        </p>
                    </div>
                    <!-- end review -->
                <?php endforeach; ?>

            </div>
        </div>
    </section>
    <!-- END Product Review & Review Section -->

    <!-- footer -->
    <?php include "../components/footer.php"; ?>
</body>


</html>