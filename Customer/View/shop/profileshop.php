<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Profile</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
</head>

<body class="overflow-x-hidden bg-gray-50 w-full">
    <!--Start navbar-->
    <div class="container mx-auto overflow-x-hidden header flex flex-row justify-between items-center bg-white py-5 px-5 text-blue-800">
        <ion-icon id="close" name="close-outline" class="text-blue-800 md:hidden sm:flex text-4xl self-end"></ion-icon>
        <div class="logoname font-wallpoet">Mega Shop</div>
        <div class="menu">
            <ul class="flex flex-col md:flex-row space-x-4 cursor-pointer">
                <a href="#">
                    <li class="hover:underline transition-all duration-100 delay-75 ease-linear">
                        HOME
                    </li>
                </a>
                <a href="#">
                    <li class="hover:underline transition-all duration-100 delay-75 ease-linear">
                        PRODUCTS
                    </li>
                </a>
                <a href="#">
                    <li class="hover:underline transition-all duration-100 delay-75 ease-linear">
                        STORES
                    </li>
                </a>
                <a href="#">
                    <li class="hover:underline transition-all duration-100 delay-75 ease-linear">
                        ABOUT US
                    </li>
                </a>
                <a href="#">
                    <li class="hover:underline transition-all duration-100 delay-75 ease-linear">
                        CONTACT US
                    </li>
                </a>
            </ul>
        </div>
        <div class="profile">
            <ul class="flex flex-row space-x-2">
                <li class="cursor-pointer">
                    <ion-icon name="cart"></ion-icon><sup>2</sup>
                </li>
                <li class="cursor-pointer">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </li>
                <li>
                    <ion-icon class="flex md:hidden" name="menu-outline" id="menuBtn"></ion-icon>
                </li>
            </ul>
        </div>
    </div>
    <!--Start product section-->
    <div class="block sm:grid sm:grid-cols-5 gap-4">
        <div class="hidden sm:block border-r-2 border-custom-grey">

            <div class="categories-box p-4 border-b-2 border-custom-grey">
                <h1 class="font-semibold text-2xl">Category</h1>
                <p class="text-orange-600">Powerpoints, Switches & Savers</p>
                <ul class="text-custom-medium text-custom-grey px-2">
                    <li>Light Bulbs</li>
                    <li>Celling Lights</li>
                    <li>Exhoust Fans</li>
                    <li>Electrical Circuitry & Parts</li>
                    <li>Lighting Fixtures & Components</li>
                    <li>Cables, Leads & Adapters</li>
                    <li>Outdoor Lighting</li>
                </ul>
            </div>

            <div class="brands-box p-4 border-custom-grey border-b-2">
                <h2 class="text-custom-extra-large">Brands</h2>
                <ul class="text-custom-medium text-custom-grey px-2">
                    <li><input type="checkbox "> Philips</li>
                    <li><input type="checkbox"> OSRAM</li>
                    <li><input type="checkbox"> Sylvania</li>
                    <li><input type="checkbox"> Feit Electric</li>
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
        <!--End left section-->
        <div class="col-span-4">
            <div class="px-5 py-2 border-custom-grey border-b-2">
                <div class="x-3 flex justify-between items-center mb-4">
                    <h1 class="text-custom-blue">Powerpoints, Switches & Savers</h1>
                    <div>
                        <label for="categories" class="text-custom-grey">Sort By :</label>
                        <select id="categories" class="bg-inherit border border-custom-orange text-custom-orange text-custom-medium px-3 py-1 rounded-md">
                            <option value="">Price Low To High</option>
                            <option value="">Price High To Low</option>
                        </select>
                    </div>
                </div>
                <div>
                    <small class="mb-3">4 items found</small>
                    <div class="flex space-x-4 items-center">
                        <small class="text-custom-grey">Filtered By : </small>
                        <div class="bg-custom-orange px-3 py-1 rounded-lg text-white">
                            Philips
                        </div>
                        <div class="bg-custom-orange px-3 py-1 rounded-lg text-white">
                            OSRAM
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-5 2xl:grid-cols-8 gap-4 px-3 py-5">
                <!-- start card -->
                <div class="bg-white shadow-md hover:shadow-2xl rounded-xl p-3">
                    <!-- card header -->
                    <div>
                        <img src="https://i5.walmartimages.com/asr/9a261ab6-c14f-41b5-9253-7a57a32ddf29.4f27d098d30daba67c363a4dcddad090.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF" class="rounded-xl" alt="product-img" />
                    </div>
                    <!-- card header -->
                    <!-- card body -->
                    <div>
                        <div class="flex justify-between items-center">
                            <h2 class="text-custom-large font-bold">Coca Cola</h2>
                            <ion-icon name="heart-outline" class="text-red-600 text-custom-large"></ion-icon>
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
                                <span class="text-custom-blue text-custom-large font-bold">8000 ks</span>
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
            </div>
        </div>
    </div>
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