<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="flex justify-center items-center overflow-x-hidden">
    <!-- sidebar -->
    <div class="w-1/3 min-h-screen flex flex-col flex-auto bg-gray-50 text-gray-800">
    <div class="fixed flex flex-col top-0 left-0 w-64 bg-white h-full border-r">
            <div class="flex justify-center items-center mt-3">
                <div class="font-['Wallpoet'] text-2xl text-[#024486] leading-none cursor-pointer">
                    <p class="">MEGA</p>
                    <p>SHOP</p>
                </div>
            </div>
            <!-- Menu -->
            <div class="overflow-y-auto overflow-x-hidden flex-grow font-['Poppins']">
                <!-- ul list -->
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="grid" class=""></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="diamond"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Income</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate font-semibold">Messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="people"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Supplier Lists</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="people"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Customer Lists</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                            <ion-icon name="list-circle"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Proudcts Lists</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                            <ion-icon name="cube"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Order Lists</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                            <ion-icon name="help-circle"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">FAQ</span>
                        </a>
                    </li>
                    <li class="px-5">
                        <div class="flex flex-row items-center h-8">
                            <div class="text-sm font-light tracking-wide text-gray-500">Settings</div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                            <ion-icon name="person-circle"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Admin Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                            <ion-icon name="apps"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Web UI</span>
                        </a>
                    </li>
                    <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                            <ion-icon name="log-out"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- nav -->
        <div class="w-full h-auto flex justify-center items-center bg-[#003366] px-5 py-5 ml-64">
            <input type="text" class="w-1/3 mx-auto py-2 rounded-lg" placeholder="Search">
            <p class="text-lg font-semibold text-white mx-auto">
                28 July 2023
            </p>

        </div>

        <div class="w-1/2 h-auto mx-auto flex justify-center items-center bg-[#FFFFFF] px-7 py-7 ">
            <div class="w-full h-auto flex flex-col justify-center items-start px-5 py-5 bg-[#d1d5db] rounded-md">
                <div class="mt-2 mb-3">
                    <p class="text-[#003366] text-2xl font-semibold">
                        Website Form
                    </p>
                </div>
                <div class="text-[#003366] mt-2 mb-3">
                    <p>Website Logo</p>
                </div>
                <div class="w-1/6 h-auto bg-white flex flex-col items-center justify-center py-3 px-3 rounded-lg mt-2 mb-3">
                    <div class="font-['Wallpoet'] text-2xl text-[#024486] leading-none cursor-pointer mx-auto">
                        <p class="">MEGA</p>
                        <p>SHOP</p>
                    </div>
                </div>

                <button class="px-3 py-2 bg-[#FFFFFF] rounded-lg shadow-xl border-2 border-black mt-2 mb-3">Change Logo</button>
                <div class="text-[#003366] mt-2 mb-3">
                    <p>Website Name</p>
                </div>
                <input type="text" class="mt-2 mb-3 rounded-lg px-2 w-1/3">
                <div class="text-[#003366] mt-2 mb-3">
                    <p>Slogan</p>
                </div>
                <input type="text" class="mt-2 mb-3 rounded-lg px-2 w-1/3">
                <button class=" px-5 py-2 bg-custom-blue text-white font-semibold rounded-lg float-right mt-2 mb-3 hover:bg-[#9ca3af]">Save</button>
            </div>

        </div>


    </div>
    <!-- nav -->

</body>

</html>