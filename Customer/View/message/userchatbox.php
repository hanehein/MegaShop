<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat box</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-[#F1F2F4]">
    <div class="p-5 rounded-md bg-white shadow-sm">
        <div class=" grid grid-cols-1 sm:grid-cols-3">
            <!--Start leftside-->
            <div class="w-full border-r-2">
                <!--Start searchbox-->
                <div class="border-b-2 py-5 px-2 flex relative">
                    <input class="p-2 h-[40px] border border-slate-300 rounded-md w-full" type="text" placeholder="search...">
                </div>
                <!--End searchbox-->
                <!-- user list -->
                <div class="user-lists py-5">
                    <!-- start user -->
                    <div class="px-2 mb-2">
                        <div class="bg-slate-200  flex space-x-3 hover:bg-slate-300 cursor-pointer p-3 rounded-md">
                            <img src="../resources/img/flower.jpg" alt="" class="w-[60px] h-[60px]" />
                            <div class="flex flex-col">
                                <p class="font-semibold text-xl text-blue-800">Trendy Tread</p>
                                <p>216 followers</p>
                            </div>
                        </div>
                    </div>
                    <!-- end user -->
                </div>


            </div>

            <!--End chat lists-->
            <div class="w-full sm:col-span-2">
                <!--Start Current Chat-->
                <div class="flex flex-col border-b-2 sm:border-blue-600 w-auto">
                    <div class="flex flex-row py-2 px-2 items-center">
                        <div class="flex items-center space-x-2">
                            <img src="../resources/img/flower.jpg" alt="" class="w-[60px] h-[60px]" />
                            <p class="font-semibold text-xl text-blue-800">Trendy Tread</p>
                        </div>
                    </div>
                </div>
                <!--End Current Chat-->
                <div class="flex justify-end mb-1 pr-5 mt-3">
                    <!--chat1-->
                    <div class="flex flex-col">
                        <div class="ml-2 py-3 px-4 sm:w-[135px] md:w-[150px] bg-gray-400 rounded-bl-3xl rounded-tl-3xl rounded-br-xl text-white">
                            Hello
                        </div>
                        <p class="text-xs text-gray-600 flex justify-end">10:36 pm</p>
                    </div>
                </div>
                <!--chat1-->
                <div class="flex justify-end mb-4 pr-5">
                    <!--chat2-->
                    <div class="flex flex-col">
                        <div class="ml-2 py-3 px-4 sm:w-[280px] md:w-[400px] bg-gray-400 rounded-bl-3xl rounded-tl-3xl rounded-br-xl text-white">
                            the design and build quality of a phone are important factors to
                            assess. Consider factors such as the materials used, the overall
                            aesthetic appeal, and the ergonomics of the device. A sleek and
                            well-built phone can enhance the user experience.
                        </div>
                        <p class="text-xs text-gray-600 flex justify-end">10:36 pm</p>
                    </div>
                </div>
                <!--chat3-->
                <div class="flex justify-start mb-4 pr-5">
                    <div class="flex flex-col">
                        <div class="ml-2 py-3 px-4 sm:w-[280px] md:w-[400px] bg-gray-400 rounded-tl-3xl rounded-tr-3xl rounded-br-xl text-white">
                            The phone is an excellent product that we highly recommend to
                            our customers. Its design and build quality are top-notch,
                            featuring a sleek and modern aesthetic that appeals to a wide
                            range of users. The materials used in its construction are
                            durable, ensuring longevity and a premium feel.
                        </div>
                        <p class="text-xs text-gray-600 flex justify-end">10:36 pm</p>
                    </div>
                </div>
                <!--End chatting-->
                <!--Start key board-->
                <div class="flex justify-between items-center py-5 px-8 border-t-2">
                    <ion-icon name="add-circle" class="text-blue-800 text-[50px]"></ion-icon>
                    <!--textbox-->
                    <input type="text" placeholder="Write message ........" class="text-blue-800 border p-3 rounded-md w-[550px]" />
                    <button class="bg-orange-600  hover:bg-blue-300 text-white p-3 rounded-lg">
                        Send
                        <ion-icon name="paper-plane-outline"></ion-icon>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>