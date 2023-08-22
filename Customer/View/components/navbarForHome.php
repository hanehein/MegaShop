<?php include "../../Controller/products/categoryListController.php" ?>
<!-- START NAVBAR -->
<nav>
    <div class="container mx-auto flex justify-between items-center px-2 md:px-6 py-4 z-10">
        <!-- logo -->
        <a href="#" class="flex flex-col items-center justify-center font-['Wallpoet'] text-2xl text-[#024486] leading-none cursor-pointer">
            <p class="">MEGA</p>
            <p>SHOP</p>
        </a>
        <div class="hidden md:block">
            <ul class="flex space-x-6 text-custom-blue font-bold">
                <li><a href="../home/index.php">Home</a></li>
                <li><a href="../Product/allProduct.php">Products</a></li>
                <li><a href="../Product/shoplists.php">Shop Lists</a></li>
                <li><a href="../Product/aboutUs.php">About Us</a></li>
                <li><a href="../contact/contactadmin.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="hidden md:block">
            <div class="flex space-x-2 items-center">
                <div>
                    <?php if (is_null($_SESSION["logined_customer"]["cus_photo"])) : ?>
                        <a href="../profile/profile.php">
                            <img class="w-[30px] h-[30px] rounded-full" src="../resources/img/customer_profile.png" alt="">
                        </a>
                    <?php else : ?>
                        <img class="w-[30px] h-[30px] rounded-full" src="../resources/img/customer_photo.jpg" alt="">
                    <?php endif; ?>
                </div>
                <span class="text-custom-blue font-semibold">
                    <a href="../profile/profile.php"><?= $_SESSION["logined_customer"]["cus_name"] ?></a>
                </span>
            </div>
        </div>
        <div class="block md:hidden">
            <button class="nav-menu">
                <ion-icon class="text-3xl" name="menu"></ion-icon>
            </button>
        </div>
    </div>
</nav>

<div class="mobile-nav hidden sm:hidden absolute top-0 left-0 bottom-0 right-0 z-10">
    <div class="flex justify-between">
        <div></div>
        <div class="min-w-[200px] h-screen bg-white p-5">
            <div class="pt-2 pr-2 text-end">
                <button class="menu-hide"><ion-icon class="text-2xl" name="close"></ion-icon></button>
            </div>
            <div>
                <ul class="text-custom-blue font-bold">
                    <li class="py-2">
                        <a href="../home/index.php">Home</a>
                    </li>
                    <li class="py-2">
                        <a href="../Product/allProduct.php">Products</a>
                    </li>
                    <li class="py-2">
                        <a href="../Product/shoplists.php">Shop Lists</a>
                    </li>
                    <li class="py-2">
                        <a href="../Product/aboutUs.php">About Us</a>
                    </li>
                    <li class="py-2">
                        <a href="../contact/contactadmin.php">Contact Us</a>
                    </li>
                    <li class="py-2">
                        <div class="flex space-x-2 items-center">
                            <div>
                                <?php if (is_null($_SESSION["logined_customer"]["cus_photo"])) : ?>
                                    <a href="../profile/profile.php">
                                        <img class="w-[30px] h-[30px] rounded-full" src="../resources/img/customer_profile.png" alt="">
                                    </a>
                                <?php else : ?>
                                    <img class="w-[30px] h-[30px] rounded-full" src="../resources/img/customer_photo.jpg" alt="">
                                <?php endif; ?>
                            </div>
                            <span class="text-custom-blue font-semibold">
                                <a href="../profile/profile.php"><?= $_SESSION["logined_customer"]["cus_name"] ?></a>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END NAVBAR -->

<!-- START category and filter -->
<div class="bg-custom-blue px-2 md:px-6 py-4">
    <div class="container mx-auto flex justify-between items-center">
        <div>
            <select id="categories" class="bg-inherit text-md sm:text-lg border-2 border-white text-white px-2 py-1">
                <option value="">Categories</option>
                <?php foreach ($categories as $category) { ?>
                    <a href="../Product/allProduct.php">
                        <option value="<?= $category["id"] ?>">
                            <?= $category["cat_name"] ?>
                        </option>
                    </a>
                <?php } ?>
            </select>
        </div>
        <div class="hidden sm:block">
            <!-- desktop search input -->
            <div class="relative">
                <div class="relative">
                    <form action="../Product/allProduct.php" method="GET" class="w-full flex space-x-2">
                        <input type="text" name="search_value" id="search-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[300px] pl-10 p-2.5" placeholder="Search Products..." required>
                        <button class="px-4 py-1 rounded-md bg-custom-orange text-white">Search</button>
                    </form>
                </div>
                <div class="search-lists w-full absolute top-full py-2 z-50 rounded-md overflow-hidden">
                    <!-- <div class="flex justify-between items-center p-2 bg-slate-300 cursor-pointer border-b-[2px]">
                        <div>
                            <img src="../resources/img/callfoduty.png" class="h-[50px]" alt="">
                        </div>
                        <p class="text-[#024486]">product name</p>
                    </div> -->
                </div>
            </div>
            <!-- desktop search input -->
        </div>
        <div class="space-x-2">
            <button class="mobile-search-btn inline sm:hidden"><ion-icon class="text-3xl text-white" name="search"></ion-icon></button>
            <button class="relative">
                <ion-icon class="text-3xl text-white" name="cart"></ion-icon>
                <?php if(count($productsInCart) != 0): ?>
                    <span class="absolute top-[-10px] right-[-10px] w-[18px] h-[18px] bg-custom-orange text-white text-xs rounded-full flex justify-center items-center"><?= count($productsInCart) ?></span>
                <?php endif; ?>
                
            </button>
        </div>
    </div>
    <div class="mobile-search-container hidden sm:hidden mt-4">
        <!-- mobile search input -->
        <div class="relative">
            <div>
                <form action="../Product/allProduct.php" method="GET" class="flex space-x-2">
                    <input type="text" id="mobile-search-input" name="search_value" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Search Products..." required>
                    <button class="px-4 py-1 rounded-md bg-custom-orange text-white">Search</button>
                </form>
            </div>
            <div class="mobile-search-lists w-full absolute top-full py-2 z-50 rounded-md overflow-hidden"></div>
        </div>
        <!-- mobile search input -->
    </div>
</div>
<!-- END category and filter -->