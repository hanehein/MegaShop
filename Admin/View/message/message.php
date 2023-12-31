<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Message</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/msg.css">
</head>

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/menu.php" ?>
        <div class="col-span-5 relative">
            <div class="p-5 max-h-screen">
                <div class="grid grid-cols-5 p-5 gap-4 rounded-md bg-white">
                    <div class="col-span-2 p-3 relative">
                        <!-- start search -->
                        <div class="relative">
                            <input class="p-2 h-[40px] border border-slate-300 rounded-md w-full" type="text" placeholder="search...">
                            <button class="py-2 px-4 h-[40px] bg-[#003366] text-white absolute top-0 right-0 rounded-tr-md rounded-br-md">
                                <ion-icon name="search"></ion-icon>
                                search
                            </button>
                        </div>
                        <ul class="user-lists mt-4 p-3 max-h-[500px] overflow-y-auto">
                            <li class="flex space-x-3 items-center shadow-md p-3 bg-slate-200 rounded-md mb-5">
                                <img class="w-[40px] h-[40px] rounded-full" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="user-profile">
                                <div class="user-info">
                                    <span class="font-semibold">Min Khant Wai</span>
                                </div>
                            </li>
                            <li class="flex space-x-3 items-center shadow-md p-3 bg-slate-200 rounded-md mb-5">
                                <img class="w-[40px] h-[40px] rounded-full" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="user-profile">
                                <div class="user-info">
                                    <span class="font-semibold">Min Khant Wai</span>
                                </div>
                            </li>

                            <li class="flex space-x-3 items-center shadow-md p-3 bg-slate-200 rounded-md mb-5">
                                <img class="w-[40px] h-[40px] rounded-full" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="user-profile">
                                <div class="user-info">
                                    <span class="font-semibold">Min Khant Wai</span>
                                </div>
                            </li>

                            <li class="flex space-x-3 items-center shadow-md p-3 bg-slate-200 rounded-md mb-5">
                                <img class="w-[40px] h-[40px] rounded-full" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="user-profile">
                                <div class="user-info">
                                    <span class="font-semibold">Min Khant Wai</span>
                                </div>
                            </li>

                            <li class="flex space-x-3 items-center shadow-md p-3 bg-slate-200 rounded-md mb-5">
                                <img class="w-[40px] h-[40px] rounded-full" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="user-profile">
                                <div class="user-info">
                                    <span class="font-semibold">Min Khant Wai</span>
                                </div>
                            </li>

                            <li class="flex space-x-3 items-center shadow-md p-3 bg-slate-200 rounded-md mb-5">
                                <img class="w-[40px] h-[40px] rounded-full" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="user-profile">
                                <div class="user-info">
                                    <span class="font-semibold">Min Khant Wai</span>
                                </div>
                            </li>

                            <li class="flex space-x-3 items-center shadow-md p-3 bg-slate-200 rounded-md mb-5">
                                <img class="w-[40px] h-[40px] rounded-full" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="user-profile">
                                <div class="user-info">
                                    <span class="font-semibold">Min Khant Wai</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-span-3 p-5 border-l border-slate-400">
                        <div class="current-user">
                            <div class="flex space-x-3 items-center p-3 border-b border-slate-400">
                                <img class="w-[40px] h-[40px] rounded-full" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="user-profile">
                                <div class="user-info">
                                    <span class="font-semibold">Min Khant Wai</span>
                                </div>
                                </li>
                            </div>

                            <!-- start message box -->
                            <div class="messages p-3 max-h-[500px] overflow-y-auto">
                                <!-- other's message -->
                                <div class="chat-message mb-8">
                                    <div class="grid justify-items-start">
                                        <p class="max-w-[500px] p-3 bg-slate-200 rounded-md">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil harum nam
                                            repellendus sit corporis adipisci necessitatibus rerum cumque eius unde!
                                        </p>
                                    </div>
                                </div>

                                <!-- your message -->
                                <div class="chat-message mb-8">
                                    <div class="grid justify-items-end">
                                        <p class="max-w-[500px] p-3 bg-slate-200 justify-items-start rounded-md">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil harum nam
                                            repellendus sit corporis adipisci necessitatibus rerum cumque eius unde!
                                        </p>
                                    </div>
                                </div>

                                <!-- other's message -->
                                <div class="chat-message mb-8">
                                    <div class="grid justify-items-start">
                                        <p class="max-w-[500px] p-3 bg-slate-200 rounded-md">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil harum nam
                                            repellendus sit corporis adipisci necessitatibus rerum cumque eius unde!
                                        </p>
                                    </div>
                                </div>

                                <!-- other's message -->
                                <div class="chat-message mb-8">
                                    <div class="grid justify-items-start">
                                        <p class="max-w-[500px] p-3 bg-slate-200 rounded-md">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil harum nam
                                            repellendus sit corporis adipisci necessitatibus rerum cumque eius unde!
                                        </p>
                                    </div>
                                </div>

                                <!-- other's message -->
                                <div class="chat-message mb-8">
                                    <div class="grid justify-items-start">
                                        <p class="max-w-[500px] p-3 bg-slate-200 rounded-md">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil harum nam
                                            repellendus sit corporis adipisci necessitatibus rerum cumque eius unde!
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="relative mt-2">
                                <input class="p-2 h-[40px] border border-slate-300 rounded-md w-full" type="text" placeholder="search...">
                                <button class="py-2 px-4 h-[40px] bg-[#003366] text-white absolute top-0 right-0 rounded-tr-md rounded-br-md">
                                    <ion-icon name="send"></ion-icon>
                                    send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end aye myat noe khin -->
            </div>
    </section>
</body>

</html>