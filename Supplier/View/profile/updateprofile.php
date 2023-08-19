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
                    <form action="./../../Controller/setting/updateProfileController.php" method="POST" enctype="multipart/form-data">
                        <div class="flex space-x-[200px] justify-center mb-10">
                            <div>
                                <span class="block mb-2 text-slate-600">Shop Photo</span>
                                <label for="shopPhoto">
                                    <img id="shopImg" 
                                    <?php if(is_null($profile_data["shop_photo_path"])) { ?>
                                        src="../resources/img/store.png" 
                                    <?php } else { ?>
                                        src="../../../Storage/suppliers/<?= $profile_data["shop_photo_path"] ?>"
                                    <?php } ?>
                                    class="h-[100px]" alt="shop_img">
                                </label>
                                <input id="shopPhoto" type="file" name="shop_photo" accept="image/*" hidden>
                            </div>
                            <div>
                                <span class="block mb-2 text-slate-600">Supplier Photo</span>
                                <label for="supplierPhoto">
                                    <img id="supplierImg" 
                                        <?php if(is_null($profile_data["sup_photo"])) { ?>
                                            src="../resources/img/supplier_photo.jpg"
                                        <?php } else { ?>
                                            src="../../../Storage/suppliers/<?= $profile_data["sup_photo"] ?>"
                                        <?php } ?> 
                                        class="h-[100px]" alt="supplier_img"
                                    >
                                </label>
                                <input id="supplierPhoto" type="file" name="sup_photo" accept="image/*" hidden>
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
                            <a href="">
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