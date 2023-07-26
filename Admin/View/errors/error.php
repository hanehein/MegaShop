<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLogin</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="overflow-x-hidden bg-white">
    <!-- main div -->
    <div class="w-auto h-screen container flex flex-col mx-auto justify-center items-center font-['Poppins'] space-y-8 ">
        <!-- inner container -->
        <img src="../resources/img/undraw_location_search_re_ttoj.svg" alt="" width="50%">
        <div class="flex items-center justify-center space-x-3">
            <p class="text-[#003366] text-xl font-semibold">ERROR! </p>
            <ion-icon name="bug" size="large" class="text-[#003366]"></ion-icon>
        </div>
        <div class="flex items-center justify-center space-x-3">
            <p class="text-[#003366] text-xl font-semibold">You enter the wrong place!</p>
            <ion-icon name="sad" size="large"  class="text-[#003366]"></ion-icon>
        </div>
        <a href="../adminDashboard/adminDashboard.php"><button class="rounded-md w-36 h-10 px-2 text-sm bg-[#003366] text-white font-semibold hover:bg-[#66CC33] hover:text-gray-500 ">Go Back to Home</button></a>
    </div>
</body>

</html>