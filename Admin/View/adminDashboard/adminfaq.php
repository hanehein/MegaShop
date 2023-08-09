<?php

include '../../Controller/FaqController.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Edit</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/faq.css">
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="flex justify-center items-center overflow-x-hidden no-scrollbar">
    <div class="fixed flex flex-col top-0 left-0 w-64 bg-white h-full border-r">
        <div class="flex justify-center items-center mt-3">
            <div class="font-['Wallpoet'] text-2xl text-[#024486] leading-none cursor-pointer">
                <p class="">MEGA</p>
                <p>SHOP</p>
            </div>
        </div>
        <!-- Menu -->
        <div class="overflow-y-auto overflow-x-hidden flex-grow font-['Poppins']">
            <!-- ul list -->
            <?php include '../components/menu.php'; ?>
        </div>
    </div>



    <div class="bg-[#D9D9D9] w-1/2 mx-auto mt-36 rounded-lg px-10 py-10 mb-10 ">
    <form action="" method="post">
        <?php foreach ($result as $m_faq) { ?>
        <div class="mt-10 mb-10">
            <input class="text-lg font-semibold  py-2 px-2 border-black rounded-lg bg-[#FFFFFF] w-full " value="<?php echo $m_faq["faq1"];?>" ></input>
         
            <input class="text-lg font-semibold  py-2 px-2 border-black rounded-lg bg-[#FFFFFF] w-full mt-10" value="<?php echo $m_faq["faq2"];?>" ></input>

        </div>
        <div class="mt-10 mb-10">
            <input class="text-lg font-semibold  py-2 px-2 border-black rounded-lg bg-[#FFFFFF] w-full" value="<?php echo $m_faq["faq3"];?>" ></input>

            <input class="text-lg font-semibold  py-2 px-2 border-black rounded-lg bg-[#FFFFFF] w-full mt-10" value="<?php echo $m_faq["faq4"];?>" ></input>

        </div>
        <div class="mt-10 mb-10">
            <input class="text-lg font-semibold  py-2 px-2 border-black rounded-lg bg-[#FFFFFF] w-full" value="<?php echo $m_faq["faq5"];?>" ></input>
        
            <input class="text-lg font-semibold  py-2 px-2 border-black rounded-lg bg-[#FFFFFF] w-full mt-10" value="<?php echo $m_faq["faq6"];?>" ></input>
  
        </div>
        <button class="bg-[#024486] w-auto px-4 py-2 rounded-lg text-white mt-3 mb-3">Save</button>
        <?php } ?>
        </form>
    </div>



</body>

</html>