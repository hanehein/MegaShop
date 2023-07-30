<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>

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
        <!-- nav bar -->
        <?php
            include "../components/responsiveNav.php";
        ?>
        <!-- second section -->
        <div class="w-full h-12 flex items-center justify-center md:justify-start bg-gray-200 font-['Poppins'] px-2 py-2 space-x-3">
            <a href="../order/shoppingCart.php"><span class="text-gray-500 text-sm">shopping cart</span></a>
            <ion-icon name="arrow-redo-circle" class="text-[#F68721]"></ion-icon>
            <a href="../order/checkout.php"><span class=" text-blue-800 text-sm">checkout</span></a>
            <ion-icon name="arrow-redo-circle" class="text-[#F68721]"></ion-icon>
            <a href="../order/orderComplete.php"><span class="text-gray-500 text-sm ">order complete</span></a>
        </div>

        <!-- third section -->
        <div class="w-full container mx-auto flex flex-col items-center  justify-center font-['Poppins']  space-y-8 py-2 px-2 mt-5">
            <div class="flex items-center justify-center">
                <p class="text-sm text-gray-500 font-semibold">We received your order. Please make your payment.</p>
            </div>
        </div>
        <!-- two flexbox start -->
        <div class="w-full container mx-auto md:flex items-start justify-center font-['Poppins'] mt-5 grid-cols-1 grid-rows-2 md:space-x-8 ">
            <!-- left flexbox -->
            <div class="mid:w-1/2  w-auto h-auto  mid:h-[55rem] mid:flex flex-col items-center justify-center text-gray-500 space-y-5 px-4 py-3 mt-5 ">
                <div class="">
                    <button class="bg-[#F68721] shadow-md  w-20 px-2 py-2 text-sm text-white rounded-bl-lg rounded-tr-lg hover:bg-gray-200 hover:text-orange-400"><a href="">Step 1</a></button>
                    <p class="text-sm font-semibold mt-3">Billing & Delivery Address
                    </p>
                    <!-- info -->
                    <div class="w-auto flex items-center justify-center space-x-6 mt-3">
                        <div class="flex flex-col items-start justify-center space-y-5">
                            <div>
                                <label for="name" class="text-sm">Full Name</label>
                                <div class=" md:w-56 w-48 h-12 flex items-center justify-center bg-gray-200 rounded-md">
                                    <input type="text" placeholder="Type your name" class="w-48 h-8 border-none bg-gray-200 rounded-md text-xs">
                                    <ion-icon name="caret-down" class="text-[#024486]"></ion-icon>
                                </div>
                            </div>

                            <div>
                                <label for="name" class="text-sm">Country/Region (optional)</label>
                                <div class="  md:w-56 w-48 h-12 flex items-center justify-center bg-gray-200 rounded-md">
                                    <input type="text" class="w-48 h-8 border-none bg-gray-200 rounded-md text-xs" placeholder="Myanmar" readonly>
                                </div>
                            </div>

                            <div>
                                <label for="name" class="text-sm">Email Address</label>
                                <div class="  md:w-56 w-48 h-12 flex items-center justify-center bg-gray-200 rounded-md">
                                    <input type="email" placeholder="example@gmail.com" class="w-48 h-8 border-none bg-gray-200 rounded-md text-xs text-xs">
                                </div>
                            </div>

                        </div>
                        <div class="flex flex-col items-start justify-center space-y-5">
                            <div>
                                <label for="name" class="text-sm">Phone</label>
                                <div class="  md:w-56 w-48 h-12 flex items-center justify-center bg-gray-200 rounded-md">
                                    <input type="text" placeholder="Enter Number" class="w-48 h-8 border-none bg-gray-200 rounded-md text-xs">
                                </div>
                            </div>
                            <div>
                                <label for="name" class="text-sm">State/Division</label>
                                <div class="  md:w-56 w-48 h-12 flex items-center justify-center bg-gray-200 rounded-md">
                                    <select name="" id="" class="w-48 bg-gray-200 border-none rounded-md text-xs h-10">
                                        <option value="">Yangon</option>
                                        <option value="">Bago</option>
                                        <option value="">Myeik</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label for="name" class="text-sm">Township</label>
                                <div class="  md:w-56 w-48 h-12 flex items-center justify-center bg-gray-200 rounded-md text-xs">
                                    <select name="" id="" class="w-48 border-none bg-gray-200 rounded-md h-10">
                                        <option value="1">a</option>
                                        <option value="2">b</option>
                                        <option value="3">c</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 flex flex-col space-y-5 md:mx-auto ml-5 ">
                        <div>
                            <label for="name" class="text-sm">Address</label>
                            <div class=" md:w-[29.5rem] w-[20rem] h-12 flex items-center justify-center bg-gray-200 rounded-md">
                                <textarea name="" id="" cols="30" rows="
                        5" class="md:w-[28rem] w-[18rem] h-10 border-none bg-gray-200 rounded-md text-xs" placeholder="House number & street address" style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div>
                            <label for="name" class="text-sm">Order Notes (optional)</label>
                            <div class=" md:w-[29.5rem] w-[20rem] h-12 flex items-center justify-center bg-gray-200 rounded-md">
                                <textarea name="" id="" cols="30" rows="
                        5" class="md:w-[28rem] w-[18rem] h-10 border-none bg-gray-200 rounded-md text-xs" placeholder="Note about your order!" style="resize: none;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- right flexbox -->
            <div class="mid:w-1/3 w-auto bg-[#024486] mid:flex flex-col space-y-5 justify-center items-center rounded-md py-3 mt-5 px-4">
                <div>
                    <button class="bg-[#F68721] shadow-md  w-20 px-2 py-2 text-sm text-white rounded-bl-lg rounded-tr-lg hover:bg-gray-200 hover:text-orange-400"><a href="">Step 2</a></button>
                    <p class="text-sm text-white mt-3">Your Order and delivery informations
                    </p>
                    <!-- invoice card -->
                    <div class="md:w-[23rem] w-auto flex flex-col items-center justify-center bg-white rounded-bl-lg rounded-tr-lg py-3 shadow-md space-y-2 mt-3">
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
                    </div>
                    <!-- step 3  -->
                    <div class="md:w-[23rem] w-[28rem] flex flex-col items-start justify-center  border-t-2 border-orange-400 py-5  space-y-5 mt-5">
                        <div class="flex flex-col space-y-5">
                            <button class="bg-[#F68721] shadow-md  w-20 px-2 py-2 text-sm text-white rounded-bl-lg rounded-tr-lg hover:bg-gray-200 hover:text-orange-400"><a href="">Step 3</a></button>
                            <p class="text-sm text-white">Please choose your payment method!
                            </p>
                        </div>
                        <div class="flex flex-col space-y-8 text-sm">
                            <div>
                                <div class=" w-52 h-12 flex items-center justify-center bg-white rounded-md space-x-9 px-4">
                                    <input type="checkbox" name="payment" value="0" placeholder="Type your name" class=" border-none bg-gray-200 rounded-sm text-xs" checked>
                                    <span class="text-gray-500">Cash On Delivery</span>
                                </div>
                            </div>
                            <div>
                                <div class=" w-52 h-12 flex items-center justify-start bg-white rounded-md px-4">
                                    <input type="checkbox" name="payment" value="1" placeholder="Type your name" class=" border-none bg-gray-200 rounded-sm tex-500">
                                    <span class="text-gray-500 ml-10">KBZ Pay</span>
                                </div>
                            </div>
                            <div>
                                <div class=" w-52 h-12 flex items-center justify-start bg-white rounded-md px-4">
                                    <input type="checkbox" name="payment" value="2" placeholder="Type your name" class=" border-none bg-gray-200 rounded-sm tex-500">
                                    <span class="text-gray-500 ml-10">AYA Pay</span>
                                </div>
                            </div>
                            <div>
                                <input type="checkbox" placeholder="Type your name" class=" border-none bg-gray-200 rounded-sm">
                                <span class="text-white text-xs">I have read and agree the terms and conditions.</span>
                            </div>
                            <div class="flex flex-col justify-center">
                                <button type="submit" class="bg-[#F68721] shadow-md  w-36 px-2 py-2 text-sm text-white rounded-bl-lg rounded-tr-lg hover:bg-gray-200 hover:text-orange-400"><a href="">Place Order</a></button>
                            </div>
                        </div>
                    </div>
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
                        <a href="../Product/aboutUs.php"><li>About Us</li></a>
                        <a href="../order/userPrivacy.php"><li>Pricacy & Policy</li></a>
                    </ul>
                </div>
                <!-- Help -->
                <div class=" md:w-50 w-[28rem] flex flex-col  items-center justify-center text-white text-xs px-3 py-2 md:border-hidden border-t-2  border-b-white">
                    <p>Help?</p>
                    <ul class="list-disc mt-2 cursor-pointer">
                        <a href="../Product/cusfeedback.php"><li>Feedback</li></a>
                        <a href="../Product/FAQ.php"><li>FAQ</li></a>
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