<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Admin</title>
    <link rel="stylesheet" href="../View/resources/css/contact.css" defer />
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&family=Plus+Jakarta+Sans&family=Racing+Sans+One&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="overflow-x-hidden bg-gray-50 w-full">
    <div
      class="overflow-x-hidden header flex flex-row justify-between items-center bg-white py-5 px-5 text-blue-800"
    >
      <ion-icon
        id="close"
        name="close-outline"
        class="text-blue-800 md:hidden sm:flex text-4xl self-end"
      ></ion-icon>
      <div class="logoname font-wallpoet">Mega Shop</div>
      <div class="menu">
        <ul class="flex flex-col md:flex-row space-x-4 cursor-pointer">
          <a href="#"
            ><li
              class="hover:underline transition-all duration-100 delay-75 ease-linear"
            >
              HOME
            </li></a
          >
          <a href="#">
            <li
              class="hover:underline transition-all duration-100 delay-75 ease-linear"
            >
              PRODUCTS
            </li>
          </a>
          <a href="#">
            <li
              class="hover:underline transition-all duration-100 delay-75 ease-linear"
            >
              STORES
            </li>
          </a>
          <a href="#">
            <li
              class="hover:underline transition-all duration-100 delay-75 ease-linear"
            >
              ABOUT US
            </li>
          </a>
          <a href="#">
            <li
              class="hover:underline transition-all duration-100 delay-75 ease-linear"
            >
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
            <ion-icon
              class="flex md:hidden"
              name="menu-outline"
              id="menuBtn"
            ></ion-icon>
          </li>
        </ul>
      </div>
    </div>
    <div
      class="hero md:px-20 px-0 flex flex-col justify-center items-center md:justify-start md:items-start"
    >
      <p>Reachout and will get in touch within 24 hours.</p>
      <div class="box1 mt-2">
        <label
          for="name"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >
          Name</label
        >
        <input
          type="text"
          id="name"
          name="name"
          class="bg-white-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg block w-[200px] p-2.5 placeholder-gray-400"
          placeholder="Name"
          required
        />
      </div>
      <div class="box2 mt-2">
        <label
          for="email"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >
          Email Address</label
        >
        <input
          type="email"
          id="email"
          name="email"
          class="bg-white-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg block w-[200px] p-2.5 placeholder-gray-400"
          placeholder="name@gmail.com"
          required
        />
      </div>
      <div class="box3 mt-2">
        <label
          for="phone number"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >
          Phone Number</label
        >
        <input
          type="text"
          id="phone"
          name="phone"
          class="bg-white-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg block w-[200px] p-2.5 placeholder-gray-400"
          placeholder="09-123456789"
          required
        />
      </div>
      <div class="box4 mt-2">
        <label
          for="message"
          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
          >Message</label
        >
        <textarea
          id="message"
          name="message"
          class="bg-white-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg block w-[200px] h-[150px] md:w-[600px] md:h-[200px] p-2.5 placeholder-gray-400"
          placeholder="Write Your Messsage."
          required
        ></textarea>
      </div>
    </div>
    <button
      class="bg-orange-500 mt-3 w-[70px] p-1 rounded-md md:ml-[610px] ml-[210px] text-white mb-5 drop-shadow-lg"
    >
      Send
      <span
        ><ion-icon
          class="transform rotate-45 text-white"
          name="send-outline"
        ></ion-icon
      ></span>
    </button>
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
