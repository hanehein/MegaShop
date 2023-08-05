<?php include "../../Controller/reviews/reviewListsController.php" ?>

<!-- Start header -->
<?php
$hasJsFile = FALSE;
include "../components/header.php";
?>
<!-- End header -->

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php"; ?>
        <div class="col-span-5">
            <?php
            $currentMenu = "Ratings & Reviews";
            include "../components/navbar.php";
            ?>

            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>
                <div class="mb-5">
                    <label class="text-lg font-bold mr-4" for="order">Order By</label>

                    <select class="p-2 w-[200px] rounded-md border-2 border-[#66CC33] text-slate-500 text-medium" id="order">
                        <option value="">date</option>
                        <option value="">rating</option>
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
                            <?php foreach ($reviewLists as $review) { ?>
                                <tr>
                                    <td class="px-6 py-4">
                                        <span>
                                            <?= $review["cus_name"] ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>
                                            <?= $review["rating"] ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span>
                                            <?= $review["review"] ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="../../Controller/products/productDetailController.php?product_id=<?= $review["p_id"] ?>" class="text-blue-500 underline">
                                            <?= $review["p_name"] ?>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>
                                            <?= $review["create_date"] ?>
                                        </span>
                                    </td>
                                </tr>
                            <?php } ?>
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

        </div>
    </section>
</body>


<?php include "../components/footer.php"; ?>