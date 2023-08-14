<?php include "../../Controller/reviews/reviewListsController.php" ?>

<!-- Start header -->
<?php
$hasJsFile = TRUE;
$jsFileNames = ["orderReview"];
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
                    <input id="row-limit" type="number" hidden value="<?= $rowLimit ?>">
                    <input id="page-list" type="number" hidden value="<?= $pageLists ?>">
                    <label class="text-lg font-bold mr-4" for="order">Order By</label>
                    <select class="review-order p-2 w-[200px] rounded-md border-2 border-[#66CC33] text-slate-500 text-medium" id="order">
                        <option value="0">date</option>
                        <option value="1">rating</option>
                    </select>
                </div>
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
                        <tbody class="review-lists bg-white divide-y divide-gray-200">
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
                        <a href="#" class="pagination-prev px-3 py-1 bg-white border border-[#66CC33]  rounded-tl-md rounded-bl-md">
                            <ion-icon name="chevron-back"></ion-icon>
                        </a>
                        <!-- Page numbers -->
                        <?php for ($i=1; $i <= $pageLists; $i++) { ?>
                            <button class="<?php if($i == 1) echo "pagination-active"; ?> pagination-page-btn px-3 py-1 border border-[#66CC33] text-bold"><?= $i ?></button>
                        <?php } ?>
                        <!-- Next button -->
                        <a href="#" class="pagination-next px-3 py-1 bg-white border border-[#66CC33] rounded-tr-md rounded-br-md">
                            <ion-icon name="chevron-forward"></ion-icon>
                        </a>
                    </nav>
                </div>

            </div>

        </div>
    </section>
</body>


<?php include "../components/footer.php"; ?>