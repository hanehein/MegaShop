<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP page 3</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../dist/output.css">
</head>

<body>
    <section class="bg-gray-50 min-h-screen flex items-center justify-center">
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5">
            <!-- photo container -->
            <div class="md:flex flex-col hidden w-1/2 py-10 px-10  items-center justify-center">
                <img class="rounded-[250px] w-[550px] h-[200px] shadow-xl"
                    style="border-radius: 40px; box-shadow: 0 4px 15px 10px rgba(2, 68, 134, 0.5);"
                    src="../resources/img/p3.jpg">
            </div>
            <!-- input container -->
            <div class="md:w-1/2 relative flex flex-col items-center justify-center">
                <h6 class="mt-14 text-center font-extrabold text-[18px] text-[#024486]">New Password</h6>
                <span class=" text-center font-medium text-[12px] text-[#024486] mb-5">Please enter your new password</span>
                <form action="" class="flex flex-col gap-4 justify-center items-center">
                    <div class="relative">
                        <input class="p-2 my-2 rounded-xl border border-[#024486] shadow-md w-[300px] h-[40px]"
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
                    <div class="relative">
                        <input class="p-2 my-2 rounded-xl border border-[#024486] shadow-md w-[300px] h-[40px]"
                            type="password" name="confirm_password" placeholder="Confirm Password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#024486"
                            class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer text-[#024486] transform group-hover:text-[#024486]"
                            viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                    </div>

                    <button
                        class="my-4 bg-[#002D74] rounded-xl text-white text-base py-4 px-12 hover:scale-105 duration-300">Confirm
                        Password</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>


<?php $_SESSION["loginerror"] = "" ?>