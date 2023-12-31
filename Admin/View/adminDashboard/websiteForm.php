<?php


include '../../Controller/websiteFormController.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Form</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/form.css">
    <script src="../resources/js/img.js" defer></script>
</head>

<body class="flex justify-center items-center overflow-x-hidden">
    <!-- sidebar -->
    <div class="w-1/3 min-h-screen flex flex-col flex-auto bg-gray-50 text-gray-800">
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

        <div class="flex flex-col">

            <div class="w-full flex items-center justify-center h-20 bg-[#00336659] space-x-80">

            </div>

            <form action="../../Controller/websiteFormEditController.php" method="post">
                <div class="w-1/2 h-auto mx-auto flex justify-center items-center bg-[#FFFFFF] px-7 py-7 ">
                    <div class="w-full h-auto mx-auto flex flex-col justify-center items-start px-5 py-5 bg-[#d1d5db] rounded-md">
                        <div class="mt-2 mb-3">
                            <p class="text-[#003366] text-2xl font-semibold">
                                Website Form
                            </p>
                        </div>
                        <div class="text-[#003366] mt-2 mb-3">
                            <p>Website Logo</p>
                        </div>
                        <?php foreach ($result as $m_website_form) { ?>
                            <div class="w-1/6 h-auto bg-white flex flex-col items-center justify-center py-3 px-3 rounded-lg mt-2 mb-3">
                                <label for="logo">
                                    <img src="../resources/img/<?php echo $m_website_form["logo_photo"] ?>" alt="" class="cursor-pointer">
                                </label>
                            </div>

                            <input type="file" name="logo" id="logo" hidden class="hidden" accept=".png,.jpg,.svg" required>
                            <div class="text-[#003366] mt-2 mb-3">
                                <p>Website Name</p>
                            </div>
                            <input type="hidden" name="id" class="mt-2 mb-3 rounded-lg px-2 w-1/3" value="<?php echo $m_website_form["id"]; ?>">
                            <input type="text" name="webname" class="mt-2 mb-3 rounded-lg px-2 w-1/3" value="<?php echo $m_website_form["web_name"]; ?>">
                            <div class="text-[#003366] mt-2 mb-3">
                                <p>Slogan</p>
                            </div>

                            <input type="text" name="slogan" class="mt-2 mb-3 rounded-lg px-2 w-1/3" value="<?php echo $m_website_form["slogan"]; ?>">
                        <?php } ?>
                        <button class="px-5 py-2 bg-custom-blue text-white font-semibold rounded-lg  mt-2 mb-3 hover:bg-[#9ca3af]">Save</button>
                    </div>

                </div>
            </form>
        </div>


    </div>


</body>

</html>