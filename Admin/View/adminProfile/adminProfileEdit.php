<?php

include "../../Controller/adminProfileController.php";
// print_r($adminProfile);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/profile.css">
    <script src="../resources/js/img.js" defer></script>
</head>

<body class="overflow-x-hidden ">
    <!-- main div -->
    <div class="min-h-screen flex text-gray-800">
        <!-- dashboard div -->
        <?php
        include "../components/menu.php";
        ?>
        <!-- data display div -->
        <div class="w-5/6 flex flex-col items-center justify-center bg-gray-200">

            <div class="w-[50rem] h-auto flex flex-col items-center justify-center bg-[#003366] font-['Poppins'] rounded-md shadow-md shadow-black py-4">
                <?php

                    $count = 1;

                    foreach ($adminProfile as $admin) {
                    # code...

                ?>
                <div class="w-full flex flex-col items-center justify-center  px-8 space-y-5">
                    <div class="flex items-center justify-center">
                        <label for="profile">
                            <img src="../resources/img/<?= $admin["image"] ?>" alt="profile" width="100%" id="outImg" class="rounded-full w-28 h-28">
                        </label>
                        <input type="file" id="profile" hidden class="hidden" accept=".png,.jpg">
                    </div>
                    <div class="w-auto flex flex-col space-y-8 items-center justify-center ">
                        <div class="flex items-center justify-start space-x-24 text-white w-[30rem]">
                            <!-- name -->
                            <label class="text-white font-sm" for="">Admin Name :</label>
                            <p> <?= $admin["admin_name"] ?></p>
                        </div>

                        <div class="flex items-center justify-start w-[30rem] space-x-20 text-white">
                            <!-- email -->
                            <label class="text-white font-sm" for="">Email Address :</label>
                            <p> <?= $admin["admin_email"] ?></p>
                        </div>
                        <div class="flex items-center justify-start w-[30rem] space-x-36 text-white">
                            <!-- phone -->
                            <label class="text-white font-sm" for="">Phone :</label>
                            <p> <?= $admin["phone"] ?></p>
                        </div>
                        <div class="flex items-center justify-start w-[30rem] space-x-20 text-white">
                            <!-- Bio -->
                            <label class="text-white font-sm" for="">Admin Position :</label>
                            <p> <?= $admin["admin_bio"] ?></p>
                        </div>
                        <div class="flex  items-center justify-center space-x-10 w-auto">
                            <a href="../adminDashboard/adminDashboard.php"><button class="w-24 h-8 text-white bg-gray-500 rounded-md text-sm hover:bg-white hover:text-[#CCCCCC] shadow-md shadow-black">Back</button></a>
                            <a href="../../Controller/adminSignupController.php?id=<?=$admin["id"]?>"><button class="w-24 h-8 text-white bg-[#66CC33] rounded-md text-sm hover:bg-white hover:text-[#66CC33] shadow-md shadow-black">Sign Up</button></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>