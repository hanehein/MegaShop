<?php

include '../../Controller/homeSliderController.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Slider</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/slider.css">
    <script src="../resources/js/img.js" defer></script>
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="flex justify-center items-center overflow-x-hidden no-scrollbar bg-[#e5e7eb]">
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
            <ul class="flex flex-col py-4 space-y-1">
                <?php include '../components/menu.php'; ?>
        </div>
    </div>
    <!-- nav -->
    
    <form action="../../Controller/homeSliderEditController.php" method="post">
    <div class=" h-full mx-auto flex justify-between items-center bg-[#ffffff] px-7 py-7 mt-10">
        <p></p>
        <?php foreach ($result as $m_herosection) { ?>
            <label for="img1"><img src="../resources/img/<?php echo $m_herosection["hero_photo1"]; ?>"></label>
            <input type="file" id="img1"  class="hidden" accept=".png,.jpg,.svg">
            <div class="flex flex-col w-1/2 ml-36">
                <label for="img2"><img src="../resources/img/<?php echo $m_herosection["hero_photo2"]; ?>" alt="" class="ml-10 mb-10"></label>
                <input type="file" id="img2"  class="hidden" accept=".png,.jpg,.svg">
                <label for="img3"><img src="../resources/img/<?php echo $m_herosection["hero_photo3"]; ?>" alt="" class="ml-10 mb-10"></label>
                <input type="file" id="img3"  class="hidden" accept=".png,.jpg,.svg">
            </div>
            
        <?php } ?>
        <a href="../../Controller/homeSliderEditController.php"><button class=" px-5 py-2 bg-custom-blue text-white font-semibold rounded-lg  mt-2 mb-3 hover:bg-[#9ca3af]">Save</button></a>
    </div>
    </form>
</body>

</html>