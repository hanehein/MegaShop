<?php
session_start();
$supEdit = $_SESSION["supEdit"];
print_r($supEdit);

?>



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

            <div class="w-[50rem] h-auto flex flex-col items-center justify-center bg-[#003366] font-['Poppins'] rounded-md shadow-md shadow-black py-4">
                <form action="../../Controller/supUpdateController.php" method="post">
                    <div class="w-full flex flex-col items-center justify-center  px-8 space-y-5">
                        <div class="flex items-center justify-center  space-x-8 mb-3">
                            <label for="profile">
                                <img src="../resources/img/shop1.jpg" alt="coffee" width="100%" id="outImg" class="rounded-full w-28 h-28">
                            </label>
                            <input type="file" id="profile" hidden accept=".png,.jpg" value="">
                        </div>
                        <div class="flex flex-col space-y-5 items-center justify-between w-96 text-xs">
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <input type="hidden" class="hidden" name="id" value="<?php echo $supEdit[0]["id"] ?>">
                                <input type="hidden" class="hidden" name="password" value="<?php echo $supEdit[0]["sup_password"] ?>">
                                <!-- name -->
                                <label class="text-white" for="">Shop Name</label>
                                <input type="text" name="shopName" value="<?php echo $supEdit[0]["sup_shop_name"] ?>" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <!-- name -->
                                <label class="text-white" for="adname">Supplier Name</label>
                                <input type="text" name="supplierName" value="<?php echo $supEdit[0]["sup_name"] ?>" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <!-- email -->
                                <label class="text-white" for="adname">Shop Email</label>
                                <input type="email" name="email" value="<?php echo $supEdit[0]["sup_email"] ?>" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">

                                <label class="text-white" for="">Phone</label>
                                <input type="number" name="phone" value="<?php echo $supEdit[0]["sup_phone"] ?>" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 text-xs space-x-16">
                                <label class="text-white" for="">Township</label>
                                <div class="flex  items-center justify-center">
                                    <select name="township" id="" class="text-[#003366] text-xs w-52 rounded-md">
                                        <option <?php
                                                if ($supEdit[0]["township"] == 1) { echo "Yankin" ?> selected <?php }
                                                                                                ?> value="1" >Yankin</option>
                                        <option <?php
                                                if ($supEdit[0]["township"] == 2) { echo "Dagon" ?> selected <?php }
                                                                                                ?> value="2" >Dagon</option>
                                        <option <?php
                                                if ($supEdit[0]["township"] == 3) { echo "Kamayut" ?> selected <?php }
                                                                                                ?> value="3" >Kamayut</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex items-center justify-between w-96  text-white font-semibold text-xs space-x-16">
                                <label class="text-white" for="">Plan</label>
                                <div class=" flex space-x-3 items-center justify-start">
                                    <input type="radio" id="" name="plan" class="" value="0" <?php
                                                                                            if ($supEdit[0]["pack_id"] == 0) { echo "Basic" ?> checked <?php }
                                                                                                                                            ?>>
                                    <label for="plan_basic">Basic</label>
                                    <input type="radio" id="plan_silver" name="plan" class="" value="1" <?php
                                                                                            if ($supEdit[0]["pack_id"] == 1) { echo "Basic" ?> checked <?php }
                                                                                                                                            ?>>
                                    <label for="plan_sliver">Silver</label>
                                    <input type="radio" id="plan_gold" name="plan" class="" value="2" <?php
                                                                                                    if ($supEdit[0]["pack_id"] == 2) { echo "Gold" ?>  checked <?php }
                                                                                                                                                    ?>>
                                    <label for="plan_gold">Gold</label>
                                </div>
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <label class="text-white" for="adname">Bank Account</label>
                                <input value="<?php echo $supEdit[0]["bank_account"] ?>" type="text" name="bankAcc" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex  items-center justify-center space-x-10 w-auto mt-5">

                                <button type="submit" class="w-24 h-8 text-white bg-green-500 rounded-md text-sm hover:bg-white hover:text-[#66CC33] shadow-md shadow-black">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="flex  items-center justify-center space-x-10 w-auto mt-5">
                    <a href="../../Controller/deleteController.php?id=<?= $supEdit[0]["id"] ?>"><button class="w-24 h-8 text-white bg-gray-500 rounded-md text-sm hover:bg-white hover:text-[#CCCCCC] shadow-md shadow-black">Delete</button></a>
                    <a href="./approveList.php"><button class="w-24 h-8 text-white bg-gray-500 rounded-md text-sm hover:bg-white hover:text-[#CCCCCC] shadow-md shadow-black">Back</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>