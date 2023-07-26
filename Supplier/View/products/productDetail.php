<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History Review</title>

    <!-- <link rel="stylesheet" href="../resources/lib/tailwind/output.css"> -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <div class="bg-white min-h-screen">
            <div class="h-[60px] flex justify-center items-center text-center">
                <span class="font-bold">MEGA SHOP</span>
            </div>
            <div class="menu-lists">
                <ul>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <ion-icon class="mr-3 text-custom-extra-large" name="clipboard-outline"></ion-icon> Dashboard
                    </li>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <ion-icon class="mr-3 text-custom-extra-large" name="bag-handle-outline"></ion-icon> Orders
                    </li>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <div class="flex justify-between items-center">
                            <div>
                                <ion-icon class="mr-3 text-custom-extra-large" name="person-outline"></ion-icon>
                                Customers
                            </div>
                            <div>
                                <button class="order-down-btn">
                                    <ion-icon class="mr-3 text-custom-extra-large" name="caret-down"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </li>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <ion-icon class="mr-3 text-custom-extra-large" name="star-half-outline"></ion-icon>Rating and
                        Reviews
                    </li>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <ion-icon class="mr-3 text-custom-extra-large" name="chatbox-outline"></ion-icon> Messages
                    </li>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <ion-icon class="mr-3 text-custom-extra-large" name="settings-outline"></ion-icon> Setting
                    </li>
                    <li class="px-3 py-4 text-custom-medium font-normal hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        <ion-icon class="mr-3 text-custom-extra-large" name="log-in-outline"></ion-icon> Log Out
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-span-5 relative">
            <nav class="h-[60px] px-3 items-center flex justify-between bg-[#66CC33] bg-opacity-80 fixed top-0 w-full">
                <div><span>Products</span></div>
                <div><span>June 30, 2023</span></div>
            </nav>

            <!-- start aye myat noe khin -->
            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>

                <!-- product informations -->
                <div class="p-5 bg-white rounded-md mb-5">
                    <h2 class="text-custom-extra-large font-semibold border-b border-slate-300">
                        Product Details
                    </h2>
                    <div class="details-container py-5">

                        <div class="mb-5">
                            <span class="font-normal text-custom-grey">Product Images</span>
                            <!-- Images -->
                            <div class="flex space-x-5 mt-2">
                                <div>
                                    <img class="h-[70px]" src="https://e0.pxfuel.com/wallpapers/743/919/desktop-wallpaper-classic-coca-cola-3d-coke.jpg" alt="product-img" />
                                </div>
                                <div>
                                    <img class="h-[70px]" src="https://e0.pxfuel.com/wallpapers/743/919/desktop-wallpaper-classic-coca-cola-3d-coke.jpg" alt="product-img" />
                                </div>
                                <div>
                                    <img class="h-[70px]" src="https://e0.pxfuel.com/wallpapers/743/919/desktop-wallpaper-classic-coca-cola-3d-coke.jpg" alt="product-img" />
                                </div>
                                <div>
                                    <img class="h-[70px]" src="https://e0.pxfuel.com/wallpapers/743/919/desktop-wallpaper-classic-coca-cola-3d-coke.jpg" alt="product-img" />
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <span class="font-normal text-custom-grey">Product Name</span>
                            <p class="block text-black font-normal min-w-[200px] w-fit px-4 py-2 rounded-md border border-slate-400 mt-2">
                                STEP Women Blouse Short Sleeves 007402
                            </p>
                        </div>

                        <div class="flex space-x-5 mb-5">
                            <div>
                                <span class="font-normal text-custom-grey">Category</span>
                                <p class="block text-black font-normal min-w-[200px] w-fit px-4 py-2 rounded-md border border-slate-400 mt-2">
                                    Men's Fashion
                                </p>
                            </div>

                            <div>
                                <span class="font-normal text-custom-grey">Brand</span>
                                <p class="block text-black font-normal min-w-[200px] w-fit px-4 py-2 rounded-md border border-slate-400 mt-2">
                                    Nike
                                </p>
                            </div>
                        </div>

                        <div class="flex space-x-10 mb-5">
                            <div>
                                <span class="font-normal text-custom-grey">Buy Price</span>
                                <p class="block text-black font-normal min-w-[200px] w-fit px-4 py-2 rounded-md border border-slate-400 mt-2">
                                    15000 Ks
                                </p>
                            </div>

                            <div>
                                <span class="font-normal text-custom-grey">Sell Price</span>
                                <p class="block text-black font-normal min-w-[200px] w-fit px-4 py-2 rounded-md border border-slate-400 mt-2">
                                    20000 Ks
                                </p>
                            </div>
                        </div>

                        <div class="mb-5">
                            <span class="font-normal text-custom-grey">Discount</span>
                            <p class="block text-black font-normal min-w-[200px] w-fit px-4 py-2 rounded-md border border-slate-400 mt-2">
                                20%
                            </p>
                        </div>

                        <div class="mb-5">
                            <span class="font-normal text-custom-grey">Stock</span>
                            <p class="block text-black font-normal min-w-[200px] w-fit px-4 py-2 rounded-md border border-slate-400 mt-2">
                                200
                            </p>
                        </div>

                        <div class="mb-5">
                            <span class="font-normal text-custom-grey">Discount</span>
                            <p class="block text-black font-normal min-w-[200px] w-fit px-4 py-2 rounded-md border border-slate-400 mt-2">
                                20%
                            </p>
                        </div>

                        <!-- sizes -->
                        <div class="mb-5">
                            <span class="font-normal text-custom-grey">Sizes</span>
                            <div class="mt-2 flex space-x-5">
                                <span class="block text-black font-normal min-w-[100px] w-fit p-2 rounded-md border border-slate-400">XL</span>
                                <span class="block text-black font-normal min-w-[100px] w-fit p-2 rounded-md border border-slate-400">L</span>
                                <span class="block text-black font-normal min-w-[100px] w-fit p-2 rounded-md border border-slate-400">M</span>
                            </div>
                        </div>

                        <!-- colors -->
                        <div class="mb-5">
                            <span class="font-normal text-custom-grey">Sizes</span>
                            <div class="mt-2 flex space-x-5">
                                <span class="block text-black font-normal min-w-[100px] w-fit p-2 rounded-md border border-slate-400">white</span>
                                <span class="block text-black font-normal min-w-[100px] w-fit p-2 rounded-md border border-slate-400">black</span>
                                <span class="block text-black font-normal min-w-[100px] w-fit p-2 rounded-md border border-slate-400">red</span>
                                <span class="block text-black font-normal min-w-[100px] w-fit p-2 rounded-md border border-slate-400">black</span>
                                <span class="block text-black font-normal min-w-[100px] w-fit p-2 rounded-md border border-slate-400">yellow</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <label class="font-normal text-custom-grey">Product Description</label>
                            <p class="block text-black font-normal w-fit px-4 py-2 rounded-md border border-slate-400 mt-2">
                                The minimalist collaboration features chairs, lightening, Shelves, Sofas, Desks and
                                various home accessories, all offering form and function at the same point.We use
                                high-strength clamps and joinery techniques specially designed for engineered wood beds.
                                Ergo, no irksome creaks - and you can sleep like a baby, well into adulthood!
                            </p>
                        </div>

                        <div class="text-end">
                            <button class="py-2 px-6 text-white text-custom-large bg-green-600 rounded-md font-semibold">
                                <a href="">Edit</a>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- product reviews -->
                <div class="p-5 bg-white rounded-md">

                    <h2 class="text-custom-extra-large font-semibold border-b border-slate-300 py-3 mb-6">Ratings &
                        Reviews
                        (3)</h2>

                    <div class="reviews-container">
                        <!-- start review -->
                        <div class="p-4 shadow-lg rounded-md border border-slate-400  mb-4">
                            <div class="flex justify-between items-center">
                                <div class="flex space-x-3 items-center mb-3">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80" class="w-[40px] h-[40px] rounded-full" alt="user-profile" />
                                    <span class="text-grey text-sm font-bold">Mark Albert</span>
                                </div>
                                <div>
                                    <span class="text-grey">27 Oct 2022</span>
                                </div>
                            </div>
                            <div>
                                <ion-icon class="text-extra-large text-orange-600" name="star"></ion-icon>
                                <ion-icon class="text-extra-large text-orange-600" name="star"></ion-icon>
                                <ion-icon class="text-extra-large text-orange-600" name="star"></ion-icon>
                                <ion-icon class="text-extra-large text-orange-600" name="star"></ion-icon>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                                voluptatibus exercitationem consectetur non, voluptate quae,
                                laboriosam quam repudiandae praesentium nam, nulla modi molestias
                                optio? Ipsum, earum praesentium ullam dolore ipsa architecto quam
                                amet quia quas, commodi voluptatem culpa velit nulla, eveniet
                                tempora ad et voluptas temporibus molestiae. Laboriosam temporibus
                                odit sequi delectus, neque cupiditate reiciendis! Natus harum
                                iusto, rem amet temporibus totam perspiciatis vel! Labore quia
                                nemo nisi sit at dolorem iusto veniam odio saepe? Sapiente,
                                cupiditate, autem magnam repellendus voluptate illo doloremque
                                accusantium nam beatae reprehenderit neque, unde quaerat provident
                                exercitationem tempore possimus consequuntur excepturi facilis
                                officiis amet blanditiis voluptatum veritatis iure? Autem nulla ad
                                illum, odit nisi aperiam quisquam. Quasi, consequatur veritatis?
                                Corrupti blanditiis eaque eos quas fugit velit enim animi labore
                                commodi reprehenderit ipsa quidem suscipit minima quibusdam
                                aliquam distinctio, modi sapiente odit quam numquam! Voluptate
                                facilis pariatur cum neque quibusdam, maxime reiciendis delectus
                                debitis blanditiis atque minima vitae quis veritatis inventore
                                odit exercitationem rem esse officiis dolore ipsa asperiores.
                                Voluptas ab voluptate quisquam. Commodi ipsam possimus veniam
                                reprehenderit fugiat tempora assumenda. Alias, neque culpa
                                accusantium recusandae dignissimos blanditiis eligendi, vitae
                                voluptatibus quibusdam deserunt ducimus harum reiciendis excepturi
                                quidem aspernatur repellat quas ipsa fugit expedita. Iure,
                                nesciunt?
                            </p>
                        </div>
                        <!-- end review -->

                        <!-- start review -->
                        <div class="p-4 shadow-lg rounded-md border border-slate-400  mb-4">
                            <div class="flex justify-between items-center">
                                <div class="flex space-x-3 items-center mb-3">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80" class="w-[40px] h-[40px] rounded-full" alt="user-profile" />
                                    <span class="text-grey text-sm font-bold">Mark Albert</span>
                                </div>
                                <div>
                                    <span class="text-grey">27 Oct 2022</span>
                                </div>
                            </div>
                            <div>
                                <ion-icon class="text-extra-large text-orange-600" name="star"></ion-icon>
                                <ion-icon class="text-extra-large text-orange-600" name="star"></ion-icon>
                                <ion-icon class="text-extra-large text-orange-600" name="star"></ion-icon>
                                <ion-icon class="text-extra-large text-orange-600" name="star"></ion-icon>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                                voluptatibus exercitationem consectetur non, voluptate quae,
                                laboriosam quam repudiandae praesentium nam, nulla modi molestias
                                optio? Ipsum, earum praesentium ullam dolore ipsa architecto quam
                                amet quia quas, commodi voluptatem culpa velit nulla, eveniet
                                tempora ad et voluptas temporibus molestiae. Laboriosam temporibus
                                odit sequi delectus, neque cupiditate reiciendis! Natus harum
                                iusto, rem amet temporibus totam perspiciatis vel! Labore quia
                                nemo nisi sit at dolorem iusto veniam odio saepe? Sapiente,
                                cupiditate,
                            </p>
                        </div>
                        <!-- end review -->

                        <!-- start review -->
                        <div class="p-4 shadow-lg rounded-md border border-slate-400  mb-4">
                            <div class="flex justify-between items-center">
                                <div class="flex space-x-3 items-center mb-3">
                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80" class="w-[40px] h-[40px] rounded-full" alt="user-profile" />
                                    <span class="text-grey text-sm font-bold">Mark Albert</span>
                                </div>
                                <div>
                                    <span class="text-grey">27 Oct 2022</span>
                                </div>
                            </div>
                            <div>
                                <ion-icon class="text-extra-large text-orange-600" name="star"></ion-icon>
                                <ion-icon class="text-extra-large text-orange-600" name="star"></ion-icon>
                                <ion-icon class="text-extra-large text-orange-600" name="star"></ion-icon>
                                <ion-icon class="text-extra-large text-orange-600" name="star"></ion-icon>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima
                                voluptatibus exercitationem consectetur non, voluptate quae,
                                laboriosam quam repudiandae praesentium nam, nulla modi molestias
                                optio? Ipsum, earum praesentium ullam dolore ipsa architecto quam
                                amet quia quas, commodi voluptatem culpa velit nulla, eveniet
                                tempora ad et voluptas temporibus molestiae. Laboriosam temporibus
                                odit sequi delectus, neque cupiditate reiciendis! Natus harum
                                iusto,
                            </p>
                        </div>
                        <!-- end review -->
                    </div>

                    <!-- Pagination -->
                    <div class="w-full flex justify-center p-5">
                        <!-- Pagination component -->
                        <nav class="flex items-center justify-center">
                            <!-- Previous button -->
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]  rounded-tl-md rounded-bl-md">
                                <ion-icon name="chevron-back"></ion-icon>
                            </a>
                            <!-- Page numbers -->
                            <a href="#" class="active px-3 py-1 border border-[#66CC33] text-bold">1</a>
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]">2</a>
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]">3</a>
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]">...</a>
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]">10</a>
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]">11</a>
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33]">12</a>
                            <!-- Next button -->
                            <a href="#" class="px-3 py-1 bg-white border border-[#66CC33] rounded-tr-md rounded-br-md">
                                <ion-icon name="chevron-forward"></ion-icon>
                            </a>
                        </nav>
                    </div>

                </div>

            </div>
            <!-- end aye myat noe khin -->
        </div>
    </section>
</body>

</html>