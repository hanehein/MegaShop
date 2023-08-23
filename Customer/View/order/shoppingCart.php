<?php
include "../../Controller/shoppingcart/productListsController1.php";
?>

<!-- start header -->
<?php 
$hasCssFile = FALSE;
$hasJsFile = FALSE;
include "./../components/header.php";
?>
<!-- end header -->
<body>
    <!-- START NAVBAR -->
    
    <!-- END NAVBAR -->

    <!-- START Shopping Cart SECTION -->
    <section class="p-4">
        <div class="container mx-auto block sm:grid sm:grid-cols-3 sm:gap-4">
            <div class="card-container sm:col-span-2 mb-4">

                <?php foreach($productLists as $product): ?>
                    <!-- start cart -->
                    <div class="rounded-md overflow-hidden shadow-lg mb-5">
                        <div class="p-2 bg-custom-blue">
                            <p class="text-white"><a href=""><?= $product["sup_shop_name"] ?></a></p>
                        </div>
                        <div class="flex justify-between p-4 items-center">
                            <div class="block sm:hidden">
                                <img class="max-w-[100px]" src="../../../<?= $product["p_photo1"] ?>" alt="product-img">
                            </div>
                            <div class="block sm:flex sm:justify-between sm:w-full sm:items-center">
                                <div class="mb-2 flex items-center space-x-2">
                                    <div class="hidden sm:block">
                                        <img class="max-w-[100px]" src="../../../<?= $product["p_photo1"] ?>" alt="product-img">
                                    </div>
                                    <div>
                                        <h2 class="text-custom-large font-bold">
                                            <?php if (strlen($product["p_name"]) > 14) {
                                                echo substr($product["p_name"], 0, 14) . "...";
                                            } else {
                                                echo $product["p_name"];
                                            }
                                            ?>
                                        </h2>
                                        
                                        <!-- <p class="text-custom-grey">Color : blue</p>
                                        <p class="text-custom-grey">Size : M</p> -->
                                        <div class="space-x-2 hidden sm:flex">
                                            <div class="items-center">
                                                <ion-icon class="text-custom-medium" name="trash-bin"></ion-icon>
                                                <span class="text-custom-tiny text-custom-grey"> Remove</span>
                                            </div>
                                            <div class="items-center">
                                                <ion-icon class="text-custom-medium" name="heart-outline"></ion-icon>
                                                <span class="text-custom-tiny text-custom-grey"> Add To Wishlists</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex space-x-2 sm:flex-col items-center mb-2">
                                    <?php 
                                        $discountPrice = ( $product["p_discount"] * $product["p_sell_price"] ) / 100;
                                        $price = $product["p_sell_price"] - $discountPrice;
                                    ?>
                                    <?php if($product["p_discount"] != 0): ?>
                                        <p class="text-custom-orange text-custom-extra-large"><?= $price ?> Ks</p>
                                        <p class="text-custom-tiny line-through"><?= $product["p_sell_price"] ?> Ks</p>
                                        <p class="text-custom-tiny text-custom-orange">(<?= $product["p_discount"] ?>%)</p>
                                    <?php else: ?>
                                        <p class="text-custom-orange text-custom-extra-large"><?= $price ?> Ks</p>
                                    <?php endif; ?>
                                    
                                </div>
                                <div>
                                    <div class="items-center">
                                        <div class="flex space-x-2 items-center">
                                            <div class="w-[30px] h-[30px] rounded-md bg-custom-grey flex justify-center items-center">
                                                <ion-icon class="text-white" name="remove"></ion-icon>
                                            </div>
                                            <div class="w-[50px] h-[30px] rounded-md bg-grey flex justify-center items-center bg-transparent">
                                                <span class="font-bold"><?= $product["qty"] ?></span>
                                            </div>
                                            <div class="w-[30px] h-[30px] rounded-md bg-custom-grey flex justify-center items-center">
                                                <ion-icon class="text-white" name="add"></ion-icon>
                                            </div>
                                        </div>
                                        <div>
                                            <small class="font-custom-tiny">only <?= $product["p_stock"] - $product["qty"] ?> items left</small>
                                        </div>
                                    </div>
                                    <div class="space-x-2 flex sm:hidden">
                                        <div class="items-center">
                                            <ion-icon class="text-custom-medium" name="trash-bin"></ion-icon>
                                            <span class="text-custom-tiny text-custom-grey"> Remove</span>
                                        </div>
                                        <div class="items-center">
                                            <ion-icon class="text-custom-medium" name="heart-outline"></ion-icon>
                                            <span class="text-custom-tiny text-custom-grey"> Add To Wishlists</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end cart -->
                <?php endforeach; ?>

            </div>

            <div>
                <div class="order-container bg-custom-blue text-white rounded-md p-4">
                    <h2 class="text-custom-extra-large font-bold">Total</h2>
                    <!-- start itemlists -->
                    <?php $totalPrice = 0; ?>
                    <div class="itemlists-container mb-4">
                        <?php foreach($productLists as $product): ?>
                            <div class="item flex justify-between mb-2">
                                <?php if (strlen($product["p_name"]) > 20): ?>
                                    <span><?= substr($product["p_name"], 0, 20) . "..." ?></span>
                                <?php else: ?>
                                    <span><?= $product["p_name"] ?></span>
                                <?php endif; ?>
                                <?php
                                    $discountPrice = ( $product["p_discount"] * $product["p_sell_price"] ) / 100;
                                    $price = ($product["p_sell_price"] - $discountPrice) * $product["qty"];
                                    $totalPrice = $totalPrice + $price;
                                ?>
                                <span><?= $price ?> Ks</span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- end itemlists -->

                    <div class="line w-full h-[3px] bg-white mb-2"></div>

                    <div class="total flex justify-between font-bold mb-4">
                        <span>Total</span>
                        <span><?= $totalPrice ?> Ks</span>
                    </div>

                    <a href="../order/checkout.php">
                        <button class="checkout-btn bg-custom-orange w-full rounded-md text-white text-custom-extra-large font-bold uppercase py-1">
                            go to checkout
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END Shopping Cart SECTION -->

    <!-- START footer SECTION -->
    <section class="bg-custom-blue p-3 static bottom-0">
        <div class="container mx-auto">
            <div class="block sm:border-b-2 sm:border-white sm:flex sm:justify-between mb-2">
                <div class="px-4 py-6 text-white border-b-2 border-white sm:border-none">
                    <h2 class="text-custom-extra-large font-bold">Quick Link</h2>
                    <ul class="list-disc px-5">
                        <li>About Us</li>
                        <li>Privacy & Policy</li>
                        <li>How To Buy Guide</li>
                    </ul>
                </div>

                <div class="px-4 py-6 text-white border-b-2 border-white sm:border-none">
                    <h2 class="text-custom-extra-large font-bold">Help ?</h2>
                    <ul class="list-disc px-5">
                        <li>Payment</li>
                        <li>Return & Exchange</li>
                        <li>FAQ</li>
                    </ul>
                </div>

                <div class="px-4 py-6 text-white border-b-2 border-white sm:border-none">
                    <h2 class="text-custom-extra-large font-bold">Contact Us</h2>
                    <ul class="px-5">
                        <li><ion-icon name="call"></ion-icon> +95777777777</li>
                        <li><ion-icon name="mail"></ion-icon> example@gmial.com</li>
                        <li class="space-x-3">
                            <ion-icon name="logo-facebook"></ion-icon>
                            <ion-icon name="logo-instagram"></ion-icon>
                            <ion-icon name="logo-twitter"></ion-icon>
                        </li>
                    </ul>
                </div>

            </div>
            <p class="text-center text-white font-bold">©2023 MEGA SHOP All rights reserved.</p>
        </div>
    </section>
    <!-- END footer SECTION -->

</body>

</html>