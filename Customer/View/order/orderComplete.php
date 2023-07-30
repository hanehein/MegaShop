<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order_complete</title>

    <!-- <link rel="stylesheet" href="../resources/lib/tailwind/output.css"> -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-[#F6F6F6] overflow-x-hidden">
    <div class="w-full h-screen  flex flex-col items-center">
        <?php
        include "../components/responsiveNav.php";
        ?>
        <!-- second section -->
        <div class="w-full h-12 flex items-center justify-center md:justify-start bg-gray-200 font-['Poppins'] px-2 py-2 space-x-3">
            <a href="../order/shoppingCart.php"><span class="text-gray-500 text-sm">shopping cart</span></a>
            <ion-icon name="arrow-redo-circle" class="text-[#F68721]"></ion-icon>
            <a href="../order/checkout.php"><span class="text-gray-500 text-sm">checkout</span></a>
            <ion-icon name="arrow-redo-circle" class="text-[#F68721]"></ion-icon>
            <a href="../order/orderComplete.php"><span class="text-blue-800 text-sm ">order complete</span></a>
        </div>
        <!-- third section -->
        <div class="w-full container mx-auto flex flex-col items-center  justify-center font-['Poppins']  space-y-8 py-2 px-2 mt-5">
            <div class="flex items-center justify-center">
                <p class="text-sm text-gray-500 font-semibold">We received your order. Please make your payment.</p>
            </div>
            <div class="w-[23rem] flex items-center justify-between border-b-2 border-b-orange-400 py-2">
                <p class="text-sm text-gray-500">Payable Amount</p>
                <p class="text-sm text-gray-500">20,000 <span>Ks</span></p>
            </div>

            <div class="w-[23rem] flex items-center justify-between">
                <a href="../Home/index.php"><button class="bg-[#F68721] shadow-md  w-40 px-2 py-2 text-sm text-white rounded-bl-lg rounded-tr-lg hover:bg-gray-200 hover:text-orange-400">Continue Shopping</button></a>
                <!-- need to add order complete -->
                <a href=""><button class="bg-[#F68721] shadow-md  w-40 px-2p py-2 text-sm text-white rounded-bl-lg rounded-tr-lg hover:bg-gray-200 hover:text-orange-400">Order Complete</button></a>
            </div>
            <!-- invoice card -->
            <div class="w-[23rem] flex flex-col items-center justify-center bg-gray-200 rounded-bl-lg rounded-tr-lg py-3 shadow-md space-y-2 opacity-35">
                <div class="w-[22rem] flex items-center justify-between text-sm text-[#024486] border-b-2 border-b-orange-400 py-2">
                    <p>Product</p>
                    <p>Product Description</p>
                    <p>Subtotal</p>
                </div>
                <div class="w-[22rem] flex items-center justify-between text-sm text-[#024486] border-b-2 border-b-orange-400 py-2">
                    <img src="../resources/img/fortnite.jpg" alt="" width="30%">
                    <p>example</p>
                    <p>20,000 Ks</p>
                </div>
                <div class="w-[22rem] flex items-center justify-between text-sm text-[#024486]  py-2">
                    <p>Order ID</p>
                    <p>#112233</p>
                </div>
                <div class="w-[22rem] flex items-center justify-between text-sm text-[#024486]  py-2">
                    <p>Payment Method</p>
                    <p>COD</p>
                </div>
                <div class="w-[22rem] flex items-center justify-between text-sm text-[#024486]  py-2">
                    <p>Subtotal</p>
                    <p>20,000 Ks</p>
                </div>
                <div class="w-[22rem] flex items-center justify-between text-sm text-[#024486]  py-2">
                    <p>Delivery Fees</p>
                    <p>2,000 Ks</p>
                </div>
                <div class="w-[22rem] flex items-center justify-between text-sm text-[#024486]  py-2">
                    <p>Total</p>
                    <p>22,000 Ks</p>
                </div>
                <div class="w-[22rem] flex items-center justify-between text-sm text-[#024486]  py-2">
                    <p>Date</p>
                    <p>July 20, 2023</p>
                </div>
            </div>
        </div>


        <!-- footer responsive -->
        <div class="w-full  flex flex-col items-center justify-center font-['Poppins'] bg-[#024486] mt-5">
            <!-- first one -->
            <div class="md:w-full w-[28rem] container md:flex mx-auto  items-center justify-between sm:justify-center mt-3 py-3 md:space-x-20">
                <!-- quicklink -->
                <div class=" md:w-50 w-[28rem] flex flex-col  items-center justify-center text-white text-xs px-3 py-2">
                    <p>Quick Links</p>
                    <ul class="list-disc mt-2">
                        <a href="../Product/aboutUs.php">
                            <li>About Us</li>
                        </a>
                        <a href="../order/userPrivacy.php">
                            <li>Pricacy & Policy</li>
                        </a>
                    </ul>
                </div>
                <!-- Help -->
                <div class=" md:w-50 w-[28rem] flex flex-col  items-center justify-center text-white text-xs px-3 py-2 md:border-hidden border-t-2  border-b-white">
                    <p>Help?</p>
                    <ul class="list-disc mt-2 cursor-pointer">
                        <a href="../Product/cusfeedback.php">
                            <li>Feedback</li>
                        </a>
                        <a href="../Product/FAQ.php">
                            <li>FAQ</li>
                        </a>
                    </ul>
                </div>
                <!-- Contact Us -->
                <div class=" w-50 w-[28rem] flex flex-col items-center justify-center text-white text-xs px-3 py-2 border-t-2 border-b-white  md:border-hidden ">
                    <p>Contact Us</p>
                    <ul class="list-disc mt-2 leading-5">
                        <li><ion-icon name="phone-portrait"></ion-icon><span class="ml-2">+95777777777</span></li>
                        <li><ion-icon name="mail"></ion-icon><span class="ml-2">service@gmail.com</span></li>
                    </ul>
                </div>
            </div>
            <!-- last one -->
            <div class="md:w-[80rem] w-[28rem] flex items-center justify-center border-t-2 border-b-white mt-1 py-3">
                <p class="text-white text-xs">&#64;2023 MEGA SHOP All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- script for flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>
<!-- blue 800
    slate-100
    orange-500
     primary - #024486
     secondary - #F68721
     tertiary - #F6F6F6
    <ion-icon name="person-circle"></ion-icon>
    <ion-icon name="cart"></ion-icon>
    <ion-icon name="ellipse"></ion-icon>
    <ion-icon name="caret-down"></ion-icon>
    <ion-icon name="logo-facebook"></ion-icon>
    <ion-icon name="logo-instagram"></ion-icon>
    <ion-icon name="logo-twitter"></ion-icon>
    <ion-icon name="search"></ion-icon>
    <ion-icon name="phone-portrait"></ion-icon>
    <ion-icon name="mail"></ion-icon>
    <ion-icon name="gift"></ion-icon>
    class="text-[#F68721]"
    <ion-icon name="arrow-redo-circle"></ion-icon>
-->

<!-- <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id="> -->