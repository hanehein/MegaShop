<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "custom-grey": "#7B7B7B",
                        "custom-blue": "#024486",
                        "custom-orange": "#F68721",
                    },
                    backgroundColor: {
                        "custom-milk": "F1F2F4",
                        "custom-blue": "#024486",
                        "custom-orange": "#F68721",
                        "custom-grey": "#7B7B7B",
                        "custom-sky-blue": "#c9e0f5",
                        "custom-black-pale": "rgba(0,0,0,0.5)",
                        "custom-red": "FF0000"
                    },
                    fontSize: {
                        "custom-tiny": "12px",
                        "custom-medium": "16px",
                        "custom-large": "18px",
                        "custom-extra-large": "20px",
                    },
                    borderColor: {
                        "custom-blue": "#024486",
                        "custom-grey": "#7B7B7B",
                        "custom-orange": "#F68721",
                    },
                },
            },
        };
    </script>
    <script src="./singleProductDeatil.js" defer></script>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php"; ?>

        <div class="col-span-5">
            <?php
            $currentMenu = "Setting";
            include "../components/navbar.php";
            ?>
            <div class="p-5 max-h-screen overflow-y-auto">
            <div class="h-[60px]"></div>
                <div class="flex flex-col items-center space-y-5">
                    <span class="text-2xl font-semibold">Supplier Profile</span>

                    <div class="flex justify-between items-center space-x-96">
                        <a href="" class="hover:underline">My Profile</a>
                        <a href="" class="hover:underline">Go Premium</a>
                    </div>
                </div>
                <div class="container mx-auto">
                    <div class="w-auto h-screen p-5 shadow-lg rounded-lg flex flex-col items-center justify-center space-y-12 bg-white mt-5">
                        <span class="font-semibold">You Chose Diamond Plan To Subscribe</span>
                        <span>You will subscribe to our website for 6 months</span>
                        <span class="text-xs">Total cost : 40,000 Ks </span>
                        <span>Please Choose Your Payment Method</span>
                        <div class="flex justify-between items-center space-x-11">
                            <button class="border-2 bg-[#66CC33] rounded-lg px-3 py-1 text-white w-[150px]">
                                <ion-icon name="checkbox-outline"></ion-icon>
                                KBZpay</button>
                            <button class="border-2 bg-[#66CC33] rounded-lg px-3 py-1 text-white w-[150px]">
                                <ion-icon name="checkbox-outline"></ion-icon>
                                AYApay</button>
                        </div>
                        <div class="text-end">
                            <button class="border-2 bg-[#66CC33] rounded-lg px-3 py-1 text-white w-[100px]">
                                Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>