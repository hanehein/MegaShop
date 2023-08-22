<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Page 2</title>
    <link rel="stylesheet" href="../dist/output.css">
</head>

<body>
    <section class="w-screen bg-gray-50 min-h-screen flex items-center justify-center">
        <div class=" bg-gray-100 flex rounded-2xl shadow-lg max-w-3xl p-5">
            <!-- photo container -->
            <div class="w-1/2 py-10 px-10 md:flex flex-col hidden items-center justify-center">
                <img class="rounded-[250px] w-[550px] h-[200px] shadow-xl"
                    style="border-radius: 40px; box-shadow: 0 4px 15px 10px rgba(2, 68, 134, 0.5);"
                    src="../img/verify.jpg">
            </div>
            <!-- input container -->
            <div class="md:w-1/2 relative flex flex-col items-center justify-center">
                <!-- "Back" tag -->
                <div class="absolute top-0 right-0 mt-4 mr-4 md:mt-0 md:mr-8">
                    <a href="https://www.google.com" class="underline" style="color: #F68721;">Back</a>
                </div>
                <div class="md:px-8 flex-col justify-center items-center">
                    <h6 class="mt-14 text-center font-extrabold text-[18px] text-[#024486]">Verify E-mail Address</h6>
                    <span class=" text-center font-medium text-[12px] text-[#024486]">Enter confirmation code that sent
                        to associated with your account.</span>

                </div>
                <div class="flex justify-between m-5">
                    <div class="w-[50px] h-[50px] bg-blue-300 flex items-center justify-center border border-[#024486] shadow-md"
                        style="margin-right: 10px;">4</div>
                    <div class="w-[50px] h-[50px] bg-blue-300 flex items-center justify-center border border-[#024486] shadow-md"
                        style="margin-right: 10px;">5</div>
                    <div class="w-[50px] h-[50px] bg-blue-300 flex items-center justify-center border border-[#024486] shadow-md"
                        style="margin-right: 10px;">6</div>
                    <div class="w-[50px] h-[50px] bg-blue-300 flex items-center justify-center border border-[#024486] shadow-md"
                        style="margin-right: 10px;">7</div>
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