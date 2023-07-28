<!-- START NAVBAR -->
<nav>
    <div class="container mx-auto flex justify-between items-center px-2 md:px-6 py-4 z-10">
        <div>
            <a href="" class="text-2xl font-bold">MEGA SHOP</a>
        </div>
        <div class="hidden md:block">
            <ul class="flex space-x-6 text-custom-blue font-bold">
                <li>Home</li>
                <li>Products</li>
                <li>Shop Lists</li>
                <li>About Us</li>
                <li>Contact Us</li>
            </ul>
        </div>
        <div class="hidden md:block">
            <button class="px-6 py-1 text-white bg-blue-800 rounded-xl"><a href="">log in</a></button>
            <button class="px-6 py-1 text-white bg-blue-800 rounded-xl"><a href="">sign up</a></button>
        </div>
        <div class="block md:hidden">
            <button class="nav-menu">
                <ion-icon class="text-3xl" name="menu"></ion-icon>
            </button>
        </div>
    </div>
</nav>

<div class="mobile-nav hidden sm:hidden absolute top-0 left-0 bottom-0 right-0 z-10">
    <div class="flex justify-between">
        <div></div>
        <div class="min-w-[200px] h-screen bg-white p-5">
            <div class="pt-2 pr-2 text-end">
                <button class="menu-hide"><ion-icon class="text-2xl" name="close"></ion-icon></button>
            </div>
            <div>
                <ul class="text-custom-blue font-bold">
                    <li class="py-2">
                        <a href="">Home</a>
                    </li>
                    <li class="py-2">
                        <a href="">Products</a>
                    </li>
                    <li class="py-2">
                        <a href="">Shop Lists</a>
                    </li>
                    <li class="py-2">
                        <a href="">About Us</a>
                    </li>
                    <li class="py-2">
                        <a href="">Contact Us</a>
                    </li>
                    <li class="py-2">
                        <a href="">Log in</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END NAVBAR -->

<!-- START category and filter -->
<div class="bg-custom-blue px-2 md:px-6 py-4">
    <div class="container mx-auto flex justify-between items-center">
        <div>
            <select id="categories" class="bg-inherit text-md sm:text-lg border-2 border-white text-white px-2 py-1">
                <option value="">Categories</option>
                <option value="">category 1</option>
                <option value="">category 2</option>
                <option value="">category 3</option>
                <option value="">category 1</option>
            </select>
        </div>
        <div class="hidden sm:block">
            <div class="flex items-center">
                <label for="voice-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-[300px] pl-10 p-2.5" placeholder="Search Products..." required>
                </div>
                <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>Search
                </button>
            </div>
        </div>
        <div class="space-x-2">
            <button class="search-btn inline sm:hidden"><ion-icon class="text-3xl text-white" name="search"></ion-icon></button>
            <button><ion-icon class="text-3xl text-white" name="cart"></ion-icon></button>
        </div>
    </div>
    <div class="mobile-search hidden sm:hidden mt-4">
        <div class="flex items-center">
            <label for="voice-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <input type="text" id="voice-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block sm:w-[300px] pl-10 p-2.5" placeholder="Search Products..." required>
            </div>
            <button type="submit" class="inline-flex items-center py-2.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>Search
            </button>
        </div>
    </div>
</div>
<!-- END category and filter -->