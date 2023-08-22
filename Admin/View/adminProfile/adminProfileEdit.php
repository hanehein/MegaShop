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
                    <div class="w-full flex flex-col items-center justify-center  space-y-5 ">
                        <div class="w-auto flex flex-col space-y-8 items-center justify-center ">
                            <div class="flex items-center justify-start w-96 space-x-5">
                                <label for="profile">
                                    <img src="../resources/img/<?= $admin["image"] ?>" alt="profile" width="100%" id="outImg" class="rounded-full w-28 h-28">
                                </label>
                                <input type="file" id="profile" hidden class="hidden" accept=".png,.jpg">
                            </div>
                            <div class="flex items-center justify-start w-96 space-x-9  text-white">
                                <!-- name -->
                                <label class="text-white font-sm" for="">Admin Name :</label>
                                <div class="w-auto px-2 py-1 rounded-md h-8 bg-[#5486b7bc]"> <?= $admin["admin_name"] ?></div>
                            </div>
                            <div class="flex items-center justify-start w-96 space-x-7  text-white">
                                <!-- email -->
                                <label class="text-white font-sm" for="">Email Address :</label>
                                <div class="w-auto px-2 py-1 rounded-md h-8 bg-[#5486b7bc]"> <?= $admin["admin_email"] ?></div>
                            </div>
                            <div class="flex items-center justify-start w-96 space-x-[5.5rem] text-white">
                                <!-- phone -->
                                <label class="text-white font-sm" for="" >Phone :</label>
                                <div class="w-auto px-2 py-1 rounded-md h-8 bg-[#5486b7bc]"><?= $admin["phone"] ?></div>
                            </div>
                            <div class="flex items-center justify-start w-96 space-x-5  text-white">
                                <!-- Bio -->
                                <label class="text-white font-sm" for="">Admin Position :</label>
                                <div class="w-auto px-2 py-1 rounded-md h-8 bg-[#5486b7bc]"> <?= $admin["admin_bio"] ?></div>
                            </div>
                            <div class="flex  items-center justify-start w-96 space-x-12">
                                <a href="../adminDashboard/adminDashboard.php"><button class="w-24 h-8 text-white bg-gray-500 rounded-md text-sm hover:bg-white hover:text-[#CCCCCC] shadow-md shadow-black">Back</button></a>
                                <a href="../../Controller/adminSignupController.php?id=<?= $admin["admin_id"] ?>"><button class="w-auto h-8 text-white  rounded-md text-sm bg-[#66CC33]  shadow-md shadow-black py-1 px-2">Edit Information</button></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>