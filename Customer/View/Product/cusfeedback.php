<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Feedback</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body class="bg-white">
<div class="overflow-x-hidden header flex flex-row justify-between items-center bg-white py-5 px-5 text-blue-800">
        <ion-icon id="close" name="close-outline" class="text-blue-800 md:hidden sm:flex text-4xl self-end"></ion-icon>
        <div class="logoname font-wallpoet">Mega Shop</div>
        <div class="menu">
            <ul class="flex flex-col md:flex-row space-x-4 cursor-pointer">
                <a href="#">
                    <li class="hover:underline transition-all duration-100 delay-75 ease-linear">
                        HOME
                    </li>
                </a>
                <a href="#">
                    <li class="hover:underline transition-all duration-100 delay-75 ease-linear">
                        PRODUCTS
                    </li>
                </a>
                <a href="#">
                    <li class="hover:underline transition-all duration-100 delay-75 ease-linear">
                        STORES
                    </li>
                </a>
                <a href="#">
                    <li class="hover:underline transition-all duration-100 delay-75 ease-linear">
                        ABOUT US
                    </li>
                </a>
                <a href="#">
                    <li class="hover:underline transition-all duration-100 delay-75 ease-linear">
                        CONTACT US
                    </li>
                </a>
            </ul>
        </div>
        <div class="profile">
            <ul class="flex flex-row space-x-2">
                <li class="cursor-pointer">
                    <ion-icon name="cart"></ion-icon><sup>2</sup>
                </li>
                <li class="cursor-pointer">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </li>
                <li>
                    <ion-icon class="flex md:hidden" name="menu-outline" id="menuBtn"></ion-icon>
                </li>
            </ul>
        </div>
    </div>
    <section class="flex flex-col justify-center items-center space-y-10 p-10">
        <p class="font-semibold text-xl underline">Customer Feedback</p>
       
        <p>Please rate your experience from 0 to 10, 10 being the highest</p>
        <div class="flex space-x-1 md:space-x-2">
            <div class="bg-gray-500 w-[30px] h-[30px] md:w-[50px] md:h-[50px] rounded-full flex justify-center items-center">1</div>
            <div class="bg-gray-500 w-[30px] h-[30px] md:w-[50px] md:h-[50px] rounded-full flex justify-center items-center">2</div>
            <div class="bg-gray-500 w-[30px] h-[30px] md:w-[50px] md:h-[50px] rounded-full flex justify-center items-center">3</div>
            <div class="bg-gray-500 w-[30px] h-[30px] md:w-[50px] md:h-[50px] rounded-full flex justify-center items-center">4</div>
            <div class="bg-gray-500 w-[30px] h-[30px] md:w-[50px] md:h-[50px] rounded-full flex justify-center items-center">5</div>
            <div class="bg-gray-500 w-[30px] h-[30px] md:w-[50px] md:h-[50px] rounded-full flex justify-center items-center">6</div>
            <div class="bg-gray-500 w-[30px] h-[30px] md:w-[50px] md:h-[50px] rounded-full flex justify-center items-center">7</div>
            <div class="bg-gray-500 w-[30px] h-[30px] md:w-[50px] md:h-[50px] rounded-full flex justify-center items-center">8</div>
            <div class="bg-gray-500 w-[30px] h-[30px] md:w-[50px] md:h-[50px] rounded-full flex justify-center items-center">9</div>
            <div class="bg-gray-500 w-[30px] h-[30px] md:w-[50px] md:h-[50px] rounded-full flex justify-center items-center">10</div>
        </div>
        <p class="text-xl font-semibold mt-4">Please Share What Can Be Improved</p>
        <textarea name="advice" id="" placeholder="Write some advices..." class="border border-gray-600 w-[350px] md:w-[800px] h-[200px] p-3 mt-3"></textarea>
    </section>
    <div class="footer bg-blue-800 text-white py-3">
      <div
        class="px-5 flex flex-col md:flex-row justify-start items-start md:justify-between md:items-center mt-5"
      >
        <div class="flex flex-col px-10 md:px-0">
          <p>Quick Link</p>
          <ul>
            <a href="#">
              <li
                class="hover:underline transition-all duration-100 delay-75 ease-linear cursor-pointer"
              >
                About Us
              </li>
            </a>
            <a href="#">
              <li
                class="hover:underline transition-all duration-100 delay-75 ease-linear cursor-pointer"
              >
                Privacy & Policy
              </li>
            </a>
          </ul>
        </div>
        <hr class="w-[360px] md:hidden px-5 h-5 text-black text-center mt-4" />
        <div class="flex flex-col px-10 md:px-0">
          <p>Help</p>
          <ul>
            <a href="#">
              <li
                class="hover:underline transition-all duration-100 delay-75 ease-linear cursor-pointer"
              >
                Payment
              </li>
            </a>
            <a href="#">
              <li
                class="hover:underline transition-all duration-100 delay-75 ease-linear cursor-pointer"
              >
                FAQ
              </li>
            </a>
          </ul>
        </div>
        <hr class="w-[360px] md:hidden px-5 h-5 text-black text-center mt-4" />
        <div class="flex flex-col px-10 md:px-0">
          <p>Contact Us</p>
          <ul>
            <li class="cursor-pointer">
              <span><ion-icon name="phone-portrait-outline"></ion-icon></span
              >+95777777777
            </li>
            <li class="cursor-pointer">
              <span><ion-icon name="mail-outline"></ion-icon></span>
              megashopservice@gmail.com
            </li>
          </ul>
        </div>
      </div>
      <hr class="w-[360px] md:w-full px-5 h-5 text-black text-center mt-4" />
      <p class="text-center">©2023 MEGA SHOP All rights reserved.</p>
    </div>
</body>
</html>