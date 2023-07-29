<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan</title>
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
                        "custom-red": "#FF0000"
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
                        "custom-teal": "#00534F"
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
                        <a href="">My Profile</a>
                        <a href="">Go Premium</a>
                    </div>

                    <!--card body-->
                    <div class="flex justify-between items-center space-x-10">
                        <!--Start card1-->
                        <div class="bg-custom-grey w-[300px] h-[400px] shadow-lg p-5 flex flex-col space-y-3 rounded-lg">
                            <span class="font-semibold text-custom-large">Silver</span>
                            <span>Everything you need to create a store,
                                and process payments.</span>
                            <span>20,000 Ks/month for 3 months</span>
                            <a href="" class="border-2 bg-[#66CC33] shadow-lg rounded-lg text-white text-center">Choose Silver Plan</a>
                            <div class="px-4 py-6 border-b-2">
                            </div>
                        </div>
                        <!--Start card2-->
                        <div class="bg-custom-grey w-[300px] h-[400px] shadow-lg p-5 flex flex-col space-y-3 rounded-lg">
                            <span class="font-semibold text-custom-large">Gold</span>
                            <span>Everything you need to create a store,
                                and process payments.</span>
                            <span>40,000 Ks/month for 6 months</span>
                            <a href="" class="border-2 bg-[#66CC33] shadow-lg rounded-lg text-white text-center">Choose Gold Plan</a>
                            <div class="px-4 py-6 border-b-2">
                            </div>
                        </div>
                        <!--Start card3-->
                        <div class="bg-custom-grey w-[300px] h-[400px] shadow-lg p-5 flex flex-col space-y-3 rounded-lg">
                            <span class="font-semibold text-custom-large">Diamond</span>
                            <span>Everything you need to create a store,
                                and process payments.</span>
                            <span>60,000 Ks/month for 12 months</span>
                            <a href="" class="border-2 bg-[#66CC33] shadow-lg rounded-lg text-white text-center">Choose Diamond Plan</a>
                            <div class="px-4 py-6 border-b-2">
                            </div>
                        </div>

                    </div>
                    <!--Start plan detail-->
                    <div class="flex flex-col space-y-3 w-[980px] h-[130px] bg-custom-grey p-5 rounded-lg">
                        <div><span>All plans include:</span></div>
                        <div class="flex justify-between">
                            <div class="flex flex-col">
                                <span>24/7 support</span>
                                <span>Shareable product pages</span>
                            </div>
                            <div class="flex flex-col">
                                <span>Fraud analysis</span>
                                <span>Sales channels</span>
                            </div>
                            <div class="flex flex-col">
                                <span>Abandoned cart recovery</span>
                                <span>Fast and reliable checkouts</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
</body>

</html>