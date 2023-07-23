<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop profile Detail</title>
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
        <!--profile-->
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
    <!--next bar-->
    <div class="flex flex-row bg-white mt-3 w-[350px] md:w-[500px] p-3 container mx-3 justify-between">
        <div class="flex flex-row space-x-2 md:space-x-4">
            <img src="../resources/images/shopprofileimages/flower.jpg" alt="" class="w-[50px] h-[50px]">

            <div class="flex flex-col">
                <p class="text-blue-800 text-xl md:text-2xl font-semibold">Trendy Thread</p>
                <p>235 followers</p>
            </div>
        </div>
        <div class="flex flex-row space-x-2 md:space-x-8">
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
    <!--submenu-->
    <div class="container mx-3 bg-white hidden md:flex flex-row justify-between items-center mt-3 p-2 md:p-3 font-semibold text-xs md:text-lg">
        <div class="flex flex-row space-x-2 md:space-x-5">
            <p>Homepage</p>
            <p>All products</p>
            <span>Profile</span>
        </div>
        <!--search-->
        <div class="flex flex-row">
            <input type="text" placeholder="Search in store" class=" border-blue-800 border-2 p-2 rounded-l-md">
            <span class="bg-blue-800 p-2 text-white rounded-r-md">Search</span>
        </div>
    </div>
    <!--content-->
    <section class="bg-white mt-3 space-y-6 p-5">
        <p class="text-lg font-bold ml-[80px] md:ml-[535px]">Average Seller Ratings</p>
        <div class="flex flex-col justify-between items-center space-y-3">
            <div class="flex flex-col md:flex-row space-y-5 md:space-y-0 items-center space-x-11">
                <div class="flex flex-col space-y-2 items-start">
                    <h1 class="text-xl font-semibold">94%</h1>
                    <div class="flex flex-row items-center justify-center space-x-3">
                        <p>Positive</p>
                        <div class="bg-gray-500 w-[210px] h-[13px]">
                            <div class="w-[180px] h-[13px] bg-orange-600"></div>
                        </div>
                        <span>432</span>
                    </div>
                    <div class="flex flex-row items-center justify-center space-x-3">
                        <p>Natural</p>
                        <div class="bg-gray-500 w-[210px] h-[13px]">
                            <div class="w-[7px] h-[13px] bg-orange-600"></div>
                        </div>
                        <span>13</span>
                    </div>
                    <div class="flex flex-row items-center justify-center space-x-3">
                        <p>Negative</p>
                        <div class="bg-gray-500 w-[210px] h-[13px]">
                            <div class="w-[12px] h-[13px] bg-orange-600"></div>
                        </div>
                        <span>16</span>
                    </div>
                </div>
                <div class="flex flex-col space-y-2 items-center">
                    <h1 class="font-semibold text-xl">Seller Ratings and Reviews(16)</h1>
                    <div class="flex space-x-16">
                        <ion-icon name="happy-outline"></ion-icon>
                        <ion-icon name="happy-outline"></ion-icon>
                    </div>
                    <div class="flex flex-row space-x-5">
                        <p>Positive</p>
                        <p>Natural</p>
                        <p>Negative</p>
                    </div>
                </div>
            </div>
            <!--chatbox-->
            <div class="border-4 border-blue-200 w-[350px] h[300px] md:w-[800px] md:h-[180px] rounded-md p-3">
                <div class="flex flex-col space-y-2">
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-2 items-center">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80" class="w-[40px] h-[40px] rounded-full" alt="user-profile" />
                            <span class="text-grey text-sm font-bold">Mark Albert</span>
                        </div>
                        <p class="text-grey">27 Oct 2022</p>
                    </div>
                    <div class="flex items-center space-x-1">
                        <ion-icon name="happy" class="text-xl text-yellow-600"></ion-icon>
                        <span>Positive</span>
                    </div>
                    <p>I recently purchased the [Brand Name] backpack, and I must say, it has exceeded my expectations in every way.
                        This backpack has proven to be a reliable companion, accompanying me on various adventures, from daily
                        commutes to weekend getaways. Here are my thoughts on this fantastic product.</p>
                </div>
            </div>
            <div class="border-4 border-blue-200 w-[350px] h[300px] md:w-[800px] md:h-[180px] rounded-md p-3">
                <div class="flex flex-col space-y-2">
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-2 items-center">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80" class="w-[40px] h-[40px] rounded-full" alt="user-profile" />
                            <span class="text-grey text-sm font-bold">Sandy</span>
                        </div>
                        <p class="text-grey font-light">27 Oct 2022</p>
                    </div>
                    <div class="flex items-center space-x-1">
                        <ion-icon name="happy" class="text-xl text-yellow-600"></ion-icon>
                        <span>Positive</span>
                    </div>
                    <p>from daily commutes to weekend getaways. Here are my thoughts on this fantastic product.</p>
                </div>
            </div>
            <div class="border-4 border-blue-200 w-[350px] h[300px] md:w-[800px] md:h-[180px] rounded-md p-3">
                <div class="flex flex-col space-y-2">
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-2 items-center">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80" class="w-[40px] h-[40px] rounded-full" alt="user-profile" />
                            <span class="text-grey text-sm font-bold">Sandy</span>
                        </div>
                        <p class="text-grey">27 Oct 2022</p>
                    </div>
                    <div class="flex items-center space-x-1">
                        <ion-icon name="happy" class="text-xl text-yellow-600"></ion-icon>
                        <span>Positive</span>
                    </div>
                    <p>from daily commutes to weekend getaways. Here are my thoughts on this fantastic product.</p>
                </div>
            </div>
            <div class="flex justify-center items-center">
                <div class="w-[30px] h-[30px] md:w-[50px] md:h-[50px] border-2 border-blue-600 flex justify-center items-center rounded-l-md"></div>
                <div class="w-[30px] h-[30px] md:w-[50px] md:h-[50px] border-2 border-blue-600 flex justify-center items-center bg-blue-600">1</div>
                <div class="w-[30px] h-[30px] md:w-[50px] md:h-[50px] border-2 border-blue-600 flex justify-center items-center">2</div>
                <div class="w-[30px] h-[30px] md:w-[50px] md:h-[50px] border-2 border-blue-600 flex justify-center items-center">3</div>
                <div class="w-[30px] h-[30px] md:w-[50px] md:h-[50px] border-2 border-blue-600 flex justify-center items-center">...</div>
                <div class="w-[30px] h-[30px] md:w-[50px] md:h-[50px] border-2 border-blue-600 flex justify-center items-center">41</div>
                <div class="w-[30px] h-[30px] md:w-[50px] md:h-[50px] border-2 border-blue-600 flex justify-center items-center">42</div>
                <div class="w-[30px] h-[30px] md:w-[50px] md:h-[50px] border-2 border-blue-600 flex justify-center items-center">43</div>
                <div class="w-[30px] h-[30px] md:w-[50px] md:h-[50px] border-2 border-blue-600 flex justify-center items-center rounded-r-md"></div>
            </div>
        </div>
    </section>
    <!--product ratings & reviews-->
    <section class="bg-white flex flex-col p-5 mt-5">
        <p class="text-xl font-semibold">Product Ratings & Reviews(345)</p>
        <div class="flex space-x-6 p-5">
            <img src="../resources/img/cola.jpg" alt="" class="w-[80px] h-[120px]">
            <div class="flex flex-col">
                <p class="text-blue-600 font-bold text-2xl mb-3">STEP Women Blouse Short Sleeves 007402</p>
                <div class="flex space-x-1">
                    <ion-icon name="star" class="text-yellow-700"></ion-icon>
                    <ion-icon name="star" class="text-yellow-700"></ion-icon>
                    <ion-icon name="star" class="text-yellow-700"></ion-icon>
                    <ion-icon name="star" class="text-yellow-700"></ion-icon>
                    <ion-icon name="star" class="text-yellow-700"></ion-icon>
                </div>
                <p>I recently purchased the [Brand Name] backpack, and I must say, it has exceeded my expectations in every way.
                    This backpack has proven to be a reliable companion, accompanying me on various adventures, from daily
                    commutes to weekend getaways. Here are my thoughts on this fantastic product.</p>
                <div class="flex space-x-4 mt-5">
                    <img src="../resources/img/colacan.jpg" alt="" class="w-[100px] h-[130px]">
                    <img src="../resources/img/oreo.jpg" alt="" class="w-[100px] h-[130px]">
                </div>
                <div class="flex space-x-3">
                    <p class="text-gray-600 font-thin">27 Oct 2022 By</p>
                    <p class="text-blue-600 font-semibold">Mark Albert</p>
                </div>
            </div>
        </div>
        <hr class="w-full px-5 h-5 text-black font-bold text-center mt-4" />
        <div class="flex space-x-6 p-5">
            <img src="../resources/img/cola.jpg" alt="" class="w-[80px] h-[120px]">
            <div class="flex flex-col">
                <p class="text-blue-600 font-bold text-2xl mb-3">STEP Women Blouse Short Sleeves 007402</p>
                <div class="flex space-x-1">
                    <ion-icon name="star" class="text-yellow-700"></ion-icon>
                    <ion-icon name="star" class="text-yellow-700"></ion-icon>
                    <ion-icon name="star" class="text-yellow-700"></ion-icon>
                    <ion-icon name="star" class="text-yellow-700"></ion-icon>
                    <ion-icon name="star" class="text-yellow-700"></ion-icon>
                </div>
                <p>I recently purchased the [Brand Name] backpack, and I must say, it has exceeded my expectations in every way.
                    This backpack has proven to be a reliable companion, accompanying me on various adventures, from daily
                    commutes to weekend getaways. Here are my thoughts on this fantastic product.</p>
                <div class="flex space-x-4 mt-5">
                    <img src="../resources/img/colacan.jpg" alt="" class="w-[100px] h-[130px]">
                    <img src="../resources/img/oreo.jpg" alt="" class="w-[100px] h-[130px]">
                </div>
                <div class="flex space-x-3">
                    <p class="text-gray-600 font-thin">27 Oct 2022 By</p>
                    <p class="text-blue-600 font-semibold">Mark Albert</p>
                </div>
            </div>
        </div>
        <hr class="w-full px-5 h-5 text-black font-bold text-center mt-4" />
        <!--pages bar-->
        <div class="flex justify-center items-center">
            <div class="w-[50px] h-[50px] border-2 border-blue-600 flex justify-center items-center rounded-l-md"></div>
            <div class="w-[50px] h-[50px] border-2 border-blue-600 flex justify-center items-center bg-blue-600">1</div>
            <div class="w-[50px] h-[50px] border-2 border-blue-600 flex justify-center items-center">2</div>
            <div class="w-[50px] h-[50px] border-2 border-blue-600 flex justify-center items-center">3</div>
            <div class="w-[50px] h-[50px] border-2 border-blue-600 flex justify-center items-center">...</div>
            <div class="w-[50px] h-[50px] border-2 border-blue-600 flex justify-center items-center">410</div>
            <div class="w-[50px] h-[50px] border-2 border-blue-600 flex justify-center items-center">411</div>
            <div class="w-[50px] h-[50px] border-2 border-blue-600 flex justify-center items-center">412</div>
            <div class="w-[50px] h-[50px] border-2 border-blue-600 flex justify-center items-center rounded-r-md"></div>
        </div>
    </section>
</body>

</html>