<?php
include "../../Controller/setting/planController.php";
session_start();
$supplier_id = $_SESSION["sup_id"];
?>
<?php
$hasJsFile = FALSE;
include "../components/header.php";
?>

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php"; ?>

        <div class="col-span-5">
            <?php
            $currentMenu = "Setting";
            include "../components/navbar.php";
            ?>
            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>
                <div class="flex flex-col items-center space-y-5">
                    <span class="text-2xl font-semibold">Supplier Profile</span>

                    <div class="flex justify-between items-center space-x-96">
                        <a href="./supProfile.php">My Profile</a>
                        <a href="./plan.php">Go Premium</a>
                    </div>

                    <!--card body-->
                    <div class="flex justify-between items-center space-x-10">
                        <!--Start card-->
                        <?php foreach ($package as $pack) { ?>
                            <div class="bg-custom-grey w-[300px] h-[400px] shadow-lg p-5 flex flex-col space-y-3 rounded-lg <?php if($pack["id"] == $supplier_id){ echo "border border-red-500 bg-red-800";} ?>">
                                
                                <span class="font-semibold text-custom-large"><?= $pack["pack_name"] ?></span>
                                <span><?= $pack["pack_des"] ?></span>
                                <span><?= $pack["pack_price"] ?>Ks/month for <?= $pack["pack_duration"] ?> months</span>
                                <a href="../../Controller/setting/choosePlanController.php?plan_id=<?= $pack["id"] ?>" class="border-2 bg-[#66CC33] shadow-lg rounded-lg text-white text-center">Choose <?= $pack["pack_name"] ?> Plan</a>
                                <div class="px-4 py-6 border-b-2">
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <!--Start plan detail-->
                    <div class="flex flex-col space-y-3 w-[980px] h-[130px] bg-custom-grey p-5 rounded-lg">
                        <div><span>All plans include:</span></div>
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <span>24/7 support</span>
                                <span>Shareable product pages</span>
                            </div>
                            <div class="flex flex-col">
                                <span>Fraud analysis</span>
                                <span>Sales channels</span>
                            </div>
                            <div class="flex flex-col">
                                <span>Abandoned cart recovery</span>
                                <span>Fast and reliable checkouts</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
</body>

<?php include "../components/footer.php" ?>