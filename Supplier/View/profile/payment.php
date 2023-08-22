<?php
session_start();
$package = $_SESSION["plan"];

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
                        <a href="./supProfile.php" class="hover:underline">My Profile</a>
                        <a href="./plan.php" class="hover:underline">Go Premium</a>
                    </div>
                </div>
                <div class="container mx-auto">
                    <div class="w-auto h-screen p-5 shadow-lg rounded-lg flex flex-col items-center justify-center space-y-12 bg-white mt-5">
                        <input type="hidden" name="pack_id">
                        <!-- <input type="hidden" value="<?= $package["pack_id"] ?>" name="id"> -->
                        <span class="font-semibold">You Chose <?= $package[0]["pack_name"] ?> Plan To Subscribe</span>
                        <span>You will subscribe to our website for <?= $package[0]["pack_duration"] ?> months</span>
                        <span class="text-xs">Total cost : <?= $package[0]["pack_price"] ?> Ks </span>
                        <!-- <span>Please Choose Your Payment Method</span> -->
                        <!-- <div class="flex justify-between items-center space-x-11">
                            <button class="border-2 bg-[#66CC33] rounded-lg px-3 py-1 text-white w-[150px]">
                                <ion-icon name="checkbox-outline"></ion-icon>
                                KBZpay</button>
                            <button class="border-2 bg-[#66CC33] rounded-lg px-3 py-1 text-white w-[150px]">
                                <ion-icon name="checkbox-outline"></ion-icon>
                                AYApay</button>
                        </div> -->
                        <div class="text-end">
                            <a href="../../Controller/setting/subscribeController.php?choice_id= <?= $package[0]["pack_id"] ?>">
                                <button class="border-2 bg-[#66CC33] rounded-lg px-3 py-1 text-white w-[100px]  hover:bg-green-800">
                                    Subscribe</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php include "../components/footer.php" ?>