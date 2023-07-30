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
            <ul class="flex flex-col py-4 space-y-1">
               <?php include '../components/menu.php';?>
        </div>
    </div>
    <!-- nav -->
    <div class="w-full flex flex-col bg-[#003366] absolute top-0 left-64 px-4 py-4">
        <div class="flex justify-around">
            <input type="text" class="w-1/3 mx-auto py-2 rounded-lg" placeholder="Search">
            <p class="text-lg font-semibold text-white mx-auto">
                28 July 2023
            </p>
        </div>
    </div>
    <div class=" h-auto mx-auto flex justify-between items-center bg-[#FFFFFF] px-7 py-7 mt-20">

        <img src="../resources/img/img1.svg" alt="">
        <div class="flex flex-col w-1/2 ml-36">
            <img src="../resources/img/img2.svg" alt="" class="ml-10 mb-10">
            <img src="../resources/img/img3.svg" alt="" class="ml-10 mb-10">
        </div>

    </div>
</body>

</html>