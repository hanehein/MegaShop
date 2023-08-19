<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <!-- signUp container -->
    <div class="min-h-screen flex items-center justify-center container">
        <!-- photo container -->
        <div class="w-1/2 md:flex flex-col hidden  justify-center items-center">
            <img src="../resources/img/cusLogin.jpg" alt=""
                class="w-[400px] h-[450px] rounded-[50px] border border-[#76BAFF] shadow-xl"
                style="box-shadow: 0 0 100px 100px rgba(2, 68, 164 ,0.65);">
        </div>
        <!-- input container -->
        <div class="min-h-screen w-1/2 px-8 md:px-16 flex justify-center items-center relative">
            <div class="absolute top-0 right-0 mt-4 mr-4 md:px-8">
                <img src="../resources/img/Logo-user.png" alt="" class="w-[200px] h-[160px]">
            </div>
            <div class=" px-8 md:px-16 flex flex-col justify-center items-center">
                <h4 class="my-7 text-center font-extrabold text-[25px] text-[#024486]">Log in</h4>
                <form action="" class="flex flex-col gap-4" action="../../account/Controller/cusLoginController.php" method="POST">
                    <input class="p-2 my-2 rounded-xl border border-[#024486] shadow-md w-[400px] h-[60px] relative"
                    type="email" name="email" placeholder="Email">
                    <div class="relative">
                        <input class="p-2 my-2 rounded-xl border border-[#024486] shadow-md w-[400px] h-[60px]"
                            type="password" name="password" placeholder="Password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#024486"
                            class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer text-[#024486] transform group-hover:text-[#024486]"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600">
                        <label for="privacy_policy" class="ml-2">
                            Remember me 
                        </label>
                        <a href="#" class="text-red-500 ml-24 text-sm font-semibold italic">Forgot Password ?</a>
                    </div>
                    <button class="my-4 bg-[#002D74] rounded-xl text-white text-xl py-5 hover:scale-105 duration-300" name="from_login">Log in</button>
                    <div class="flex items-center">
                        <span class="ml-7">Don't have an account ? </span>
                        <a href="#" class="text-red-500 ml-24 text-sm italic font-semibold">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>

</html>
<?php $_SESSION["loginerror"] = "" ?>