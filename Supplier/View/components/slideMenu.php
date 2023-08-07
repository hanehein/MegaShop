<div class="bg-white h-screen overflow-y-auto">
    <a href="#" class="h-[60px] flex flex-col items-center justify-center font-['Wallpoet'] text-2xl text-[#66CC33] leading-none cursor-pointer">
        <p class="">MEGA</p>
        <p>SHOP</p>
    </a>
    <div class="menu-lists">
        <ul>
            <!-- dashboard -->
            <li class="">
                <a class="block capitalize px-3 py-4  font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white cursor-pointer" href="../dashboard/dashboard.php">
                    <ion-icon class="mr-3 text-[18px]" name="clipboard-outline"></ion-icon>
                    Dashboard
                </a>
            </li>

            <!-- products -->
            <li class="">
                <div class="capitalize px-3 py-4 font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white cursor-pointer">
                    <span>
                        <ion-icon class="mr-3 text-[18px]" name="bag-outline"></ion-icon>
                        Products
                    </span>
                </div>

                <ul class="child-menu">
                    <li>
                        <a class="block capitalize pl-[30px] pr-3 py-4  font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white cursor-pointer" 
                        href="../products/product.php">
                            Product Lists
                        </a>
                    </li>
                    <li>
                        <a class="block capitalize pl-[30px] pr-3 py-4 font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white cursor-pointer" 
                        href="../products/deletedProduct.php">
                            Deleted Products
                        </a>
                    </li>
                </ul>
            </li>

            <!-- orders -->
            <li class="">
                <div class="capitalize px-3 py-4 font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white cursor-pointer">
                    <span>
                        <ion-icon class="mr-3 text-[18px]" name="bag-outline"></ion-icon>
                        Orders
                    </span>
                </div>

                <ul class="child-menu">
                    <li>
                        <a class="block capitalize pl-[30px] pr-3 py-4  font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white cursor-pointer" 
                        href="../order/orderHistoryReview.php">
                            Order History Reviews
                        </a>
                    </li>
                    <li>
                        <a class="block capitalize pl-[30px] pr-3 py-4 font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white cursor-pointer" 
                        href="../order/recentIncomingOrder.php">
                            Recent Incoming Orders
                        </a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a class="block capitalize px-3 py-4  font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white cursor-pointer" href="">
                    <ion-icon class="mr-3 text-[18px]" name="person-outline"></ion-icon>
                    Customers
                </a>

            </li>

            <li class="">
                <a class="block capitalize px-3 py-4  font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white cursor-pointer" href="../reviews/ratingAndReview.php">
                    <ion-icon class="mr-3 text-[18px]" name="star-half-outline"></ion-icon>
                    Rating and Reviews
                </a>
            </li>
            <li class="">
                <a class="block capitalize px-3 py-4  font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white cursor-pointer" href="../message/message.php">
                    <ion-icon class="mr-3 text-[18px]" name="chatbox-outline"></ion-icon>
                    Messages
                </a>
            </li>
            <li class="px-3 py-4  font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white cursor-pointer">
                <ion-icon class="mr-3 text-[18px]" name="settings-outline"></ion-icon> Setting
            </li>
            <li class="">
                <a class="block capitalize px-3 py-4  font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white cursor-pointer" href="">
                    <ion-icon class="mr-3 text-[18px]" name="log-in-outline"></ion-icon>
                    Log Out
                </a>
            </li>
        </ul>
    </div>
</div>