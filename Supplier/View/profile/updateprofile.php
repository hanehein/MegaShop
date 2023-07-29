<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
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

<body>
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php"; ?>

        <!--End menu-->
        <div class="col-span-5">
            <!--Start navbar-->
            <?php
            $currentMenu = "Setting";
            include "../components/navbar.php";
            ?>
            <!--End navbar-->

            <!--Start body-->
            <div class="p-5 max-h-screen overflow-y-auto">
                <div class="h-[60px]"></div>
                <div class="flex flex-col items-center space-y-3">
                    <span class="text-2xl font-semibold">Supplier Profile</span>

                    <div class="flex justify-between items-center space-x-96">
                        <a href="">My Profile</a>
                        <a href="">Go Premium</a>
                    </div>
                </div>

                <div class="container mx-auto p-5">
                    <div class="grid grid-cols-3 w-full h-auto p-5 bg-white rounded-lg">
                        <div class="border-r-2 border-black">
                            <span>Shop Photo</span>
                            <img src="https://static.vecteezy.com/system/resources/previews/008/442/086/original/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="" class="w-[100px]">

                        </div>
                        <div class="col-span-2 ml-5">
                            <div class="flex justify between items-center space-x-64">
                                <div class="flex flex-col space-y-5">
                                    <span>Shop Name</span>
                                    <input type="text" class="border-2 rounded-lg bg-gray-300" required>
                                    <span>Phone</span>
                                    <input type="text" class="border-2 rounded-lg bg-gray-300" required>
                                    <span>New Password</span>
                                    <input type="text" class="border-2 rounded-lg bg-gray-300" required>
                                </div>
                                <div class="flex flex-col space-y-5">
                                    <span>Supplier Name</span>
                                    <input type="text" class="border-2 rounded-lg bg-gray-300">
                                    <span>Email</span>
                                    <input type="text" class="border-2 rounded-lg bg-gray-300" required>
                                    <span>Re-enter Password</span>
                                    <input type="text" class="border-2 rounded-lg bg-gray-300" required>
                                </div>
                            </div>
                            <div class="text-right mt-5 py-8 px-5 space-x-3">
                                <button class="w-[100px] px-3 py-1 text-white rounded-lg bg-[#66CC33]">Update</button>
                                <button class="w-[100px] px-3 py-1 text-white rounded-lg bg-[#FF0000]">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>