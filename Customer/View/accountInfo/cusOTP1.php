<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP page 1</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>

<body>
    <section class="bg-gray-50 min-h-screen flex items-center justify-center">
        <div class="bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5">
            <!-- photo container -->
            <div class="md:flex flex-col hidden w-1/2 py-10 px-10  items-center justify-center">
                <img class="rounded-[250px] w-[550px] h-[200px] shadow-xl"
                    style="border-radius: 40px; box-shadow: 0 4px 15px 10px rgba(2, 68, 134, 0.5);"
                    src="../img/forget1.jpg">
            </div>
            <!-- input container -->
            <div class="md:w-1/2 relative flex flex-col items-center justify-center">
                <!-- "Back" tag -->
                <div class="absolute top-0 right-0 mt-4 mr-4 md:mt-0 md:mr-8">
                    <a href="https://www.google.com" class="underline" style="color: #F68721;">Back</a>
                </div>
                <div class="flex-col justify-center items-center">
                    <h6 class="mt-14 text-center font-extrabold text-[18px] text-[#024486]">Forgot Password?</h6>
                    <span class=" text-center font-medium text-[12px] text-[#024486]">Enter your e-mail address
                        associated with your account and we will send confirmation code to reset your password .</span>
                    <form action="" class="flex flex-col gap-4 justify-center items-center">
                        <input class="p-2 my-2 rounded-xl border border-[#024486] shadow-md w-[300px] h-[40px] relative"
                            type="email" name="email" placeholder="Email">
                    </form>
                </div>
                <button
                    class="my-4 bg-[#002D74] rounded-xl text-white text-base py-4 px-12 hover:scale-105 duration-300">Confirm
                    mail</button>

            </div>
        </div>
    </section>
</body>

</html>


<?php $_SESSION["loginerror"] = "" ?>