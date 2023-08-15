<?php 
    include "../../Controller/location/regionListController.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./../resources/lib/jquery3.6.0.js"></script>
    <script src="./../resources/js/location.js"></script>
</head>
<body>
    <!-- signUp container -->
    <div class="min-h-screen grid grid-cols-3">
        <!-- bg & photo container -->
        <div class="h-screen md:flex flex-col hidden bg-[#EFFFE8] items-center justify-center shadow-xl rounded-tr-[80px] rounded-br-[80px]" style="box-shadow: 0 4px 50px #2C760786;">
            <h3 class="text-[30px] text-center font-extrabold italic text-[#2C7607] mt-7">Welcome to</h3>
            <h1 class="text-[45px] text-center font-extrabold text-[#2C7607] mt-3 tracking-[10px]">MEGA-SHOP</h1>
            <div class="relative w-2/3 rounded-[100px] overflow-hidden m-10 place-content-center">
                <img src="../resources/img/supplier signup.jpg" alt="" class="w-full h-full object-cover">
                <div class="absolute inset-0 shadow-inner" style="border-radius: 40px; box-shadow: inset 0 4px 15px 10px rgba(0, 0, 0, 0.2);"></div>
            </div>
            <span class="text-[#2C7607] text-[16px] text-center">2023@ MEGA-SHOP All rights reserved.</span>
        </div>
        <div class="col-span-2 px-[100px] py-[20px] flex justify-center items-center h-screen flex-col">
            <div class="w-full">
                <h1 class="text-3xl font-extrabold text-[#2C7607] mb-4 text-center w-full mb-5">Register</h1>
                <form class="w-full" action="../../Controller/account/signUpController.php" method="post">
                    <div class="mb-5">
                        <div class="flex">
                            <div class="w-1/2 px-5">
                                <label for="shop-name" class="block text-md font-semibold text-[#2C7607]">Shop Name</label>
                                <input type="text" id="shop-name" name="shop_name" class="mt-1 p-2 border rounded-md w-full" placeholder="Enter Shop Name" required>
                            </div>
                            <div class="w-1/2 px-5">
                                <label for="sup-name" class="block text-md font-semibold  text-[#2C7607]">Supplier Name</label>
                                <input type="text" id="sup-name" name="sup_name" class="mt-1 p-2 border rounded-md w-full" placeholder="Enter Supplier Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="flex">
                            <div class="w-1/2 px-5">
                                <label for="email" class="block text-md font-semibold text-[#2C7607]">Email Address</label>
                                <input type="email" id="email" name="email" class="mt-1 p-2 border rounded-md w-full" placeholder="Enter Email Address" required>
                                <small class="font-bold text-red-500"><?= $_SESSION["signup_error"] ?></small>
                            </div>
                            <div class="w-1/2 px-5">
                                <label for="phone" class="block text-md font-semibold text-[#2C7607]">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="mt-1 p-2 border rounded-md w-full" placeholder="Enter Phone Number" required>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <div class="flex">
                            <div class="w-1/2 px-5">
                                <label for="region" class="block text-md font-semibold text-[#2C7607]">Region</label>
                                <div class="">
                                    <select name="region" id="region" class="mt-1 p-2 border rounded-md w-full bg-white" required>
                                        <?php foreach ($regions as $region) { ?>
                                            <option value="<?= $region["id"] ?>"><?= $region["name"] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/2 px-5">
                                <label for="township" class="block text-md font-semibold text-[#2C7607]">Township</label>
                                <div class="">
                                    <select name="township" id="township" class="mt-1 p-2 border rounded-md w-full bg-white" required>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <div class="flex">
                            <div class="w-1/2 px-5">
                                <label for="bank-acc" class="block text-md font-semibold text-[#2C7607]">Bank Account</label>
                                <input type="text" id="bank-acc" name="bank_acc" class="mt-1 p-2 border rounded-md w-full" placeholder="Bank Account" required>
                            </div>
                            <div class="w-1/2 px-5">
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <div class="px-5">
                            <label for="address" class="block text-md font-semibold text-[#2C7607]">Shop Address</label>
                            <textarea class="mt-1 p-2 border rounded-md w-full text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="address" rows="4" name="shop_address" placeholder="Enter Shop Address" required>
                            </textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="w-[300px] bg-[#2C7607] text-white py-2 px-4 rounded-md focus:outline-none focus:ring focus:ring-blue-200" name="from_signup">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php $_SESSION["signup_error"] = "" ?>