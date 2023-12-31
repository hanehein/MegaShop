<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <!-- signUp container -->
    <div class="min-h-screen flex items-center justify-center container">
        <!-- bg & photo container -->
        <div class="h-screen md:flex flex-col hidden w-1/2 bg-[#EFFFE8] items-center justify-center shadow-xl rounded-tr-[80px] rounded-br-[80px]" style="box-shadow: 0 4px 50px #2C760786;">
            <h3 class="text-[30px] text-center font-extrabold italic text-[#2C7607] pt-7">Welcome to</h3>
            <h1 class="text-[50px] text-center font-extrabold text-[#2C7607] mt-5 tracking-[10px]">MEGA-SHOP</h1>
            <div class="relative w-2/3 rounded-[100px] overflow-hidden m-10 place-content-center flex items-center justify-center ">
                <img src="../resources/img/supplier signup.jpg" alt="" class="w-full h-full object-cover">
                <div class="absolute inset-0 shadow-inner" style="border-radius: 40px; box-shadow: inset 0 4px 15px 10px rgba(0, 0, 0, 0.2);"></div>
            </div>
            <span class="text-[#2C7607] text-[20px] text-center">2023@ MEGA-SHOP All rights reserved.</span>
        </div>
        
        <!-- input container -->
        <div class="w-1/2 px-8 md:px-16 flex flex-col justify-center items-center">
            <h4 class="text-center font-extrabold text-[25px] text-[#2C7607]">Sign Up</h4>
            <form action="../../Controller/account/signUpController.php" method="post" class="flex flex-col gap-4">
                <input class="p-2 my-2 rounded-xl border border-[#2C7607] shadow-md w-[400px] h-[60px] relative" type="text" name="shop_name" placeholder="Shop Name">
                <input class="p-2 my-2 rounded-xl border border-[#2C7607] shadow-md w-[400px] h-[60px] relative" type="text" name="supplier_name" placeholder="Supplier Name">
                <input class="p-2 my-2 rounded-xl border border-[#2C7607] shadow-md w-[400px] h-[60px] relative" type="email" name="email" placeholder="Email Address">
                <input class="p-2 my-2 rounded-xl border border-[#2C7607] shadow-md w-[400px] h-[60px] relative" type="tel" name="phone" placeholder="Phone number">
                <!-- <div class="relative">
                    <input class="p-2 my-2 rounded-xl border border-[#2C7607] shadow-md w-[400px] h-[60px]" type="password" name="password" placeholder="Password">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2C7607"
                        class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer text-[#2C7607] transform group-hover:text-[#2C7607]"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path
                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                </div>
                <div class="relative">
                    <input class="p-2 my-2 rounded-xl border border-[#2C7607] shadow-md w-[400px] h-[60px]" type="password" name="confirm_password" placeholder="Confirm Password">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#2C7607"
                        class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer text-[#2C7607] transform group-hover:text-[#2C7607]"
                        viewBox="0 0 16 16">
                        <path
                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                        <path
                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                    </svg>
                </div> -->
                <div class="flex items-center">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-[#2C7607]">
                    <label for="privacy_policy" class="ml-2">
                        I agree with <span class="text-red-500">Privacy</span> and <span class="text-red-500">Policy</span>
                    </label>
                </div>
                <button class="my-4 bg-[#2C7607] rounded-xl text-white py-2 hover:scale-105 duration-300">Sign Up</button>
            </form>
        </div>
    </div>
</body>

</html>
<?php $_SESSION["loginerror"] = "" ?>