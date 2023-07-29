<?php
$hasJsFile = FALSE;
include "../components/header.php";
?>

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php"; ?>
        <div class="col-span-5 relative">
            <?php
            $currentMenu = "Orders";
            include "../components/navbar.php";
            ?>

            <!-- start aye myat noe khin -->
            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>

                <div class="px-5 mb-5 flex justify-between items-center">
                    <div>
                        <input class="w-[400px] p-2 rounded-lg border border-[#66CC33] shadow" type="text"
                            placeholder="Search By ID Number">
                        <button class="bg-[#66CC33] text-white rounded-lg p-2 px-3">search</button>
                    </div>
                    <div>
                        <!-- <div class="bg-[#66CC33] py-2 px-5 text-[14px] font-semibold rounded-md">
                            <div class="broder-b-2 border-custom-grey">
                                <ion-icon name="calendar-outline"></ion-icon>
                                Sort By Date
                            </div>
                            <div class="text-center"><span>2023/08/05</span></div>
                        </div> -->
                    </div>
                </div>

                <div>
                    <!-- Orderlists container -->
                    <div class="px-5 mb-5">

                        <div class="grid grid-cols-3 gap-5">

                            <!-- start order card -->
                            <div class="bg-white shadow-lg rounded-lg pt-2 py-5 px-3">
                                <div class="flex flex-col py-3">
                                    <h2 class="text-[#2C7607] text-center py-1 font-semibold">Order ID</h2>
                                    <div class="line w-[100px] h-[2px] mx-auto bg-[#66CC33]"></div>
                                    <h2 class="text-[#66CC33] text-center py-1">#A23981</h2>
                                </div>
                                <div>
                                    <div class="mb-4 grid grid-cols-2 text-slate-500">
                                        <div>Product Names</div>
                                        <div>
                                            <p class="text-end mb-2 text-sm">Instant Coffee MIX</p>
                                            <p class="text-end mb-2 text-sm">Travel Friendly Skincare Set</p>
                                            <p class="text-end mb-2 text-sm">Eye Cream & Night Cream</p>
                                        </div>
                                    </div>
                                    <div class="mb-4 flex justify-between text-slate-500">
                                        <div>Quantity</div>
                                        <div>10</div>
                                    </div>
                                    <div class="mb-4 flex justify-between text-slate-500">
                                        <div>Date</div>
                                        <div>July 23, 2023</div>
                                    </div>
                                    <div class="mb-4 flex justify-between text-slate-500">
                                        <div>Payment Method</div>
                                        <div>Cash On Delivery</div>
                                    </div>
                                    <div class="mb-4 flex justify-between text-slate-500">
                                        <div>Payment Status</div>
                                        <div>Paid</div>
                                    </div>
                                    <div class="mb-4 flex justify-between text-slate-500">
                                        <div>Customer Name</div>
                                        <div>Mark Albert</div>
                                    </div>
                                    <div class="mb-4 flex justify-between text-slate-500">
                                        <div>Total Price</div>
                                        <div>9000 MMK</div>
                                    </div>
                                    <div class="flex justify-between">
                                        <button class="w-[160px] py-2 bg-red-500 text-white font-semibold rounded-tr-lg rounded-bl-lg">Reject</button>
                                        <button  class="w-[160px] py-2 bg-green-500 text-white font-semibold rounded-tr-lg rounded-bl-lg">Confirm</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="w-full flex justify-center p-x mb-3">
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

<?php include "../components/footer.php"; ?>