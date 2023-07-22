<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="overflow-x-hidden bg-gray-50 w-full">
    <div class="overflow-x-hidden header flex flex-row justify-between items-center bg-white py-5 px-5 text-blue-800">
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
    <div class="flex flex-row bg-white mt-3 w-[500px] p-3 container mx-3 justify-between">
        <div class="flex flex-row space-x-4">
            <img src="../resources/images/shopprofileimages/flower.jpg" alt="" class="w-[50px] h-[50px]">

            <div class="flex flex-col">
                <p class="text-blue-800 text-2xl font-semibold">Trendy Thread</p>
                <p>235 followers</p>
            </div>
        </div>
        <div class="flex flex-row space-x-8">
            <div class="flex flex-col text-blue-800 justify-center items-center font-semibold">
                <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                <p>Chat Now</p>
            </div>
            <div class="flex flex-col text-orange-600 justify-center items-center font-semibold">
                <ion-icon name="person-add-outline"></ion-icon>
                <p>Follow</p>
            </div>
        </div>
    </div>
    <div class="container mx-3 bg-white flex flex-row justify-between items-center mt-3 p-3 font-semibold text-lg">
        <div class="flex flex-row space-x-5">
            <p>All products</p>
            <span>Profile</span>
        </div>

        <div class="flex flex-row">
            <input type="text" placeholder="Search in store" class=" border-blue-800 border-2 p-2 rounded-l-md">
            <span class="bg-blue-800 p-2 text-white rounded-r-md">Search</span>
        </div>
    </div>
    <div class="bg-white mt-3 py-3">
        <div class="grid grid-cols-4 gap-4">
            <div class="border border-r-4 px-5">
                <h1  class="font-semibold text-2xl">Category</h1>
                <p class="text-orange-600">Powerpoints, Switches & Savers</p>
                <p>Light Bulbs</p>
                <p>Celling Lights</p>
                <p>Exhoust Fans</p>
                <p>Electrical Circuitry & Parts</p>
                <p>Lighting Fixtures & Components</p>
                <p>Cables, Leads & Adapters</p>
                <p>Outdoor Lighting</p>
                <hr class="w-[340px] px-5 h-5 text-black text-center mt-4" />
                <h1 class="font-semibold text-2xl">Brand</h1>
                <input type="checkbox">
                <span>Philips</span>
                <input type="checkbox">
                <span>OSRAM</span>
                <input type="checkbox">
                <span>Sylvania</span>
                <input type="checkbox">
                <span>Feit Electric</span>
                <hr class="w-[340px] px-5 h-5 text-black text-center mt-4" />
                <h1>Price</h1>
                <div class="flex space-x-2">
                    <input type="text" value="min" class=" border-black border-2 p-2 rounded-md w-[100px]">
                    <span>-</span>
                    <input type="text" value="max" class=" border-black border-2 p-2 rounded-md w-[100px]">
                </div>

            </div>
            <div class="col-span-3 px-5">
                <div class="flex flex-row justify-between items-center">
                    <div class="flex flex-col">
                        <p class="text-blue-800 text-lg">Powerpoints, Switches & Savers</p>
                        <p>4 items found</p>
                        <div class="flex space-x-4">
                            <p>Filter By:</p>
                            <p class="bg-orange-600 rounded-2xl px-2 py-1 w-[70px]">Philips</p>
                            <p class="bg-orange-600 rounded-2xl px-2 py-1 w-[70px]">OSRAM</p>
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <p>Sort By:</p>
                        <select name="price" id="price" class="px-3 py-1 bg-transparent border border-orange-600 rounded-md text-orange-600">
                            <option value="1000">Price Low To High</option>
                        </select>
                    </div>
                </div>
                <section class="flex flex-col">
                    <div class="flex flex-row justify-between items-center">
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between items-center">
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                        <div class="w-[200px] h-[300px] bg-blue-200 mt-4 rounded-lg flex justify-center ">
                            <div class="w-[100px] h-[160px] mt-3">
                                <img src="../resources/images/shopprofileimages/shirt.jpg" alt="" class="rounded-[30px] text-center">
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</body>

</html>