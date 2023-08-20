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
    <link rel="stylesheet" href="../resources/css/shopProfileDetail.css">
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
            <img src="../../../<?= $sup_datas[0]["sup_shop_photo"] ?>" alt="" class="w-[50px] h-[50px]">

            <div class="flex flex-col">
            <p class="text-blue-800 text-xl md:text-2xl font-semibold"><?= $sup_datas[0]["sup_shop_name"]?></p>
                <p><?= $tot_followers[0]["total_followers"]?> followers</p>
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

    <!--product ratings & reviews-->


    <section class="bg-white flex flex-col p-5 mt-5">
        <div class="flex mb-3">
            <a href="./shopProfileDetail.php">
                <button class="border px-3 py-1 mr-5 rounded-lg border-blue-500 bg-blue-500 text-white">Shop Reviews</button>
            </a>
            <a href="./shopProfileProductReview.php">
                <button class="border px-3 py-1 rounded-lg border-blue-500 bg-blue-500 text-white">Product Reviews</button>
            </a>
        </div>
        <p class="text-xl font-semibold">Product Ratings & Reviews(345)</p>
        <!--Start review box-->
        <?php foreach ($p_reviews as $p_review) { ?>
            <div class="flex space-x-6 p-5">
                <img src="../../../<?= $p_datas[0]["p_photo1"] ?>" alt="" class="w-[80px] h-[120px]">
                <div class="flex flex-col">
                    <p class="text-blue-600 font-bold text-2xl mb-3"><?= $p_datas[0]["p_name"] ?></p>
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
                    <div class="flex space-x-3">
                        <p class="text-gray-600 font-thin"><?= $p_review["create_date"] ?> By</p>
                        <p class="text-blue-600 font-semibold"><?= $p_review["cus_name"] ?></p>
                    </div>
                </div>
            </div>
            <hr class="w-full px-5 h-5 text-black font-bold text-center mt-4" />
        <?php } ?>

        <!--End review box-->

        <!--pagination-->
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