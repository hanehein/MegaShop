<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Chatbox</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container mx-auto">
        <div class="px-5 py-5 flex justify-between items-center bg-white ">

            <div class="border border-r-4 px-5">
                <!--Start search box-->
                <div class="flex items-center">
                    <input type="text" name="search" id="" class="md:w-48 w-40 h-[25px] p-2 text-sm border-blue-800 border-2 bg-[#F6F6F6] rounded-l-md" placeholder="Search here...">
                    <div class="bg-[#024486] w-7 h-[25px] mx-auto text-center rounded-r-md">
                        <ion-icon name="search" class="text-white"></ion-icon>
                    </div>
                </div>
                <!--End search box-->
                <!--Start chatname-->
                <div class="flex space-x-2">
                    <img src="" alt="">
                    <p class="font-semibold text-xl text-blue-800">Trendy Tread</p>
                </div>
                <!--End chatname-->
            </div>
        </div>
        <!--Start chat lists-->
        <div class="flex flex-col items-center space-y-3">
            <!--box1-->
            <div class="w-[390px] h-[80px] flex space-x-3 border-2 hover:drop-shadow-md p-3">
                <img src="../resources/img/flower.jpg" alt="" class="w-[60px] h-[60px]">
                <div class="flex flex-col">
                    <p class="font-semibold text-xl text-blue-800">Trendy Tread</p>
                    <p>216 followers</p>
                </div>
            </div>
            <!--box2-->
            <div class="w-[390px] h-[80px] flex space-x-3 border-2 hover:drop-shadow-md p-3">
                <img src="../resources/img/flower.jpg" alt="" class="w-[60px] h-[60px]">
                <div class="flex flex-col">
                    <p class="font-semibold text-xl text-blue-800">GO DEAL</p>
                    <p>26 followers</p>
                </div>
            </div>
            <!--box3-->
            <div class="w-[390px] h-[80px] flex space-x-3 border-2 hover:drop-shadow-md p-3">
                <img src="../resources/img/flower.jpg" alt="" class="w-[60px] h-[60px]">
                <div class="flex flex-col">
                    <p class="font-semibold text-xl text-blue-800">Easy Buy</p>
                    <p>36 followers</p>
                </div>
            </div>
            <!--box4-->
            <div class="w-[390px] h-[80px] flex space-x-3 border-2 hover:drop-shadow-md p-3">
                <img src="../resources/img/flower.jpg" alt="" class="w-[60px] h-[60px]">
                <div class="flex flex-col">
                    <p class="font-semibold text-xl text-blue-800">Smart Store</p>
                    <p>436 followers</p>
                </div>
            </div>
            <!--box5-->
            <div class="w-[390px] h-[80px] flex space-x-3 border-2 hover:drop-shadow-md p-3">
                <img src="../resources/img/flower.jpg" alt="" class="w-[60px] h-[60px]">
                <div class="flex flex-col">
                    <p class="font-semibold text-xl text-blue-800">Success Store</p>
                    <p>456 followers</p>
                </div>
            </div>
        </div>
        <!--Start chat-->
        <div class="flex flex-col justify-between items-center">
            <!--chat1-->
            <div class="flex flex-col  items-center">
                <div class="ml-2 py-3 px-4 bg-gray-400 rounded-bl-3xl rounded-tl-3xl rounded-br-xl text-white">
                    Hello
                </div>
                <p class="text-xs text-gray-600">10:36 pm</p>
            </div>
            <!--chat2-->
            <div class="flex flex-col  items-center">
                <div class="ml-2 py-3 px-4 bg-gray-400 rounded-bl-3xl rounded-tl-3xl rounded-br-xl text-white">
                    the design and build quality of a phone are important factors to assess. Consider factors such as the
                    materials used, the overall aesthetic appeal, and the ergonomics of the device.
                    A sleek and well-built phone can enhance the user experience.
                </div>
                <p class="text-xs text-gray-600">10:36 pm</p>
            </div>
            <!--chat3-->
            <div class="flex flex-col  items-center">
                <div class="ml-2 py-3 px-4 bg-gray-400 rounded-bl-3xl rounded-tl-3xl rounded-br-xl text-white">
                    The phone is an excellent product that we highly recommend to our customers. Its design and build quality are
                    top-notch, featuring a sleek and modern aesthetic that appeals to a wide range of users. The materials used in
                    its construction are durable, ensuring longevity and a premium feel.
                </div>
                <p class="text-xs text-gray-600">10:38 pm</p>
            </div>
        </div>
        <!--Start key board-->
        <div class="flex justify-between items-center p-5">
            <ion-icon name="add-circle" class="text-blue-800 text-[50px]"></ion-icon>           
            <!--textbox-->
            <input type="text" placeholder="Write message ........" class="text-blue-800 border p-3 rounded-md">
            <button class="bg-orange-600 text-white p-3 rounded-lg">Send
                <span><ion-icon name="send-outline"></ion-icon></span>
            </button>
        </div>

    </div>
</body>

</html>