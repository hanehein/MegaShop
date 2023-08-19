<nav class="bg-white  w-full fixed z-50">
        <div class="w-full flex flex-wrap items-center justify-between mx-auto py-2 px-1">
            <!-- logo -->
            <a href="#" class="flex flex-col items-center justify-center font-['Wallpoet'] text-2xl text-[#024486] leading-none cursor-pointer ml-10">
                <p class="">MEGA</p>
                <p>SHOP</p>
            </a>
            <!-- humbermenu -->
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-[#024486] rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <!-- ul lists -->
            <div class="hidden w-full md:flex md:items-center md:justify-center md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:flex-wrap md:space-x-8 md:mt-0 md:border-0 md:bg-white  font-['Poppins']">
                    <li>
                        <a href="../Home/index.php" class="block py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Home</a>
                    </li>
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Products<svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="z-10 hidden font-normal bg-slate-200 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:text-white hover:bg-[#024486]">Categories</a>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Fashion</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Home & Lifestyles</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Health & Beauty</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Kitchen ware</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Electronics</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Babies & Toys</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-gray-800 hover:text-white hover:bg-[#024486]">Sports & Outdoors</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="../Product/shoplists.php" class="block py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Shop Lists</a>
                    </li>
                    <li>
                        <a href="../Product/aboutUs.php" class="block py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">AboutUs</a>
                    </li>
                    <li>
                        <a href="../contact/contactadmin.php" class="block py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact Us</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Sign In</a>
                    </li>
                </ul>
                <div class="md:flex md:items-center md:justify-center cursor-pointer md:ml-6">
                    <a href="../order/shoppingCart.php" class="block md:py-2 md:pl-3 md:pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"><ion-icon name="cart" size="large" class="text-[#003366] hover:text-[#F68721] "></ion-icon><ion-icon name="ellipse" class="text-[#F68721] mb-6 hover:text-[#003366]"></ion-icon></a>
                    <a href="../profile/profile.php" class="block md:py-2 md:pl-3 md:pr-4 text-[#024486] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0"><ion-icon name="person-circle" size="large" class="text-[#003366] md:pl-4 hover:text-[#F68721]"></ion-icon></a>
                </div>
            </div>
        </div>
    </nav>