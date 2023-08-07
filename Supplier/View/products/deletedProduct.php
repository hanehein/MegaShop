<?php include "../../Controller/products/deletedProductListsController.php" ?>

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
            $currentMenu = "Deleted Products";
            include "../components/navbar.php";
            ?>

            <!-- start aye myat noe khin -->
            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>

                <h2 class="text-slate-500 font-bold mb-2">You have deleted <span class="text-red-500"><?= count($deletedProductLists) ?></span> products</h2>

                <div>
                    <table class="min-w-full table-auto rounded-lg overflow-hidden">
                        <thead>
                            <tr class="bg-[#66CC33] bg-opacity-50 text-white">
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    product
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    category
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    brand
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    discount
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    buy price
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    sell price
                                </th>
                                <th class="px-6 py-3 text-left text-xs text-white font-semibold uppercase tracking-wider">
                                    action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="product-lists-container bg-white divide-y divide-gray-200">
                            <?php foreach ($deletedProductLists as $product) { ?>
                                <tr>
                                    <td class="px-6 py-4 ">
                                        <div class="flex space-x-4 items-center">
                                            <img src="../../../<?= $product['photo'] ?>" class="w-[60px]" alt="product-img">
                                            <a href="../../Controller/products/productDetailController.php?product_id=<?= $product['id'] ?>" class="text-blue-500 underline">
                                                <?= $product["name"]; ?>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <span>
                                            <?= $product["category"]; ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span>
                                            <?= $product["brand"]; ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span>
                                            <?= $product["discount"] ?> %
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span>
                                            <?= $product["sellprice"] ?> MMK
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span>
                                            <?= $product["buyprice"] ?> MMK
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">

                                        <div class="">
                                            <a href="../../Controller/products/recoverProductController.php?product_id=<?= $product['id'] ?>">
                                                <button class="bg-orange-500 px-3 py-1 rounded-md w-full text-white font-semibold">
                                                    Recover
                                                </button>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                            <?php }; ?>


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


</html>