<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="bg-slate-100 font-['Poppins'] no-scrollbar md:flex flex-col min-h-screen">
    <!-- navbar responsive -->
    <div class="w-full flex flex-col items-center">
        <!-- navbar -->
        <?php include '../components/responsiveNav.php'; ?>
    </div>
    <!-- qna -->
    <div class="bg-[#D9D9D9] w-2/3 md:w-1/2 mx-auto mt-20 rounded-lg px-5 py-5 md:px-10 md:py-10 mb-10">
        <div class="mt-10 mb-10">
            <p class="text-lg font-semibold">Do we provide installation support to the users?</p>
            <p class="text-sm font-medium mt-10">Yes, we provide installation support to the users. Feel free to email us anytime.</p>
        </div>
        <div class="mt-10 mb-10">
            <p class="text-lg font-semibold">Do we provide installation guide to the users?</p>
            <p class="text-sm font-medium mt-10">Yes, we provide installation guide to the users with the packages.</p>
        </div>
        <div class="mt-10 mb-10">
            <p class="text-lg font-semibold">How much time do we take to get back to the user?</p>
            <p class="text-sm font-medium mt-10">We reply to the users as soon as possible.</p>
        </div>
        <div class="mt-10 mb-10">
            <p class="text-lg font-semibold">How much time do we take to get back to the user?</p>
            <p class="text-sm font-medium mt-10">We reply to the users as soon as possible.</p>
        </div>
    </div>
    <!-- footer -->
    <?php include '../components/footer.php'; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>