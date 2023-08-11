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
            $currentMenu = "Setting";
            include "../components/navbar.php";
            ?>
            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>
                <div class="flex flex-col items-center space-y-3">
                    <span class="text-2xl font-semibold">Supplier Profile</span>

                    <div class="flex justify-between items-center space-x-96">
                        <a href="./supProfile.php">My Profile</a>
                        <a href="./plan.php">Go Premium</a>
                    </div>

                    <!--card body-->
                    <!-- <form action="../../Controller/setting/updateProfileController.php" method="post"> -->
                        <div class="p-5 container mx-auto">
                            <div class="bg-white w-full h-auto shadow-lg rounded-lg p-5 ">
                                <div class="flex flex-col space-y-3 justify-center items-center">
                                    <span>Shop Photo</span>
                                    <img src="https://static.vecteezy.com/system/resources/previews/008/442/086/original/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="" id="shopImg" class="w-[100px]">
                                </div>
                                <div class="flex justify-center items-center space-x-64">
                                    <div class="flex flex-col space-y-5">
                                        <?php foreach ($profile as $result) { ?>
                                            <input type="hidden" value="<?= $result["id"] ?>" name="id">
                                            <span>Shop Name:</span>
                                            <div class="border-2 rounded-lg w-[250px] h-[30px] bg-gray-200 px-2"><?= $result["sup_shop_name"] ?></div>
                                            <span>Phone </span>
                                            <div class="border-2 rounded-lg w-[250px] h-[30px] bg-gray-200 px-2"><?= $result["sup_phone"] ?></div>
                                    </div>
                                    <div class="flex flex-col space-y-5">
                                        <span>Supplier Name </span>
                                        <div class="border-2 rounded-lg w-[250px] h-[30px] bg-gray-200 px-2"><?= $result["sup_name"] ?></div>
                                        <span>Email</span>
                                        <div class="border-2 rounded-lg w-[250px] h-[30px] bg-gray-200 px-2"> <?= $result["sup_email"] ?></div>
                                    </div>
                                </div>
                            <?php } ?>
                    <!-- </form> -->
                    <div class="text-end mt-12 px-10 space-x-3">
                        <a href="../../Controller/setting/editProfileController.php  ?id=<?= $result["id"] ?>">
                        <button  name="edit" class="w-[100px] px-3 py-1 text-white rounded-lg bg-[#66CC33]">Edit</button> 
                        </a>
                        <a href="">
                            <button name="cancel" class="w-[100px] px-3 py-1 text-white rounded-lg bg-[#FF0000]"> Cancel</button>
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