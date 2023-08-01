<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Edit</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="../resources/js/img.js"></script>
</head>

<body class="overflow-x-hidden ">
    <!-- main div -->
    <div class="min-h-screen flex flex-auto flex-shrink-0 bg-black text-gray-800 relative">
        <!-- dashboard div -->
        <?php
        include "../components/menu.php";
        ?>
        <!-- data display div -->
        <div class="w-full flex flex-col  items-center justify-center bg-gray-200 ml-10">

            <div class="w-[50rem] h-[43rem] flex flex-col items-center justify-center bg-[#003366] font-['Poppins'] rounded-md shadow-md shadow-black">
                <form action="">
                    <div class="w-full flex flex-col items-center justify-center  px-8 space-y-5">
                    <div class="flex items-center justify-center  space-x-8 mb-3">
                            <label for="profile">
                                <img src="../resources/img/shop1.jpg" alt="coffee" width="100%" id="outImg" class="rounded-full w-28 h-28">
                            </label>
                            <input type="file" id="profile" hidden accept=".png,.jpg">
                            <span class="text-white text-lg uppercase font-semibold">
                                High Cultured
                            </span>
                        </div>
                        <div class="flex flex-col space-y-5 items-center justify-between w-96 text-xs">
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <!-- name -->
                                <label class="text-white" for="adname">Shop Name</label>
                                <input type="text" name="shopName" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <!-- name -->
                                <label class="text-white" for="adname">Supplier Name</label>
                                <input type="text" name="supplierName" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <!-- email -->
                                <label class="text-white" for="adname">Email Address</label>
                                <input type="email" name="email" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                               
                                <label class="text-white" for="adname">Password</label>
                                <input type="password" name="password" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <!-- <div class="flex items-center justify-between w-96 space-x-16">
                                
                                <label class="text-white" for="adname">Shop Address</label>
                                <input type="text" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div> -->
                            <!-- <div class="flex items-center justify-between w-96 space-x-16">
                               
                                <label class="text-white" for="adname">Supplier's ID</label>
                                <input type="text" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div> -->
                            <div class="flex items-center justify-between w-96 space-x-16">
                               
                                <label class="text-white" for="adname">Subscribed Plan</label>
                                <input type="text" name="plan" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                               
                                <label class="text-white" for="adname">Subscription Duration</label>
                                <input type="text" name="duration" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex  items-center justify-center space-x-10 w-auto mt-5">
                                <a href=""><button class="w-24 h-8 text-white bg-gray-500 rounded-md text-sm hover:bg-white hover:text-[#CCCCCC] shadow-md shadow-black">Cancel</button></a>
                                <a href=""><button class="w-24 h-8 text-white bg-[#66CC33] rounded-md text-sm hover:bg-white hover:text-[#66CC33] shadow-md shadow-black">Update</button></a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="flex  items-center justify-center space-x-10 w-auto mt-5">
                    <a href="./approveList.php"><button class="w-24 h-8 text-white bg-gray-500 rounded-md text-sm hover:bg-white hover:text-[#CCCCCC] shadow-md shadow-black">Back</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>