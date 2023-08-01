<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLogin</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="overflow-x-hidden bg-white">
    <!-- main div -->
    <div class="w-auto h-screen container flex mx-auto justify-center items-center ">
        <!-- inner container -->
        <div class="md:w-[26rem] w-[18rem] h-[32rem] container mx-auto flex-col items-center justify-center bg-[#CCCCCC]  rounded-bl-3xl rounded-tr-3xl shadow-md shadow-black">
            <!-- logo section -->
            <div class="md:w-[26rem] w-[18rem]  h-48 flex flex-col items-center justify-center  bg-[#003366] rounded-bl-3xl rounded-tr-3xl space-y-14 shadow-sm shadow-black">
                <div class="font-['Wallpoet'] text-3xl text-white leading-none cursor-pointer ">
                    <p class="">MEGA</p>
                    <p>SHOP</p>
                </div>
                <div class="font-['Poppins'] text-lg text-white leading-none cursor-pointer ">
                    <p class="">Welcome Back</p>
                </div>
            </div>
            <!-- Sign in section -->
            <div class="mt-10 container md:w-[25rem] mx-auto font-['Poppins']">
                <p class="text-white text-[23px] text-center">Log In</p>
                <!-- email -->
                <form action="../../Controller/loginController.php" method="post">
                    <div class="md:w-[18rem] w-[15rem]  bg-[#003366] border border-white rounded-bl-3xl rounded-tr-3xl mx-auto mt-4 flex py-1.5 px-4 space-x-3 justify-center items-center shadow-md shadow-black border-none">
                        <ion-icon name="person" class="text-white"></ion-icon>
                        <input type="text" name="userName" placeholder="Enter Name" class="text-sm bg-[#003366] focus:outline-none border-none text-white" required/>
                    </div>
                    <!-- password -->
                    <div class="md:w-[18rem] w-[15rem] bg-[#003366] border border-white  mx-auto mt-8 flex py-1.5 px-4 space-x-3 justify-center items-center rounded-bl-3xl rounded-tr-3xl shadow-md shadow-black border-none">
                        <ion-icon name="lock-closed" class="text-white"></ion-icon>
                        <input type="password" name="password" placeholder="Password" class="text-sm bg-[#003366] focus:outline-none border-none text-white" required/>
                    </div>
                    <!-- login -->
                    <button type="submit" name="login" class="w-32 bg-[#003366] mx-auto mt-8 flex py-2 justify-center items-center text-white hover:bg-gray-200 hover:text-[#003366] text-sm font-semibold rounded-bl-3xl rounded-tr-3xl shadow-md shadow-black">
                        Log In
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>