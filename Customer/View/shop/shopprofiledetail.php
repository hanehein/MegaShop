<?php
include "../../Controller/shop/shopProfileDetailController.php";
$followerIds = [];
foreach ($tot_followers as $follower) {
    $followerIds[] = $follower["cus_id"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop profile Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../resources/css/shopProfilePagination.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <script src="../resources/js/shopProfileDetail.js" defer></script>
    <script src="../resources/js/searchProductDetail.js" defer></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="overflow-x-hidden bg-gray-50 w-full">
    <?php include "../components/navbarForHome.php"; ?>
    <!--next bar-->
    <div class="flex flex-row bg-white mt-3 w-[350px] md:w-[500px] p-3 container mx-3 justify-between">
        <div class="flex flex-row space-x-2 md:space-x-4">
            <?php if (is_null($sup_data["shop_photo_path"])) : ?>
                <img src="../resources/img/store.png" alt="" class="w-[50px] h-[50px]">
            <?php else : ?>
                <img src="../../../<?= $sup_data["shop_photo_path"] ?>" alt="" class="w-[50px] h-[50px]">
            <?php endif; ?>
            <div class="flex flex-col">
                <p class="text-blue-800 text-xl md:text-2xl font-semibold"><?= $sup_datas["sup_shop_name"] ?></p>
                <p><?= count($tot_followers) ?> followers</p>
            </div>
        </div>
        <div class="flex flex-row space-x-2 md:space-x-8">
            <div class="flex flex-col text-blue-800 justify-center items-center font-semibold">
                <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                <p>Chat Now</p>
            </div>
            <?php if(in_array($customer_id, $followerIds)):  ?>
                <div class="flex flex-col text-orange-600 justify-center items-center font-semibold">
                    <a href="../../Controller/shop/unFollowController.php?supplier_id=<?= $sup_data["id"] ?>"><ion-icon name="person-remove-outline"></ion-icon></a>
                    <a href="../../Controller/shop/unFollowController.php?supplier_id=<?= $sup_data["id"] ?>">Unfollow</a>
                </div>
            <?php else: ?>
                <div class="flex flex-col text-orange-600 justify-center items-center font-semibold">
                    <a href="../../Controller/shop/followController.php?supplier_id=<?= $sup_data["id"] ?>"><ion-icon name="person-add-outline"></ion-icon></a>
                    <a href="../../Controller/shop/followController.php?supplier_id=<?= $sup_data["id"] ?>">Follow</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!--submenu-->
    <div class="container mx-3 bg-white hidden md:flex flex-row justify-between items-center mt-3 p-2 md:p-3 font-semibold text-xs md:text-lg">
        <div class="flex flex-row space-x-2 md:space-x-5">
            <a href="./shopProfile.php">
                All products
            </a>
            <a href="./shopProfileDetail.php">
                Profile
            </a>
        </div>
        <!--search-->
        <div class="flex flex-row">
            <input type="text" placeholder="Search in store" class=" border-blue-800 border-2 p-2 rounded-l-md">
            <span class="bg-blue-800 p-2 text-white rounded-r-md">Search</span>
        </div>
    </div>
    <!--content-->
    <section class="bg-white mt-3 space-y-6 p-5">
        <a href="./shopProfileDetail.php">
            <button class="border px-3 py-1 mr-5 rounded-lg border-blue-500 bg-blue-500 text-white">Shop Reviews</button>
        </a>
        <a href="./shopProfileProductReview.php">
            <button class="border px-3 py-1 rounded-lg border-blue-500 bg-blue-500 text-white">Product Reviews</button>
        </a>
        <p class="text-lg font-bold ml-[80px] md:ml-[535px]">Average Seller Ratings</p>
        <div class="flex flex-col justify-between items-center space-y-5">
            <div class="flex flex-col space-y-5 items-center">
                <div class="flex flex-col space-y-2 items-start">
                    <?php foreach ($shop_reviews as $shop_review) { ?>
                        <h1 class="text-xl font-semibold"><?php echo number_format((float)($shop_review["avg_rating"]) * (100 / 3), 2, '.', '');  ?> %</h1>
                    <?php } ?>
                    <!--Start bar graph-->
                    <div class="rating_graph w-[300px] h-[300px]  md:w-[400px]">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
                <!--End bar graph-->

                <div class="flex flex-col space-y-2 items-center">
                    <?php foreach ($total as $total_person) { ?>
                        <h1 class="font-semibold text-xl">Seller Ratings and Reviews(<?php echo $total_person["countperson"] ?>)</h1>
                    <?php } ?>
                    <div class="flex space-x-16">
                        <ion-icon name="happy-outline"></ion-icon>
                        <ion-icon name="happy-outline"></ion-icon>
                    </div>
                    <div class="flex flex-row space-x-5">
                        <p>Positive</p>
                        <p>Natural</p>
                        <p>Negative</p>
                    </div>
                </div>
            </div>
            <!--Start shop reviewbox-->
            <?php foreach ($reviews as $review) { ?>
                <div class="border-4 border-blue-200 w-[350px] h[300px] md:w-[800px] md:h-[180px] rounded-md p-3">
                    <div class="flex flex-col space-y-2">
                        <div class="flex justify-between items-center">
                            <div class="flex space-x-2 items-center">
                                <img src="../../../<?= $review["cus_photo"] ?>" class="w-[40px] h-[40px] rounded-full" alt="user-profile" />
                                <span class="text-grey text-sm font-bold"><?= $review["cus_name"] ?></span>
                            </div>
                            <p class="text-grey"><?= $review["create_date"] ?></p>
                        </div>
                        <div class="flex items-center space-x-1">
                            <ion-icon name="happy" class="text-xl text-yellow-600"></ion-icon>
                            <span><?php if ($review["rating"] == 0) {
                                        echo "bad";
                                    } elseif ($review["rating"]) {
                                        echo "neutral";
                                    } else {
                                        echo "positive";
                                    }
                                    ?></span>
                        </div>
                        <p><?= $review["shop_review"] ?></p>
                    </div>
                </div>
            <?php } ?>

            <!-- Pagination -->
            <div class="flex justify-center items-center">
                <div class="pagination flex items-center justify-center">
                    <!-- Previous button -->
                    <a href="?page=<?= $page - 1 ?>" class="px-3 py-1 text-blue-500 bg-white border border-blue-500 rounded-tl-md rounded-bl-md 
                        <?php if ($page <= 1) {
                            echo "pointer-events-none";
                        } ?>
                        ">
                        <ion-icon name="chevron-back"></ion-icon>
                    </a>

                    <?php for ($i = 1; $i <= $page_lists; $i++) { ?>
                        <a href="?page=<?= $i ?>" class="<?php if ($i == $page) {
                                                                echo "active";
                                                            } ?>
                            px-3 py-1 border border-blue-500 text-bold"><?= $i ?>
                        </a>
                    <?php } ?>

                    <!-- Next button -->
                    <a href="?page=<?= $page + 1 ?>" class="px-3 py-1 text-blue-500 bg-white border border-blue-500 rounded-tr-md rounded-br-md 
                        <?php if ($page >= $page_lists) {
                            echo "pointer-events-none";
                        } ?>
                        ">
                        <ion-icon name="chevron-forward"></ion-icon>
                    </a>
                </div>
            </div>


        </div>
    </section>


    <!--Start footer-->
    <?php include "../components/footer.php"; ?>
    <script>
        let serverData = <?php echo json_encode($reviewers); ?>;
        let shop_ratings = [];
        let total_persons = [];
        for (let index = 0; index < serverData.length; index++) {
            shop_ratings.push(serverData[index].rating);
            total_persons.push(serverData[index].countperson);
        }
    </script>
    <!-- <script>
        let serverData1 = <?php echo json_encode($total); ?>;
        let tot_persons = [];
        for (let index = 0; index < serverData1.length; index++) {
            
            tot_persons.push(serverData1[index].countperson);
        }

        <?php echo (count($tot_persons)) ?>
    </script> -->
</body>

</html>