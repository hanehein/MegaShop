<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>privacy&policy</title>
    <link rel="stylesheet" href="../resources/lib/tailwind/output.css?id=<?= time() ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-white overflow-x-hidden">

    <div class="w-full h-screen  flex flex-col items-center">
        <?php
        include "../components/responsiveNav.php";
        ?>
        <!-- body box -->
        <div class="md:w-full container mx-auto flex flex-col justify-center items-center  font-['Poppins'] px-5 mt-[80px]">
            <p class="text-[#003366] text-md hover:text-[#F68721] font-semibold">How can we help?</p>
            <!-- policies -->
            <div class="w-32 h-8 flex items-center justify-center bg-[#F68721] rounded-md px-2 shadow-sm hover:bg-white shadow-slate-500 text-white hover:text-[#F68721] mt-3 ">
                <p class="text-sm">General Policies</p>
            </div>
            <div class=" w-[30rem] h-14 flex justify-between items-center text-gray-700 text-sm   border-t-2 border-b-2  border-t-gray-200 border-b-gray-200 mt-8">
                <p class="hover:text-[#F68721]">Terms of Services</p>
                <ion-icon name="caret-down" class="text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
            </div>
            <div class=" w-[30rem] h-14 flex justify-between items-center text-gray-700 text-sm    border-b-2 border-b-gray-200">
                <p class="hover:text-[#F68721]">Terms of Services</p>
                <ion-icon name="caret-down" class="text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
            </div>
            <div class=" w-[30rem] h-14 flex justify-between items-center text-gray-700 text-sm    border-b-2 border-b-gray-200">
                <p class="hover:text-[#F68721]">Terms of Services</p>
                <ion-icon name="caret-down" class="text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
            </div>
            <div class=" w-[30rem] h-14 flex justify-between items-center text-gray-700 text-sm    border-b-2 border-b-gray-200">
                <p class="hover:text-[#F68721]">Terms of Services</p>
                <ion-icon name="caret-down" class="text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
            </div>

            <!-- rule -->
            <div class="w-32 h-8 flex items-center justify-center bg-[#F68721] rounded-md px-2 mt-8 shadow-sm shadow-slate-500 text-white hover:text-[#F68721] hover:bg-white">
                <p class="text-sm">Rule&Regulation</p>
            </div>
            <div class=" w-[30rem] h-14 flex justify-between items-center text-gray-700 text-sm  mt-8 border-t-2 border-b-2  border-t-gray-200 border-b-gray-200">
                <p class="hover:text-[#F68721]">Terms of Services</p>
                <ion-icon name="caret-down" class="text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
            </div>
            <div class=" w-[30rem] h-14 flex justify-between items-center text-gray-700 text-sm    border-b-2 border-b-gray-200">
                <p class="hover:text-[#F68721]">Terms of Services</p>
                <ion-icon name="caret-down" class="text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
            </div>
            <div class=" w-[30rem] h-14 flex justify-between items-center text-gray-700 text-sm    border-b-2 border-b-gray-200">
                <p class="hover:text-[#F68721]">Terms of Services</p>
                <ion-icon name="caret-down" class="text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
            </div>
            <div class=" w-[30rem] h-14 flex justify-between items-center text-gray-700 text-sm    border-b-2 border-b-gray-200">
                <p class="hover:text-[#F68721]">Terms of Services</p>
                <ion-icon name="caret-down" class="text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
            </div>
        </div>
        <!-- footer responsive -->
        <div class="w-full  flex flex-col items-center justify-center font-['Poppins'] bg-[#024486] mt-5">
            <!-- first one -->
            <div class="md:w-full w-[28rem] container md:flex mx-auto  items-center justify-between sm:justify-center mt-3 py-3 md:space-x-20">
                <!-- quicklink -->
                <div class=" md:w-50 w-[28rem] flex flex-col  items-center justify-center text-white text-xs px-3 py-2">
                    <p class="hover:text-[#F68721]">Quick Links</p>
                    <ul class="list-disc mt-2">
                        <a href="../Product/aboutUs.php">
                            <li class="hover:text-[#F68721]">About Us</li>
                        </a>
                        <a href="../order/userPrivacy.php">
                            <li class="hover:text-[#F68721]">Pricacy & Policy</li>
                        </a>
                    </ul>
                </div>
                <!-- Help -->
                <div class=" md:w-50 w-[28rem] flex flex-col  items-center justify-center text-white text-xs px-3 py-2 md:border-hidden border-t-2  border-b-white">
                    <p class="hover:text-[#F68721]">Help?</p>
                    <ul class="list-disc mt-2 cursor-pointer">
                        <a href="../Product/cusfeedback.php">
                            <li class="hover:text-[#F68721]">Feedback</li>
                        </a>
                        <a href="../Product/FAQ.php">
                            <li class="hover:text-[#F68721]">FAQ</li>
                        </a>
                    </ul>
                </div>
                <!-- Contact Us -->
                <div class=" w-50 w-[28rem] flex flex-col items-center justify-center text-white text-xs px-3 py-2 md:border-hidden border-t-2 border-b-white ">
                    <p class="hover:text-[#F68721]">Contact Us</p>
                    <ul class="list-disc mt-2 leading-5">
                        <li class="hover:text-[#F68721]"><ion-icon name="phone-portrait"></ion-icon><span class="ml-2">+95777777777</span></li>
                        <li class="hover:text-[#F68721]"><ion-icon name="mail"></ion-icon><span class="ml-2">service@gmail.com</span></li>
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
-->