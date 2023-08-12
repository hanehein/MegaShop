<?php include "../../Controller/message/chatCustomerListsController.php" ?>
<!-- Start header -->
<?php
$hasJsFile = TRUE;
$jsFileNames = ["message"];
include "../components/header.php";
?>
<!-- End header -->

<body class="bg-[#F1F2F4]">
    <section class="grid grid-cols-6">
        <?php include "../components/slideMenu.php" ?>

        <div class="col-span-5 relative">
            <div class="p-5 max-h-screen">
                <div class="grid grid-cols-5 p-5 gap-4 rounded-md bg-white">
                    <div class="col-span-2 p-3 relative">
                        <!-- start search -->
                        <div class="relative">
                            <input class="p-2 h-[40px] border border-slate-300 rounded-md w-full" type="text" placeholder="search...">
                            <button class="py-2 px-4 h-[40px] bg-green-500 text-white absolute top-0 right-0 rounded-tr-md rounded-br-md">
                                <ion-icon name="search"></ion-icon>
                                search
                            </button>
                        </div>

                        <ul class="user-lists mt-4 p-3 max-h-[500px] overflow-y-auto">
                            <?php foreach ($chatCustomerLists as $customer) { ?>
                                <!-- users -->
                                <li class="user flex space-x-3 items-center shadow-md p-3 bg-slate-200 rounded-md mb-5">
                                    <img class="w-[40px] h-[40px] rounded-full" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="user-profile">
                                    <div class="user-info">
                                        <span class="font-semibold"><?= $customer["cus_name"] ?></span>
                                    </div>
                                    <input class="user-id" type="number" value="<?= $customer['id'] ?>" hidden>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-span-3 p-5 border-l border-slate-400">
                        <div class="alert-message">
                            <h2 class="text-center text-2xl text-slate-500 font-semibold">Select a chat first</h2>
                        </div>
                        <div class="current-user-chat hidden">
                            <div class="flex space-x-3 items-center p-3 border-b border-slate-400">
                                <img class="w-[40px] h-[40px] rounded-full" src="https://static.vecteezy.com/system/resources/previews/000/439/863/original/vector-users-icon.jpg" alt="user-profile">
                                <div>
                                    <span class="current-user-name font-semibold"></span>
                                </div>
                            </div>

                            
                            <div class="current-messages p-3 h-[500px] overflow-y-auto">
                                
                            </div>

                            <div class="relative mt-2">
                                <input class="message-input p-2 h-[40px] border border-slate-300 rounded-md w-full" type="text">
                                <button class="send-btn py-2 px-4 h-[40px] bg-orange-500 text-white absolute top-0 right-0 rounded-tr-md rounded-br-md">
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

<?php include "../components/footer.php"; ?>