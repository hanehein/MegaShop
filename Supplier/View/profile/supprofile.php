<?php
include "../../Controller/setting/supplierProfileController.php";
// echo "<pre>";
// print_r($profile);
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
            $currentMenu = "Profile";
            include "../components/navbar.php";
            ?>
            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>
                <div class="flex flex-col items-center space-y-3">
                    <span class="text-2xl font-semibold">Supplier Profile</span>

                    <div class="flex justify-between items-center space-x-96">
                        <div class="relative">
                            <a class="" href="./supProfile.php">My Profile</a>
                            <div class="line absolute w-[100%] h-[3px] bg-[#66CC33]"></div>
                        </div>
                        <a href="./plan.php">Go Premium</a>
                    </div>

                    <!--card body-->
                    <!-- <form action="../../Controller/setting/updateProfileController.php" method="post"> -->
                    <div class="p-5 container mx-auto">
                        <div class="bg-white w-full h-auto shadow-lg rounded-lg p-5 ">
                            <div class="flex space-x-[200px] justify-center items-center mb-10">
                                <div>
                                    <span class="mb-1 block text-slate-600">Shop Photo</span>
                                    <img src="https://static.vecteezy.com/system/resources/previews/008/442/086/original/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="" id="shopImg" class="w-[100px]">
                                </div>
                                <div>
                                    <span class="mb-1 block text-slate-600">Supplier Photo</span>
                                    <img src="https://static.vecteezy.com/system/resources/previews/008/442/086/original/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="" id="shopImg" class="w-[100px]">
                                </div>
                            </div>
                            <div class="flex justify-center items-center space-x-64">
                                <div class="flex flex-col space-y-5">

                                    <input type="hidden" value="<?= $supplier["id"] ?>" name="id">
                                    <div class="mb-5">
                                        <span class="mb-1 block text-slate-600">Shop Name:</span>
                                        <div class="w-[250px] h-[30px] font-semibold"><?= $supplier["sup_shop_name"] ?></div>
                                    </div>
                                    <div>
                                        <span class="mb-1 block text-slate-600">Phone:</span>
                                        <div class="w-[250px] h-[30px] font-semibold"><?= $supplier["sup_phone"] ?></div>
                                    </div>
                                </div>
                                <div class="flex flex-col space-y-5">
                                    <div class="mb-5">
                                        <span class="mb-1 block text-slate-600">Supplier Name:</span>
                                        <div class="w-[250px] h-[30px] font-semibold"><?= $supplier["sup_name"] ?></div>
                                    </div>
                                    <div>
                                        <span class="mb-1 block text-slate-600">Email:</span>
                                        <div class="w-[250px] h-[30px] font-semibold"><?= $supplier["sup_email"] ?></div>
                                    </div>
                                </div>
                            </div>

                            <!-- </form> -->
                            <div class="text-end mt-12 px-10 space-x-3">
                                <a href="">
                                    <button class="px-3 py-1 text-white rounded-lg bg-blue-500">Change Password</button>
                                </a>
                                <a href="../../Controller/setting/editProfileController.php?id=<?= $supplier["id"] ?>">
                                    <button class="w-[100px] px-3 py-1 text-white rounded-lg bg-[#66CC33]">Edit</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Start profile edit-->

    </section>
</body>

<?php include "../components/footer.php" ?>