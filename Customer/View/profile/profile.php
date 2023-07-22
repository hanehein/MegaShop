<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet">
    <!-- <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
                        'Poppins': ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script> -->
</head>

<body class="bg-slate-100 font-['Poppins]">
    <div class="w-full flex flex-col items-center">
        <!-- navbar -->
        <nav class="w-full h-14 bg-white flex justify-between items-center px-4 z-50 fixed">
            <div class="font-[Wallpoet] text-2xl text-[#003366] leading-none cursor-pointer">
                <p>MEGA</p>
                <p>SHOP</p>
            </div>
            <div class="w-auto px-2 py-2">
                <ul class="uppercase text-[#003366] text-md font-semibold flex items-center space-x-5 font-['Poppins'] cursor-pointer">
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800"><a href="">Home</a></li>
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800"><a href="">Products</a></li>
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800"><a href="">Shops</a></li>
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800"><a href="">About US</a></li>
                    <li class="border-2 border-transparent px-2 py-2 hover:text-[#F68721] hover:border-b-blue-800"><a href="">Contact US</a></li>
                </ul>
            </div>
            <div class="flex items-center justify-center space-x-2 cursor-pointer">
                <ion-icon name="cart" size="large" class="text-[#003366] hover:text-[#F68721] "></ion-icon>
                <ion-icon name="ellipse" class="text-[#F68721] mb-6 hover:text-[#003366]"></ion-icon>
                <ion-icon name="person-circle" size="large" class="text-[#003366] pl-4 hover:text-[#F68721]"></ion-icon>
            </div>

        </nav>
    </div>

    <!-- body -->
    <div class="flex justify-evenly items-center mt-20">
        <div class="w-1/6 h-1/2 mx-auto bg-gray-100 text-center rounded-xl py-4 mt-36 shadow-2xl">

            <p class="text-xl font-bold py-3">User Profile</p>

            <div class="w-full h-1 bg-black"></div>

            <p class="text-md py-3 font-semibold hover:font-semibold cursor-pointer">User Info</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Followed Stores</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Order History</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">My Reviews</p>

            <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Wishlist</p>

            <div class="flex justify-center items-center">
                <ion-icon name="log-out-outline" class="text-xl font-light cursor-pointer hover:font-semibold"></ion-icon>
                <p class="text-md py-3 font-light cursor-pointer hover:font-semibold">Logout</p>

            </div>
        </div>
        <!-- edit -->
        <div class="w-5/12 h-1/2 mx-auto bg-gray-100 shadow-2xl text-center rounded-xl py-4 mt-5">
            <div class="flex  items-center justify-evenly">
                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-1/6 h-1/6">
                    <path d="M22.8824 1.56689C11.0449 1.56689 1.44922 11.1625 1.44922 23.0001C1.44922 34.8377 11.0449 44.4333 22.8824 44.4333C34.72 44.4333 44.3156 34.8377 44.3156 23.0001C44.3156 11.1625 34.72 1.56689 22.8824 1.56689Z" stroke="#024486" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M6.31738 36.6016C6.31738 36.6016 11.0948 30.5017 22.8831 30.5017C34.6714 30.5017 39.451 36.6016 39.451 36.6016M22.8831 23.0001C24.5884 23.0001 26.2239 22.3226 27.4298 21.1168C28.6356 19.9109 29.3131 18.2754 29.3131 16.5701C29.3131 14.8648 28.6356 13.2293 27.4298 12.0234C26.2239 10.8176 24.5884 10.1401 22.8831 10.1401C21.1778 10.1401 19.5423 10.8176 18.3364 12.0234C17.1306 13.2293 16.4531 14.8648 16.4531 16.5701C16.4531 18.2754 17.1306 19.9109 18.3364 21.1168C19.5423 22.3226 21.1778 23.0001 22.8831 23.0001Z" stroke="#024486" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex flex-col items-center">
                    <p class="text-xl font-bold py-6">David</p>
                    <p class="text-lg font-semibold py-6">Yangon, Myanmar</p>
                </div>
            </div>

            <div class="flex flex-col mx-auto">
                <div class="w-1/2 ml-24 mt-3 ">
                    <p class="text-xl font-semibold">Name</p>
                </div>
                <div class="mt-5 cursor-pointer">
                    <input type="text" name="name" id="" class="w-1/3 h-10 rounded-md border-solid border-2 border-black px-4">
                </div>
                <div class="w-1/2 ml-32 mt-5">
                    <p class="text-xl font-semibold">Email address</p>
                </div>
                <div class="mt-5 cursor-pointer">
                    <input type="email" name="name" id="" class="w-1/3 h-10 rounded-md border-solid border-2 border-black px-4">
                </div>
                <div class="w-1/2 ml-28 mt-5">
                    <p class="text-xl font-semibold">Location</p>
                </div>
                <div class="mt-5 cursor-pointer">
                    <input type="text" name="name" id="" class="w-1/3 h-10 rounded-md border-solid border-2 border-black px-4">
                </div>
                <div class="w-1/2 ml-36 mt-5">
                    <p class="text-xl font-semibold">Phone Number</p>
                </div>
                <div class="mt-5 cursor-pointer">
                    <input type="number" inputmode="numeric" name="name" id="" class="w-1/3 h-10 rounded-md border-solid border-2 border-black px-4">
                </div>

            </div>
            <div class="bg-orange-500 w-1/12 mt-10 py-2 rounded-lg mr-64 mb-20 float-right cursor-pointer hover:bg-blue-300">
                <p class="text-white font-bold hover:text-black">Edit</p>
            </div>
        </div>
        <!-- save -->
        <div class="w-5/12 h-1/2 mx-auto bg-gray-100 shadow-2xl text-center rounded-xl py-4 mt-5 hidden">
            <div class="flex  items-center justify-evenly">
                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-1/6 h-1/6">
                    <path d="M22.8824 1.56689C11.0449 1.56689 1.44922 11.1625 1.44922 23.0001C1.44922 34.8377 11.0449 44.4333 22.8824 44.4333C34.72 44.4333 44.3156 34.8377 44.3156 23.0001C44.3156 11.1625 34.72 1.56689 22.8824 1.56689Z" stroke="#024486" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M6.31738 36.6016C6.31738 36.6016 11.0948 30.5017 22.8831 30.5017C34.6714 30.5017 39.451 36.6016 39.451 36.6016M22.8831 23.0001C24.5884 23.0001 26.2239 22.3226 27.4298 21.1168C28.6356 19.9109 29.3131 18.2754 29.3131 16.5701C29.3131 14.8648 28.6356 13.2293 27.4298 12.0234C26.2239 10.8176 24.5884 10.1401 22.8831 10.1401C21.1778 10.1401 19.5423 10.8176 18.3364 12.0234C17.1306 13.2293 16.4531 14.8648 16.4531 16.5701C16.4531 18.2754 17.1306 19.9109 18.3364 21.1168C19.5423 22.3226 21.1778 23.0001 22.8831 23.0001Z" stroke="#024486" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="flex flex-col items-center">
                    <p class="text-xl font-bold py-6">David</p>
                    <p class="text-lg font-semibold py-6">Yangon, Myanmar</p>
                </div>
            </div>
            <div class="w-1/2 ml-24 mt-3 ">
                <p class="text-xl font-semibold">Name</p>
            </div>
            <div class="mt-5 cursor-pointer">
                <input type="text" name="name" id="" class="w-1/3 h-10 rounded-md border-solid border-2 border-black px-4">
            </div>
            <div class="w-1/2 ml-32 mt-5">
                <p class="text-xl font-semibold">Email address</p>
            </div>
            <div class="mt-5 cursor-pointer">
                <input type="email" name="name" id="" class="w-1/3 h-10 rounded-md border-solid border-2 border-black px-4">
            </div>
            <div class="w-1/2 ml-28 mt-5">
                <p class="text-xl font-semibold">Location</p>
            </div>
            <div class="mt-5 cursor-pointer">
                <input type="text" name="name" id="" class="w-1/3 h-10 rounded-md border-solid border-2 border-black px-4">
            </div>
            <div class="w-1/2 ml-36 mt-5">
                <p class="text-xl font-semibold">Phone Number</p>
            </div>
            <div class="mt-5 cursor-pointer">
                <input type="number" inputmode="numeric" name="name" id="" class="w-1/3 h-10 rounded-md border-solid border-2 border-black px-4">
            </div>

            <div class="bg-[#024486] w-1/12 mt-10 py-2 rounded-lg mr-64 mb-20 float-right cursor-pointer hover:bg-blue-300">
                <p class="text-white font-bold hover:text-black">Save</p>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="bg-[#024486] w-full h-auto mt-10 ">
        <div class="flex text-white justify-evenly ">
            <div class="py-5">
                <p class="text-xl font-semibold">Quick Links</p>
                <ul class="list-disc mt-3">
                    <li class="text-lg font-semibold cursor-pointer">About Us</li>
                    <li class="text-lg font-semibold cursor-pointer">Privacy & Policy</li>
                </ul>
            </div>
            <div class="py-5">
                <p class="text-xl font-semibold">Help?</p>
                <ul class="list-disc mt-3">
                    <li class="text-lg font-semibold cursor-pointer">Payment</li>
                    <li class="text-lg font-semibold cursor-pointer">FAQ</li>
                </ul>
            </div>
            <div class="py-5">
                <p class="text-xl font-semibold">Contact Us</p>
                <ul class="list-disc mt-3">
                    <li class="flex items-center text-lg font-semibold cursor-pointer"><ion-icon name="phone-portrait" class="text-2xl"></ion-icon> +95777777777</li>
                    <li class="flex items-center text-lg font-semibold cursor-pointer"><ion-icon name="mail" class="text-2xl"></ion-icon> megashopservice@gmail.com</li>
                </ul>
            </div>

        </div>
        <div class="w-2/3 h-0.5 bg-gray-100 mx-auto">

        </div>
        <div class="text-center mt-3 py-4 text-xl">
            <p class="text-white font-bold cursor-pointer">@2023 MEGA SHOP All rights reserved</p>
        </div>
    </div>
</body>

</html>