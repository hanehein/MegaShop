<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subscription income</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="overflow-x-hidden ">
    <!-- main div -->
    <div class="min-h-screen flex  text-gray-800 relative ">
        <!-- dashboard div -->
        <div class="fixed flex flex-col top-0 left-0 w-64 bg-white h-full border-r ">
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
        <!-- data display div -->
        <div class="w-full flex flex-col  items-center justify-start bg-gray-200 space-y-5 font-['Poppins'] ">
            <div class="w-full flex items-center justify-center h-20 bg-[#00336659] space-x-80">
                <div class="flex items-center justify-center space-x-3">
                    <div class="w-32 h-10 flex items-center justify-center bg-[#66CC33] text-white text-xs rounded-md font-semibold hover:text-[#66CC33] hover:bg-white">
                        <a href=""><button>Subscription</button></a>
                    </div>
                    <div class="w-32 h-10 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                        <a href=""><button>Advertisement</button></a>
                    </div>
                </div>
                <div class="w-32 h-8 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    <input type="date" name="" id="" class=" text-xs bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                </div>
            </div>
            <!-- plan desc -->
            <div class="w-full flex items-center justify-center space-x-10">
                <div class="flex items-center justify-center text-xs text-[#66CC33] font-semibold space-x-3">
                    <span>[Gold Plan</span>
                    <ion-icon name="chevron-forward-circle" ></ion-icon>
                    <span>150,000 Ks/per one month]</span>
                </div>
                <div class="flex items-center justify-center text-xs text-[#66CC33] font-semibold space-x-3">
                    <span>[Silver Plan</span>
                    <ion-icon name="chevron-forward-circle"></ion-icon>
                    <span>100,000 Ks/per one month]</span>
                </div>
                <div class="flex items-center justify-center text-xs text-[#66CC33] font-semibold space-x-3">
                    <span>[Trial Plan</span>
                    <ion-icon name="chevron-forward-circle"></ion-icon>
                    <span>FOC for 5 days]</span>
                </div>
            </div>
            <div class="w-auto flex items-start justify-start bg-[#00336659] font-['Poppins'] rounded-md shadow-sm shadow-black">
                <table cellspacing="10" cellpadding="15" class=" w-auto table-fixed text-white text-center">
                    <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16">
                        <tr>
                            <th>Shop Name</th>
                            <th>Subscription Plan</th>
                            <th>Duration</th>
                            <th>Subscription Fees</th>
                            <th>Created Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody class=" text-xs">
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>A</td>
                            <td>Silver</td>
                            <td>3 Months</td>
                            <td>300,000 Ks</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>B</td>
                            <td>Gold</td>
                            <td>6 Months</td>
                            <td>900,000 Ks</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>C</td>
                            <td>Silver</td>
                            <td>3 Months</td>
                            <td>300,000 Ks</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>D</td>
                            <td>Gold</td>
                            <td>3 Months</td>
                            <td>900,000 Ks</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>E</td>
                            <td>Silver</td>
                            <td>3 Months</td>
                            <td>300,000 Ks</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>F</td>
                            <td>Silver</td>
                            <td>3 Months</td>
                            <td>900,000 Ks</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>G</td>
                            <td>Gold</td>
                            <td>6 Months</td>
                            <td>900,000 Ks</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>H</td>
                            <td>Silver</td>
                            <td>3 Months</td>
                            <td>300,000 Ks</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>I</td>
                            <td>Gold</td>
                            <td>6 Months</td>
                            <td>900,000 Ks</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Delete</button></a></td>
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>J</td>
                            <td>Silver</td>
                            <td>3 Months</td>
                            <td>300,000 Ks</td>
                            <td>25 July,2023</td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
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
</body>

</html>