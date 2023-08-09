<?php
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

</head>

<body>
    <!-- signUp container -->
    <div class="min-h-screen grid grid-cols-2">
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

        <!-- input container -->
        <div class="px-8 md:px-16 flex flex-col justify-center items-center">
            <h4 class="text-center font-extrabold text-[25px] text-[#2C7607] m-3">Sign Up</h4>
            <form action="../../Controller/account/signUpController.php" method="post" class="flex flex-col gap-4">
                <div class="mb-2">
                    <label for="shop_name" class="block font-bold mb-1">Shop Name</label>
                    <input 
                    class="block p-2 rounded-md border border-[#2C7607] shadow-md w-[400px] h-[40px]" 
                    id="shop_name" 
                    type="text" 
                    name="shop_name" 
                    placeholder="Enter Shop Name" 
                    required 
                    />
                </div>

                <div class="mb-2">
                    <label for="supplier_name" class="block font-bold mb-1">Supplier Name</label>
                    <input 
                    class="block p-2 rounded-md border border-[#2C7607] shadow-md w-[400px] h-[40px]" 
                    id="supplier_name" 
                    type="text" 
                    name="supplier_name" 
                    placeholder="Enter Supplier Name" 
                    required/>
                </div>

                <div class="mb-2">
                    <label for="email" class="block font-bold mb-1">Email Address</label>
                    <input 
                    class="block p-2 rounded-md border border-[#2C7607] shadow-md w-[400px] h-[40px]" 
                    id="email" 
                    type="email" 
                    name="email" 
                    placeholder="Enter Email Address" 
                    required
                    />
                    <small class="text-red-500">
                        <?php if(isset($_SESSION["signup_error"])){
                            echo $_SESSION["signup_error"];
                        } ?>
                    </small>
                </div>

                <div class="mb-2">
                    <label for="address" class="block font-bold mb-1">Shop Address</label>
                    <textarea 
                    class="appearance-none p-2 border border-[#2C7607] rounded-md w-[400px] text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                    id="address" 
                    rows="4" 
                    name="shop_address" 
                    placeholder="Enter Shop Address" 
                    required>
                    </textarea>
                </div>

                <div class="mb-1">
                    <label for="phone" class="block font-bold mb-1">Phone Number</label>
                    <input 
                    class="block p-2 rounded-md border border-[#2C7607] shadow-md w-[400px] h-[40px]" id="phone" 
                    type="tel" 
                    name="phone" 
                    placeholder="Enter Phone Number" 
                    required
                    />
                </div>
                <!--township-->
                        <label class="block font-bold mb-1" for="">Township</label>
                        <div class="flex  items-center justify-center">
                            <select name="township" id="" class="block p-2 rounded-md border border-[#2C7607]  bg-white shadow-md w-[400px] h-[40px]">
                                <option value="1">Yankin</option>
                                <option value="2">Dagon</option>
                                <option value="3">Kamayut</option>
                            </select>
                        </div>
                    
                    <!--bankaccount-->
                    <label for="phone" class="block font-bold mb-1">Bank Account</label>
                    <div class="">
                        <input type="text" name="bank_acc" id="name" placeholder="Bank Account" class="block p-2 rounded-md border border-[#2C7607] shadow-md w-[400px] h-[40px]">
                    </div>

                <div class="flex space-x-2 items-center">
                    <input id="privacy_policy" type="checkbox" class="form-checkbox text-[#2C7607]">
                    <label for="privacy_policy" class="text-sm">
                        I agree with <span class="text-red-500">Privacy</span> and <span class="text-red-500">Policy</span>
                    </label>
                </div>

                <div class="text-center mb-5">
                    <input 
                    type="submit" 
                    class="bg-[#2C7607] w-[300px] rounded-xl text-white py-2 hover:scale-105 duration-300"
                    value="Sign Up" 
                    />
                </div>

                <input type="text" name="from_signup" hidden>
            </form>
        </div>
    </div>
</body>

</html>
<?php $_SESSION["signup_error"] = "" ?>