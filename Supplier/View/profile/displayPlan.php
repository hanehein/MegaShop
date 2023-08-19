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
                    <div class="flex justify-center items-center">
                        <h1 class="text-[#66CC33] text-4xl">You Have Been Subscribe!</h1>
                    </div>
                </div>

            </div>

    </section>
</body>

<?php include "../components/footer.php" ?>