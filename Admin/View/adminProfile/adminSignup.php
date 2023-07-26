<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="overflow-x-hidden bg-[#F6F6F6]">
    <!-- main div -->
    <!-- Outer container -->
    <div class="w-auto h-screen container flex mx-auto justify-center items-center ">
        <!-- inner container -->
        <div class="md:w-[30rem] w-[18rem] container mx-auto flex-col items-center justify-center bg-[#003366] rounded-bl-3xl rounded-tr-3xl pt-8 pb-4 shadow-md shadow-black">
            <!-- logo section -->
            <div class="flex flex-col space-x-1.5 items-center justify-center">
                <div class="font-['Wallpoet'] text-2xl text-white leading-none cursor-pointer ">
                    <p class="">MEGA</p>
                    <p>SHOP</p>
                </div>
            </div>
            <!-- Inner Container section -->
            <div class="container md:w-[25rem] mx-auto font-['Poppins']  flex-col justify-center items-center py-5">
                <!-- Sign up section -->
                <p class="text-white text-lg text-center  ">Create New Account</p>
                
                <form action="">
                    <!-- username -->
                    <div class="shadow-md shadow-black md:w-[18rem] w-[16rem] bg-[#F6F6F6] border border-white rounded-[5px] mx-auto mt-4 flex py-1.5 px-4 space-x-5 justify-center items-center">
                        <ion-icon name="person" class="text-[#003366] "></ion-icon>
                        <input type="text" name="" id="name" placeholder="Username" class="text-sm bg-[#F6F6F6] focus:outline-none text-white border-none ">
                    </div>
                    <!-- email -->
                    <div class="shadow-md shadow-black md:w-[18rem] w-[16rem] bg-[#F6F6F6] border border-white rounded-[5px] mx-auto mt-7 flex py-1.5 px-4 space-x-5 justify-center items-center">
                        <ion-icon name="mail" class="text-[#003366]"></ion-icon>
                        <input type="email" name="" id="email" placeholder="Email Address" class="text-sm bg-[#F6F6F6] focus:outline-none text-white border-none" />
                    </div>
                    <!-- password -->
                    <div class="shadow-md shadow-black md:w-[18rem] w-[16rem] bg-[#F6F6F6] border border-white rounded-[5px] mx-auto mt-7 flex py-1.5 px-4 space-x-5 justify-center items-center">
                        <ion-icon name="lock-closed" class="text-[#003366]"></ion-icon>
                        <input type="password" name="" id="password" placeholder="Password" class="text-sm bg-[#F6F6F6] focus:outline-none text-white border-none" />
                    </div>
                    <!-- phone number -->
                    <div class="shadow-md shadow-black md:w-[18rem] w-[16rem] bg-[#F6F6F6] border border-white rounded-[5px] mx-auto mt-7 flex py-1.5 px-4 space-x-5 justify-center items-center">
                    <ion-icon name="phone-portrait" class="text-[#003366]" ></ion-icon>
                        <input type="password" name="" id="password" placeholder="Enter Phone Number" class="text-sm bg-[#F6F6F6] focus:outline-none text-white border-none" />
                    </div>
                    <!-- login -->
                    <button type="submit" class="w-[10rem]  bg-blue-500 rounded-[8px] mx-auto mt-8 flex py-2 justify-center items-center shadow-md shadow-black hover:bg-white hover:text-gray-500 text-white font-semibold ">
                        Sign Up
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>