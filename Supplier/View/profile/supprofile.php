<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
        <div class="bg-white min-h-screen">
            <div class="h-[60px] flex justify-center items-center text-center">
                <span class="font-bold">MEGA SHOP</span>
            </div>
            <div class="menu-lists">
                <ul>
                    <li class="px-3 py-4 text-custom-grey text-custom-large font-semibold hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        Dashboard</li>
                    <li class="px-3 py-4 text-custom-grey text-custom-large font-semibold hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        Products</li>
                    <li class="active px-3 py-4 text-custom-grey text-custom-large font-semibold hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        Orders</li>
                    <li class="px-3 py-4 text-custom-grey text-custom-large font-semibold hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        Customers</li>
                    <li class="px-3 py-4 text-custom-grey text-custom-large font-semibold hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        Rating and Reviews</li>
                    <li class="px-3 py-4 text-custom-grey text-custom-large font-semibold hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        Messages</li>
                    <li class="px-3 py-4 text-custom-large font-semibold hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        Setting</li>
                    <li class="px-3 py-4 text-custom-grey text-custom-large font-semibold hover:bg-[#66CC33] hover:bg-opacity-50 hover:text-white">
                        Log Out</li>
                </ul>
            </div>
        </div>
        <div class="col-span-5 rounded-lg shadow-lg overflow-hidden mb-5">
            <nav class="h-[60px] px-3 items-center flex justify-between bg-[#66CC33] bg-opacity-80">
                <div><span>Setting</span></div>
                <div><span>June 30, 2023</span></div>
            </nav>
            <div class="flex flex-col items-center space-y-3">
                <span class="text-2xl font-semibold">Supplier Profile</span>

                <div class="flex justify-between items-center space-x-96">
                    <a href="">My Profile</a>
                    <a href="">Go Premium</a>
                </div>

                <!--card body-->
                <div class="p-5">
                    <div class="bg-custom-grey w-full h-screen shadow-lg rounded-lg p-5 flex flex-col container mx-auto">
                        <div class="flex justify-between items-center">
                            <span>Shop Photo</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--Start profile edit-->

    </section>
</body>

</html>