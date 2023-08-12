<?php
include "../../Controller/shop/shopProfileDetailController.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop profile Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js" defer></script>
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <script src="../resources/js/shopProfileDetail.js" defer></script>
    <script src="../resources/js/searchProductDetail.js" defer></script>
    <link rel="stylesheet" href="../resources/css/shopProfileDetail.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="overflow-x-hidden bg-gray-50 w-full">
    <?php include "../components/navbarForHome.php"; ?>
    <!--next bar-->
    <div class="flex flex-row bg-white mt-3 w-[350px] md:w-[500px] p-3 container mx-3 justify-between">
        <div class="flex flex-row space-x-2 md:space-x-4">
            <img src="../resources/images/shopprofileimages/flower.jpg" alt="" class="w-[50px] h-[50px]">

            <div class="flex flex-col">
                <p class="text-blue-800 text-xl md:text-2xl font-semibold">Trendy Thread</p>
                <p>235 followers</p>
            </div>
        </div>
        <div class="flex flex-row space-x-2 md:space-x-8">
            <div class="flex flex-col text-blue-800 justify-center items-center font-semibold">
                <ion-icon name="chatbox-ellipses-outline"></ion-icon>
                <p>Chat Now</p>
            </div>
            <div class="flex flex-col text-orange-600 justify-center items-center font-semibold">
                <ion-icon name="person-add-outline"></ion-icon>
                <p>Follow</p>
            </div>
        </div>
    </div>
    <!--submenu-->
    <div class="container mx-3 bg-white hidden md:flex flex-row justify-between items-center mt-3 p-2 md:p-3 font-semibold text-xs md:text-lg">
        <div class="flex flex-row space-x-2 md:space-x-5">
            <p>Homepage</p>
            <p>All products</p>
            <span>Profile</span>
        </div>
        <!--search-->
        <div class="flex flex-row">
            <input type="text" placeholder="Search in store" class=" border-blue-800 border-2 p-2 rounded-l-md">
            <span class="bg-blue-800 p-2 text-white rounded-r-md">Search</span>
        </div>
    </div>
    <!--content-->
    <section class="bg-white mt-3 space-y-6 p-5">
        <p class="text-lg font-bold ml-[80px] md:ml-[535px]">Average Seller Ratings</p>
        <div class="flex flex-col justify-between items-center space-y-3">
            <div class="flex flex-col md:flex-row space-y-5 md:space-y-0 items-center space-x-11">
                <div class="flex flex-col space-y-2 items-start">
                    <h1 class="text-xl font-semibold">94%</h1>
                    <!--Start bar graph-->
                    <div class="rating_graph">
                        <canvas id="myChart"></canvas>
                    </div>

                    <div class="flex flex-row items-center justify-center space-x-3">
                        <p>Positive</p>
                        <div class="bg-gray-500 w-[210px] h-[13px]">
                            <div class="w-[180px] h-[13px] bg-orange-600"></div>
                        </div>
                        <span>432</span>
                    </div>
                    <div class="flex flex-row items-center justify-center space-x-3">
                        <p>Natural</p>
                        <div class="bg-gray-500 w-[210px] h-[13px]">
                            <div class="w-[7px] h-[13px] bg-orange-600"></div>
                        </div>
                        <span>13</span>
                    </div>
                    <div class="flex flex-row items-center justify-center space-x-3">
                        <p>Negative</p>
                        <div class="bg-gray-500 w-[210px] h-[13px]">
                            <div class="w-[12px] h-[13px] bg-orange-600"></div>
                        </div>
                        <span>16</span>
                    </div>
                </div>
                <!--End bar graph-->
                <div class="flex flex-col space-y-2 items-center">
                    <h1 class="font-semibold text-xl">Seller Ratings and Reviews(16)</h1>
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
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D&w=1000&q=80" class="w-[40px] h-[40px] rounded-full" alt="user-profile" />
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
            <div class="w-full flex justify-center p-5">
                <!-- Pagination component -->
                <ul class="flex items-center justify-center">
                    <!-- Previous button -->
                    <li class="<?php if ($page <= 1) {
                                    echo "disabled";
                                } ?>">
                        <a href="#?page=<?= $page - 1 ?>" class="px-3 py-1 bg-white border border-blue-600  rounded-tl-md rounded-bl-md">
                            <ion-icon name="chevron-back"></ion-icon>
                        </a>
                    </li>
                    <!-- Page numbers -->

                    <?php
                    for ($i = 1; $i <= $page_lists; $i++) { ?>
                        <li class="<?php if ($page == $i) {
                                        echo "active";
                                    } ?>">
                            <a href="#?page=<?= $i ?>" class="active px-3 py-1 border border-blue-600 text-bold"><?= $i ?></a>
                        </li>
                    <?php } ?>


                    <!-- Next button -->
                    <li class="<?php if ($page >= $page_lists) {
                                    echo "disabled";
                                } ?>">
                        <a href="#?page=<?= $page + 1 ?>" class="px-3 py-1 bg-white border border-blue-600 rounded-tr-md rounded-br-md">
                            <ion-icon name="chevron-forward"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!--product ratings & reviews-->
    <section class="bg-white flex flex-col p-5 mt-5">
        <p class="text-xl font-semibold">Product Ratings & Reviews(345)</p>
        <!--Start review box-->
        <?php foreach ($p_reviews as $p_review) { ?>
            <div class="flex space-x-6 p-5">
                <img src="../resources/img/cola.jpg" alt="" class="w-[80px] h-[120px]">
                <div class="flex flex-col">
                    <p class="text-blue-600 font-bold text-2xl mb-3">STEP Women Blouse Short Sleeves 007402</p>
                    <div class="flex space-x-1">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <ion-icon class="text-lg 
                <?php
                            if ($i < $p_review["rating"]) {
                                echo "text-[#F68721]";
                            } else {
                                echo "text-slate-500";
                            }
                ?>" name="star"></ion-icon>
                        <?php } ?>


                    </div>
                    <p><?= $p_review["review"] ?></p>
                    <div class="flex space-x-4 mt-5">
                        <img src="../resources/img/colacan.jpg" alt="" class="w-[100px] h-[130px]">
                        <img src="../resources/img/oreo.jpg" alt="" class="w-[100px] h-[130px]">
                    </div>
                    <div class="flex space-x-3">
                        <p class="text-gray-600 font-thin"><?= $p_review["create_date"] ?> By</p>
                        <p class="text-blue-600 font-semibold"><?= $p_review["cus_name"] ?></p>
                    </div>
                </div>
            </div>
            <hr class="w-full px-5 h-5 text-black font-bold text-center mt-4" />
        <?php } ?>

        <!--End review box-->

        <!--pages bar-->
        <div class="flex justify-center items-center">
            <ul class="flex items-center justify-center">
                <!-- Previous button -->
                <li class="<?php if ($page <= 1) {
                                echo "disabled";
                            } ?>">
                    <a href="#?page=<?= $page - 1 ?>" class="px-3 py-1 bg-white border border-blue-600  rounded-tl-md rounded-bl-md">
                        <ion-icon name="chevron-back"></ion-icon>
                    </a>
                </li>
                <!-- Page numbers -->

                <?php
                for ($i = 1; $i <= $page_lists; $i++) { ?>
                    <li class="<?php if ($page == $i) {
                                    echo "active";
                                } ?>">
                        <a href="#?page=<?= $i ?>" class="active px-3 py-1 border border-blue-600 text-bold"><?= $i ?></a>
                    </li>
                <?php } ?>


                <!-- Next button -->
                <li class="<?php if ($page >= $page_lists) {
                                echo "disabled";
                            } ?>">
                    <a href="#?page=<?= $page + 1 ?>" class="px-3 py-1 bg-white border border-blue-600 rounded-tr-md rounded-br-md">
                        <ion-icon name="chevron-forward"></ion-icon>
                    </a>
                </li>
            </ul>
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

        console.log(serverData);
    </script>
</body>

</html>