<?php 

    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SubscriptionIncomeEdit</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
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
                            <div class="rounded-full w-32 h-32 bg-gray-200">
                                <label for="profile">
                                    <img src="../resources/img/undraw_Coffee_Time_45em.png" alt="coffee" width="100%" class="rounded-full h-32">
                                </label>
                                <input type="file" id="profile" hidden accept="jpa..png">
                            </div>
                            <span class="text-white text-lg">
                                Ms. Merry Jelena
                            </span>
                        </div>
                        <div class="flex flex-col space-y-5 items-center justify-between w-96 text-xs">
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <!-- name -->
                                <label class="text-white" for="adname">Shop Name</label>
                                <input type="text" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-3">
                                <!-- email -->
                                <label class="text-white" for="adname">Subscription Plan</label>
                                <input type="radio" name="plan" value="Gold">
                                <label class="text-white text-xs font-semibold" for="gold">Gold</label><br>
                                <input type="radio" name="plan" value="silver">
                                <label class="text-white text-xs font-semibold" for="silver">Silver</label><br>
                                <input type="radio" name="plan" value="trial">
                                <label class="text-white text-xs font-semibold" for="trial">Trial</label>
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <!-- password -->
                                <label class="text-white" for="adname">Payment</label>
                                <input type="text" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <!-- Job -->
                                <label class="text-white" for="adname">Duration</label>
                                <input type="text" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <!-- Bio -->
                                <label class="text-white" for="adname">Created Date</label>
                                <input type="text" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <!-- Bio -->
                                <label class="text-white" for="adname">End Date</label>
                                <input type="text" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex  items-center justify-center space-x-10 w-auto">
                                <a href=""><button class="w-24 h-8 text-white bg-gray-500 rounded-md text-sm hover:bg-white hover:text-[#CCCCCC] shadow-md shadow-black">Cancel</button></a>
                                <a href=""><button class="w-24 h-8 text-white bg-[#66CC33] rounded-md text-sm hover:bg-white hover:text-[#66CC33] shadow-md shadow-black">Update</button></a>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="flex  items-center justify-center  w-auto mt-5">
                    <a href="./adminSubscriptionIncome.php"><button class="w-24 h-8 text-white bg-gray-500 rounded-md text-sm hover:bg-white hover:text-[#CCCCCC] shadow-md shadow-black">Back</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>