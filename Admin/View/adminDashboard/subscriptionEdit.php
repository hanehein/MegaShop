<?php 
session_start();
$incomeEdit  = $_SESSION["subIncomeEdit"];
// print_r($incomeEdit);
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
    <script src="../resources/js/img.js" defer></script>
</head>

<body class="overflow-x-hidden ">
    <!-- main div -->
    <div class="min-h-screen flex flex-auto  text-gray-800 relative">
        <!-- dashboard div -->
        <?php
        include "../components/menu.php";
        ?>
        <!-- data display div -->
        <div class="w-5/6 flex flex-col  items-center justify-center bg-gray-200">

            <div class="w-[50rem] h-auto flex flex-col items-center justify-center bg-[#003366] font-['Poppins'] rounded-md shadow-md shadow-black py-4">
                <form action="../../Controller/subUpdateController.php" method="post">
                    <div class="w-full flex flex-col items-center justify-center  px-8 space-y-5">
                        <div class="flex items-center justify-center  space-x-8 mb-3">
                            <label for="profile">
                                <img src="../<?php echo $incomeEdit[0]["shop_photo_path"]?>" alt="" width="100%" id="outImg" class="rounded-full w-28 h-28">
                            </label>
                            <input type="file" id="profile" name="shopPhoto" class="hidden" accept=".png,.jpg" value="">
                        </div>
                        <div class="flex flex-col space-y-5 items-center justify-between w-96 text-xs">
                            <input type="hidden" class="hidden" name="id" value="<?php echo $incomeEdit[0]["id"] ?>">
                            <input type="hidden" class="hidden" name="password" value="<?php echo $incomeEdit[0]["sup_password"] ?>">
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <label class="text-white" for="">Shop Name</label>
                                <input type="text" name="shopName" value="<?php echo $incomeEdit[0]["sup_shop_name"]?>" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <label class="text-white" for="adname">Shop Email</label>
                                <input type="email" name="email" value="<?php echo $incomeEdit[0]["sup_email"] ?>" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96  text-white font-semibold text-xs space-x-16">
                                <label class="text-white" for="">Plan</label>
                                <div class=" flex space-x-3 items-center justify-start">
                                    <input type="radio" id="" name="plan" class="" value="0" <?php
                                                                                                if ($incomeEdit[0]["pack_id"] == 0) {
                                                                                                    echo "Basic" ?> checked <?php }
                                                                                                                            ?>>
                                    <label for="plan_basic">Basic</label>
                                    <input type="radio" id="plan_silver" name="plan" class="" value="1" <?php
                                                                                                        if ($incomeEdit[0]["pack_id"] == 1) {
                                                                                                            echo "Basic" ?> checked <?php }
                                                                                                                                    ?>>
                                    <label for="plan_sliver">Silver</label>
                                    <input type="radio" id="plan_gold" name="plan" class="" value="2" <?php
                                                                                                        if ($incomeEdit[0]["pack_id"] == 2) {
                                                                                                            echo "Gold" ?> checked <?php }
                                                                                                                                    ?>>
                                    <label for="plan_gold">Gold</label>
                                </div>
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <label class="text-white" for="adname">Plan Duration</label>
                                <input value="<?php echo $incomeEdit[0]["pack_actual_duration"]?>" type="number" name="duration" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <label class="text-white" for="adname">Bank Account</label>
                                <input value="<?php echo $incomeEdit[0]["bank_account"]?>" type="text" name="bankAcc" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex items-center justify-between w-96 space-x-16">
                                <label class="text-white" for="adname">Activated Date</label>
                                <input value="<?php echo $incomeEdit[0]["create_date"]?>" type="date" name="createDate" class="shadow shadow-black rounded-md bg-[#F6F6F6] border-none">
                            </div>
                            <div class="flex  items-center justify-center space-x-10 w-auto mt-5">
                                <button type="submit" class="w-24 h-8 text-white bg-green-500 rounded-md text-sm hover:bg-white hover:text-[#66CC33] shadow-md shadow-black">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="flex  items-center justify-center space-x-10 w-auto mt-5">
                    <a href="../../Controller/deleteController.php?id=<?= $incomeEdit[0]["id"] ?>"><button class="w-24 h-8 text-white bg-gray-500 rounded-md text-sm hover:bg-white hover:text-[#CCCCCC] shadow-md shadow-black">Delete</button></a>
                    <a href="./adminSubscriptionIncome.php"><button class="w-24 h-8 text-white bg-gray-500 rounded-md text-sm hover:bg-white hover:text-[#CCCCCC] shadow-md shadow-black">Back</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>