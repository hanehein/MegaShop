<?php
session_start();
$profile_data = $_SESSION["data"];
?>

<!-- start header -->
<?php
$hasJsFile = TRUE;
$jsFileNames = ["profile"];
include "../components/header.php";
?>
<!-- end header -->

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php"; ?>

        <!--End menu-->
        <div class="col-span-5">
            <!--Start navbar-->
            <?php
            $currentMenu = "Edit Profile";
            include "../components/navbar.php";
            ?>
            <!--End navbar-->

            <!--Start body-->
            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>
                <h2 class="text-2xl font-semibold text-center mb-5">Edit Profile</h2>
                <div class="p-5 bg-white rounded-md shadow-md">
                    <form action="./../../Controller/setting/updateProfileController.php" method="POST">
                        <input type="hidden" name="id" value="<?= $profile_data["id"] ?>">
                        <div class="flex space-x-[200px] justify-center mb-10">
                            <div>
                                <span class="block mb-2 text-slate-600">Shop Photo</span>
                                <label for="shop_photo">
                                    <img src="https://static.vecteezy.com/system/resources/previews/008/442/086/original/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="" id="shopImg" class="h-[100px]">
                                </label>
                                <input type="file" name="shop_photo" id="shop_photo" accept="image/*" class="hidden">
                            </div>
                            <div>
                                <span class="block mb-2 text-slate-600">Supplier Photo</span>
                                <label for="supplier_photo">
                                    <img src="https://static.vecteezy.com/system/resources/previews/008/442/086/original/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="" id="supplierImg" class="h-[100px]">
                                </label>
                                <input type="file" name="sup_photo" id="supplier_photo" accept="image/*" class="hidden">
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-10 mb-10">
                            <div>
                                <span class="block mb-2 text-slate-600">Shop Name</span>
                                <input type="text" class="rounded-md w-full border border-slate-400" value="<?= $profile_data["sup_shop_name"] ?>" name="sup_shop_name" required>
                            </div>
                            <div>
                                <span class="block mb-2 text-slate-600">Supplier Name</span>
                                <input type="text" class="rounded-md w-full border border-slate-400" value="<?= $profile_data["sup_name"] ?>" name="sup_name" required>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-10 mb-10">
                            <div>
                                <span class="block mb-2 text-slate-600">Phone Number</span>
                                <input type="text" class="rounded-md w-full border border-slate-400" value="<?= $profile_data["sup_phone"] ?>" name="sup_phone" required>
                            </div>
                            <div>
                                <span class="block mb-2 text-slate-600">Email Address</span>
                                <input type="text" class="rounded-md w-full border border-slate-400" value="<?= $profile_data["sup_email"] ?>" name="sup_email" required>
                            </div>
                        </div>

                        <div class="text-end space-x-3">
                            <a href="../../Controller/setting/updateProfileController.php">
                                <button class="w-[100px] px-3 py-1 text-white rounded-lg bg-[#66CC33]" name="from_update">Update</button>
                            </a>
                            <a href="./supprofile.php">
                                <button class="w-[100px] px-3 py-1 text-white rounded-lg bg-[#FF0000]" name="cancel">Cancel</button>
                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
</body>

<?php include "../components/footer.php" ?>