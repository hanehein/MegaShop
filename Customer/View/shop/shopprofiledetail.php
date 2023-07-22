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
    <section class="flex flex-col justify-center items-center bg-white mt-3">
        <p>Average Seller Ratings</p>
        <div class="flex flex-row">
            <div class="flex flex-col">
                <h1 class="text-xl font-semibold">94%</h1>
                <div class="flex flex-row space-x-3">
                    <p>Positive</p>
                    <div class="w-[150px] h-[10px] bg-orange-600"></div>
                    <span>432</span>
                </div>
                <div class="flex flex-row space-x-3">
                    <p>Natural</p>
                    <div class="w-[150px] h-[10px] bg-orange-600"></div>
                    <span>13</span>
                </div>
                <div class="flex flex-row space-x-3">
                    <p>Negative</p>
                    <div class="w-[150px] h-[10px] bg-orange-600"></div>
                    <span>16</span>
                </div>
            </div>
            <div class="flex flex-col">
                <h1 class="font-semibold text-xl">Seller Ratings and Reviews(16)</h1>
                <p>Positive</p>
                <p>Natural</p>
                <p>Negative</p>
            </div>
        </div>
    </section>
</body>

</html>