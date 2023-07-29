<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
            <div class="flex flex-col items-center space-y-3">
                <span class="text-2xl font-semibold">Supplier Profile</span>

                <div class="flex justify-between items-center space-x-96">
                    <a href="">My Profile</a>
                    <a href="">Go Premium</a>
                </div>

                <!--card body-->
                <div class="p-5 container mx-auto">
                    <div class="bg-white w-full h-auto shadow-lg rounded-lg p-5 ">
                        <div class="flex flex-col space-y-3 justify-center items-center">
                            <span>Shop Photo</span>
                            <img src="https://static.vecteezy.com/system/resources/previews/008/442/086/original/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="" class="w-[100px]">
                        </div>
                        <div class="flex justify-center items-center space-x-64">
                            <div class="flex flex-col space-y-5">
                                <span>Shop Name</span>
                                <div class="border-2 rounded-lg w-[200px] h-[30px] bg-gray-200"></div>
                                <span>Phone</span>
                                <div class="border-2 rounded-lg w-[200px] h-[30px] bg-gray-200"></div>
                            </div>
                            <div class="flex flex-col space-y-5">
                                <span>Supplier Name</span>
                                <div class="border-2 rounded-lg w-[200px] h-[30px] bg-gray-200"></div>
                                <span>Email</span>
                                <div class="border-2 rounded-lg w-[200px] h-[30px] bg-gray-200"></div>
                            </div>
                        </div>
                        <div class="text-end mt-12 px-10 space-x-3">
                            <button class="w-[100px] px-3 py-1 text-white rounded-lg bg-[#66CC33]">Update</button>
                            <button class="w-[100px] px-3 py-1 text-white rounded-lg bg-[#FF0000]">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!--Start profile edit-->

    </section>
</body>

</html>