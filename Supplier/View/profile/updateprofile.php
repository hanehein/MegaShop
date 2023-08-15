 <?php
    session_start();
    $profile_data = $_SESSION["data"];
    ?>
 <?php
    $hasJsFile = TRUE;
    $jsFileNames = ["profile"];
    include "../components/header.php";
    ?>

 <body>
     <section class="grid grid-cols-6">
         <?php include "../components/slideMenu.php"; ?>

         <!--End menu-->
         <div class="col-span-5">
             <!--Start navbar-->
             <?php
                $currentMenu = "Setting";
                include "../components/navbar.php";
                ?>
             <!--End navbar-->

             <!--Start body-->
             <div class="p-5 max-h-screen overflow-y-auto">
                 <div class="h-[60px]"></div>
                 <div class="flex flex-col items-center space-y-3">
                     <span class="text-2xl font-semibold">Supplier Profile</span>

                     <div class="flex justify-between items-center space-x-96">
                         <a href="./supProfile.php">My Profile</a>
                         <a href="./plan.php">Go Premium</a>
                     </div>
                 </div>

                 <div class="container mx-auto p-5">
                     <div class="grid grid-cols-3 w-full h-auto p-5 bg-white rounded-lg">

                         <form action="../../Controller/setting/updateProfileController.php" method="post">
                         <div class="border-r-2 border-black">
                             <span>Shop Photo</span>
                             <label for="shop_photo">
                                 <img src="https://static.vecteezy.com/system/resources/previews/008/442/086/original/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="" id="shopImg" class="w-[100px]">
                             </label>
                             <input type="file" name="image" id="shop_photo" accept="image/*" class="hidden">

                         </div>
                         <div class="col-span-2 ml-5">

                             <div class="flex justify between items-center space-x-64">
                                 <div class="flex flex-col space-y-5">
                                     <input type="hidden" name="id" value="<?= $profile_data[0]["id"] ?>">
                                     <span>Shop Name</span>
                                     <input type="text" class="border-2 rounded-lg bg-gray-300" value="<?= $profile_data[0]["sup_shop_name"] ?>" name="sup_shop_name" required>
                                     <span>Phone</span>
                                     <input type="text" class="border-2 rounded-lg bg-gray-300" value="<?= $profile_data[0]["sup_phone"] ?>" name="sup_phone" required>
                                     <span>New Password</span>
                                     <input type="text" class="border-2 rounded-lg bg-gray-300" name="sup_password">
                                 </div>
                                 <div class="flex flex-col space-y-5">
                                     <span>Supplier Name</span>
                                     <input type="text" class="border-2 rounded-lg bg-gray-300" value="<?= $profile_data[0]["sup_name"] ?>" name="sup_name">
                                     <span>Email</span>
                                     <input type="text" class="border-2 rounded-lg bg-gray-300" value="<?= $profile_data[0]["sup_email"] ?>" name="sup_email" required>
                                 </div>
                             </div>

                             <div class="text-right mt-5 py-8 px-5 space-x-3">
                                 <a href="../../Controller/setting/updateProfileController.php">
                                     <button class="w-[100px] px-3 py-1 text-white rounded-lg bg-[#66CC33]" name="update">Update</button>
                                 </a>
                                 <a href="./supProfile.php">
                                 <button class="w-[100px] px-3 py-1 text-white rounded-lg bg-[#FF0000]" name="cancel">Cancel</button>
                                 </a>
                             </div>
                         </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </section>
 </body>

 <?php include "../components/footer.php" ?>