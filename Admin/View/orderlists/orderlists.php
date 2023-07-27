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
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none  text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 bg-[#003366] text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="logo-web-component"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Website Form</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-100 text-[#003366] border-l-4 border-transparent hover:border-blue-500 pr-6 active:bg-[#003366] active:border-none active:text-white">
                            <span class="inline-flex justify-center items-center ml-4">
                                <ion-icon name="albums"></ion-icon>
                            </span>
                            <span class="ml-2 text-sm font-semibold tracking-wide truncate">Home Sliders</span>
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

        <div class="w-full flex flex-col  items-center justify-start bg-gray-200 space-y-8 font-['Poppins'] ">
            <div class="w-full flex items-center justify-center h-20 bg-[#00336659] space-x-80">
                Order by
                <div class="relative inline-block text-left">
                    <div>
                        <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="true" aria-haspopup="true">
                            Options
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <!--
    Dropdown menu, show/hide based on menu state.

    Entering: "transition ease-out duration-100"
      From: "transform opacity-0 scale-95"
      To: "transform opacity-100 scale-100"
    Leaving: "transition ease-in duration-75"
      From: "transform opacity-100 scale-100"
      To: "transform opacity-0 scale-95"
  -->
                    <div class="absolute hidden right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg  focus:outline-none" role="menu" >
                        <div class="py-1" role="none">
                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Order Id</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Price</a>
                            <a href="#" class="text-gray-700 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">License</a>
                            <form method="POST" action="#" role="none">
                                <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="w-32 h-8 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    <input type="text" name="" id="" class="text-xs bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white" placeholder="Search by ID Number">
                </div>
            </div>
            <div class="w-[55rem] h-[36rem] flex items-start justify-start bg-[#00336659] font-['Poppins'] rounded-md shadow-sm shadow-black">
                <table class=" w-[55rem] table-fixed border-collapse text-white text-center">
                    <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created Date</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>1</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>2</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>3</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>4</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>5</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>6</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>7</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>8</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>9</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-14 hover:bg-[#00336618]">
                            <td>10</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <!-- pagination -->
            <div class="w-auto flex items-start justify-center h-10 mb-5">
                <div class="w-5 h-6 flex items-center justify-center bg-[#003366] text-white text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>1</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>2</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>3</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>4</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>5</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>6</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>7</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>8</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>9</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>10</button></a>
                </div>
            </div>
        </div>


    </div>
    <!-- nav -->

</body>

</html>