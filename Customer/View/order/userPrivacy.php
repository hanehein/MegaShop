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
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <script src="../resources/js/privacy.js"></script>
</head>

<body class="w-full bg-white overflow-x-hidden">

    <div class="w-full min-h-screen flex flex-col">
        <?php
        include "../components/responsiveNav.php";
        ?>
        <!-- body box -->
        <div class="md:w-[45rem] w-full container mx-auto flex flex-col justify-center items-center  font-['Poppins'] px-5 mt-[80px] ">
            <p class="text-[#003366] text-md hover:text-[#F68721] font-semibold">How can we help?</p>
            <!-- policies -->
            <div class="w-32 h-8 flex items-center justify-center bg-[#F68721] rounded-md px-2 shadow-sm hover:bg-white shadow-slate-500 text-white hover:text-[#F68721] mt-3 ">
                <p class="text-sm">General Policies</p>
            </div>
            <div class="mid:w-[30rem] w-full h-auto flex flex-col justify-between items-center text-gray-700 text-sm   border-t-2  border-t-gray-200 border-b-gray-200 mt-8">
                <div class="w-full h-14 flex justify-between items-center text-gray-700 text-sm">
                    <p class="hover:text-[#F68721]">Terms and Conditions</p>
                    <ion-icon name="caret-down" id="click1"  class=" text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
                </div>
                <div id="text1" class=" w-full text-sm text-justify">
                    <p>Welcome to our eCommerce website. By accessing and using this website, you agree to comply with and be bound by the following terms and conditions.</p>
                </div>
            </div>
            <div class="mid:w-[30rem] w-full h-auto flex flex-col justify-between items-center text-gray-700 text-sm   border-t-2  border-t-gray-200 border-b-gray-200">
                <div class="w-full h-14 flex justify-between items-center text-gray-700 text-sm  ">
                    <p class="hover:text-[#F68721]">Use of the Website<</p>
                    <ion-icon name="caret-down" id="click2"   class=" text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
                </div>
                <div id="text2" class=" w-full text-sm text-justify">
                    <p>You agree to use this website only for lawful purposes and in a manner that does not violate the rights of others.</p>
                </div>
            </div>
            <div class="mid:w-[30rem] w-full h-auto flex flex-col justify-between items-center text-gray-700 text-sm   border-t-2  border-t-gray-200 ">
                <div class="w-full h-14 flex justify-between items-center text-gray-700 text-sm  ">
                    <p class="hover:text-[#F68721]">Product Information</p>
                    <ion-icon name="caret-down" id="click3"  class=" text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
                </div>
                <div id="text3" class=" w-full text-sm text-justify">
                    <p>We strive to provide accurate and up-to-date product information. However, we do not warrant the accuracy or completeness of the information on the website.</p>
                </div>
            </div>
            <div class="mid:w-[30rem] w-full h-auto flex flex-col justify-between items-center text-gray-700 text-sm   border-t-2 border-b-2 border-t-gray-200 border-b-gray-200">
                <div  class="w-full h-14 flex justify-between items-center text-gray-700 text-sm  ">
                    <p class="hover:text-[#F68721]"> Ordering and Payment</p>
                    <ion-icon name="caret-down" id="click4"   class=" text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
                </div>
                <div id="text4" class=" w-full text-sm text-justify">
                    <p>When you place an order, you agree to provide accurate and complete information. Payment must be made through the methods specified on the website.</p>
                </div>
            </div>

            <!-- rule -->
            <div class="w-auto h-8 flex items-center justify-center bg-[#F68721] rounded-md px-2 mt-8 shadow-sm shadow-slate-500 text-white hover:text-[#F68721] hover:bg-white">
                <p class="text-sm">Rule & Regulation</p>
            </div>
            <div class="mid:w-[30rem] w-full h-auto flex flex-col justify-between items-center text-gray-700 text-sm   border-t-2  border-t-gray-200 border-b-gray-200 mt-8">
                <div class="w-full h-14 flex justify-between items-center text-gray-700 text-sm  ">
                    <p class="hover:text-[#F68721]">Intellectual Property</p>
                    <ion-icon name="caret-down" id="click5"  class=" text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
                </div>
                <div id="text5" class=" w-full text-sm text-justify">
                    <p>All content on this website, including text, graphics, logos, and images, is protected by intellectual property laws and is the property of our company.</p>
                </div>
            </div>
            <div class="mid:w-[30rem] w-full h-auto flex flex-col justify-between items-center text-gray-700 text-sm   border-t-2  border-t-gray-200 border-b-gray-200">
                <div class="w-full h-14 flex justify-between items-center text-gray-700 text-sm  ">
                    <p class="hover:text-[#F68721]">Privacy</p>
                    <ion-icon name="caret-down" id="click6"   class=" text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
                </div>
                <div id="text6" class=" w-full text-sm text-justify">
                    <p>Your privacy is important to us. Please review our Privacy Policy to understand how we collect, use, and protect your personal information.</p>
                </div>
            </div>
            <div class="mid:w-[30rem] w-full h-auto flex flex-col justify-between items-center text-gray-700 text-sm   border-t-2  border-t-gray-200 ">
                <div class="w-full h-14 flex justify-between items-center text-gray-700 text-sm  ">
                    <p class="hover:text-[#F68721]">Limitation of Liability</p>
                    <ion-icon name="caret-down" id="click7"  class=" text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
                </div>
                <div id="text7" class=" w-full text-sm text-justify">
                    <p>We are not liable for any damages arising from the use of this website or the products purchased through it.</p>
                </div>
            </div>
            <div class="mid:w-[30rem] w-full h-auto flex flex-col justify-between items-center text-gray-700 text-sm   border-t-2 border-b-2 border-t-gray-200 border-b-gray-200">
                <div  class="w-full h-14 flex justify-between items-center text-gray-700 text-sm  ">
                    <p class="hover:text-[#F68721]">Changes to Terms</p>
                    <ion-icon name="caret-down" id="click8"   class=" text-[#F68721] hover:text-[#003366]" size="small"></ion-icon>
                </div>
                <div id="text8" class=" w-full text-sm text-justify">
                    <p>We reserve the right to modify these terms and conditions at any time. Changes will be effective upon posting to the website.</p>
                </div>
            </div>
        </div>
        <!-- footer responsive -->
        <div class="w-full  flex flex-col items-center justify-center font-['Poppins'] bg-[#024486] mt-10">
            <!-- first one -->
            <div class="md:w-full w-full container md:flex mx-auto  items-center justify-between sm:justify-center mt-3 py-3 md:space-x-20">
                <!-- quicklink -->
                <div class=" md:w-50 w-full flex flex-col  items-center justify-center text-white text-xs px-3 py-2">
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
                <div class=" md:w-50 w-full flex flex-col  items-center justify-center text-white text-xs px-3 py-2 md:border-hidden border-t-2  border-b-white">
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
                <div class=" w-50 w-full flex flex-col items-center justify-center text-white text-xs px-3 py-2 md:border-hidden border-t-2 border-b-white ">
                    <p class="hover:text-[#F68721]">Contact Us</p>
                    <ul class="list-disc mt-2 leading-5">
                        <li class="hover:text-[#F68721]"><ion-icon name="phone-portrait"></ion-icon><span class="ml-2">+95777777777</span></li>
                        <li class="hover:text-[#F68721]"><ion-icon name="mail"></ion-icon><span class="ml-2">service@gmail.com</span></li>
                    </ul>
                </div>
            </div>
            <!-- last one -->
            <div class="md:w-[80rem] w-full flex items-center justify-center border-t-2 border-b-white mt-1 py-3">
                <p class="text-white text-xs">&#64;2023 MEGA SHOP All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- script for flowbite -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
</body>

</html>