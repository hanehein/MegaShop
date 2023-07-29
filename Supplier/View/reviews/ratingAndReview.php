<?php
$hasJsFile = FALSE;
include "../components/header.php";
?>

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php"; ?>
        <div class="col-span-5">
            <?php
            $currentMenu = "Ratings & Reviews";
            include "../components/navbar.php";
            ?>

            <!-- start aye myat noe khin -->
            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>
                <div class="mb-5">
                    <label class="text-lg font-bold mr-4" for="order">Order By</label>

                    <select class="p-2 w-[200px] rounded-md border-2 border-[#66CC33] text-slate-500 text-medium" id="order">
                        <option value="">date</option>
                    </select>
                </div>

                <div>
                    <span class="font-bold text-sm">Showing 1 to 5 of 412 results</span>
                    <table class="min-w-full table-auto rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-[#66CC33] bg-opacity-50 text-white">
                                <th class="px-6 py-3 text-left text-sm font-medium text-black font-semibold uppercase tracking-wider">
                                    User
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-black font-semibold uppercase tracking-wider">
                                    Rating
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-black font-semibold uppercase tracking-wider">
                                    Review
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-black font-semibold uppercase tracking-wider">
                                    Product
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-medium text-black font-semibold uppercase tracking-wider">
                                    created
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 ">
                                    <a href="" class="text-blue-500 underline">Mark Albert</a>
                                </td>
                                <td class="px-6 py-4 ">
                                    5
                                </td>
                                <td class="px-6 py-4">
                                    <span>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when
                                        an unknown printer took a galley of type and scrambled it to make a type
                                        specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="text-blue-500 underline">Women's Casual Long Sleeve Lapel ...</a>
                                </td>
                                <td class="px-6 py-4 ">
                                    <span>04:04 am, 10 Jun, 23</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 ">
                                    <a href="" class="text-blue-500 underline">Mark Albert</a>
                                </td>
                                <td class="px-6 py-4 ">
                                    5
                                </td>
                                <td class="px-6 py-4">
                                    <span>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when
                                        an unknown printer took a galley of type and scrambled it to make a type
                                        specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="text-blue-500 underline">Women's Casual Long Sleeve Lapel ...</a>
                                </td>
                                <td class="px-6 py-4 ">
                                    <span>04:04 am, 10 Jun, 23</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 ">
                                    <a href="" class="text-blue-500 underline">Mark Albert</a>
                                </td>
                                <td class="px-6 py-4 ">
                                    5
                                </td>
                                <td class="px-6 py-4">
                                    <span>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when
                                        an unknown printer took a galley of type and scrambled it to make a type
                                        specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="text-blue-500 underline">Women's Casual Long Sleeve Lapel ...</a>
                                </td>
                                <td class="px-6 py-4 ">
                                    <span>04:04 am, 10 Jun, 23</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 ">
                                    <a href="" class="text-blue-500 underline">Mark Albert</a>
                                </td>
                                <td class="px-6 py-4 ">
                                    5
                                </td>
                                <td class="px-6 py-4">
                                    <span>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when
                                        an unknown printer took a galley of type and scrambled it to make a type
                                        specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="text-blue-500 underline">Women's Casual Long Sleeve Lapel ...</a>
                                </td>
                                <td class="px-6 py-4 ">
                                    <span>04:04 am, 10 Jun, 23</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 ">
                                    <a href="" class="text-blue-500 underline">Mark Albert</a>
                                </td>
                                <td class="px-6 py-4 ">
                                    5
                                </td>
                                <td class="px-6 py-4">
                                    <span>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                        when
                                        an unknown printer took a galley of type and scrambled it to make a type
                                        specimen
                                        book. It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="text-blue-500 underline">Women's Casual Long Sleeve Lapel ...</a>
                                </td>
                                <td class="px-6 py-4 ">
                                    <span>04:04 am, 10 Jun, 23</span>
                                </td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
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
            <!-- end aye myat noe khin -->
        </div>
    </section>
</body>


<?php include "../components/footer.php"; ?>