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
                        <a href="" class="hover:underline">My Profile</a>
                        <a href="" class="hover:underline">Go Premium</a>
                    </div>
                </div>
                <div class="container mx-auto">
                    <div class="w-auto h-screen p-5 shadow-lg rounded-lg flex flex-col items-center justify-center space-y-12 bg-white mt-5">
                        <span class="font-semibold">You Chose Diamond Plan To Subscribe</span>
                        <span>You will subscribe to our website for 6 months</span>
                        <span class="text-xs">Total cost : 40,000 Ks </span>
                        <span>Please Choose Your Payment Method</span>
                        <div class="flex justify-between items-center space-x-11">
                            <button class="border-2 bg-[#66CC33] rounded-lg px-3 py-1 text-white w-[150px]">
                                <ion-icon name="checkbox-outline"></ion-icon>
                                KBZpay</button>
                            <button class="border-2 bg-[#66CC33] rounded-lg px-3 py-1 text-white w-[150px]">
                                <ion-icon name="checkbox-outline"></ion-icon>
                                AYApay</button>
                        </div>
                        <div class="text-end">
                            <button class="border-2 bg-[#66CC33] rounded-lg px-3 py-1 text-white w-[100px]">
                                Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php include "../components/footer.php" ?>