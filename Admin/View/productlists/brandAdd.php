


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Brand</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/brand.css">
</head>

<body class="overflow-x-hidden ">
    <!-- main div -->
    <div class="min-h-screen flex   bg-black text-gray-800 relative ">
        <!-- dashboard div -->
        <div class="fixed flex flex-col top-0 left-0 w-64 bg-white h-full border-r ">
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
        <!-- data display div -->
        <div class="w-full flex flex-col  items-center justify-start bg-gray-200 space-y-5 font-['Poppins'] ">
            <div class="w-full flex items-center justify-evenly h-20 bg-[#00336659] space-x-80">

                <!-- dropdown -->
                
                <div class="flex items-center justify-center space-x-3">

                    
                </div>
            </div>

            <div class="w-1/3 h-auto flex flex-col items-start justify-start bg-white font-['Poppins'] rounded-md shadow-sm shadow-black px-2 mt-20">


                <form action="../../Controller/controller/BrandAddController.php" method="post">
                    <div class="w-full h-auto px-3 py-3 flex flex-col">
                        <p class="text-lg mt-3 mb-3">Brand Form</p>
                        <div class="w-full bg-black h-0.5"></div>
                        <p class="mt-3 mb-3">Title</p>
                        <input type="text" name="brand" class="border-2 px-3 py-1 w-auto h-1/2 rounded-md mt-3" required>
                        <input type="date" name="date" class="border-2 px-3 py-1 w-auto h-1/2 rounded-md mt-3" required>
                        <div class="flex justify-start mt-5">
                            <button class="w-1/3 rounded-lg px-2 py-2 bg-[#1E6AE1] mt-3 text-white">Add</button>
                            
                        </div>
                    </div>
                </form>


            </div>


        </div>
    </div>
</body>

</html>