<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat box</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </head>
  <body class="bg-[#F6F6F6]">
    <div class="container mx-auto shadow-lg rounded-lg">
      <div class="sm:block md:flex flex-row justify-between">
        <!--Start leftside-->
        <div class="sm:block sm:w-full md:flex flex-col md:w-2/6 border-r-2">
          <!--Start searchbox-->
          <div class="border-b-2 py-[26px] px-2 flex">
            <input
              type="text"
              name="search"
              id=""
              class="md:w-48 w-40 h-[25px] p-2 text-sm border-blue-800 border-2 bg-white rounded-l-md"
              placeholder="Search here..."
            />
            <span
              class="bg-blue-800 w-7 h-[25px] flex items-center rounded-r-md"
            >
              <ion-icon name="search" class="text-white"></ion-icon>
            </span>
          </div>
          <!--End searchbox-->
          <!-- user list -->
          <div
            class="flex flex-row py-4 px-2 justify-center items-center border-b-2"
          >
            <!--box1-->
            <div
              class="w-[390px] h-[80px] hover:scale-95 bg-white flex space-x-3 border-2 hover:drop-shadow-md p-3"
            >
              <img
                src="../resources/img/flower.jpg"
                alt=""
                class="w-[60px] h-[60px]"
              />
              <div class="flex flex-col">
                <p class="font-semibold text-xl text-blue-800">Trendy Tread</p>
                <p>216 followers</p>
              </div>
            </div>
          </div>
          <!--End box1-->
          <div
            class="flex flex-row py-4 px-2 justify-center items-center border-b-2"
          >
            <!--box2-->
            <div
              class="w-[390px] h-[80px] hover:scale-95 bg-white flex space-x-3 border-2 hover:drop-shadow-md p-3"
            >
              <img
                src="../resources/img/flower.jpg"
                alt=""
                class="w-[60px] h-[60px]"
              />
              <div class="flex flex-col">
                <p class="font-semibold text-xl text-blue-800">GO DEAL</p>
                <p>26 followers</p>
              </div>
            </div>
          </div>
          <!--End box2-->
          <div
            class="flex flex-row py-4 px-2 justify-center items-center border-b-2"
          >
            <!--box3-->
            <div
              class="w-[390px] h-[80px] hover:scale-95 bg-white flex space-x-3 border-2 hover:drop-shadow-md p-3"
            >
              <img
                src="../resources/img/flower.jpg"
                alt=""
                class="w-[60px] h-[60px]"
              />
              <div class="flex flex-col">
                <p class="font-semibold text-xl text-blue-800">Easy Buy</p>
                <p>36 followers</p>
              </div>
            </div>
          </div>
          <!--End box3-->
          <div
            class="flex flex-row py-4 px-2 justify-center items-center border-b-2"
          >
            <!--box4-->
            <div
              class="w-[390px] h-[80px] hover:scale-95 bg-white flex space-x-3 border-2 hover:drop-shadow-md p-3"
            >
              <img
                src="../resources/img/flower.jpg"
                alt=""
                class="w-[60px] h-[60px]"
              />
              <div class="flex flex-col">
                <p class="font-semibold text-xl text-blue-800">Smart Store</p>
                <p>436 followers</p>
              </div>
            </div>
          </div>
          <!--End box4-->
          <div
            class="flex flex-row py-4 px-2 justify-center items-center border-b-2"
          >
            <!--box5-->
            <div
              class="w-[390px] h-[80px] hover:scale-95 bg-white flex space-x-3 border-2 hover:drop-shadow-md p-3"
            >
              <img
                src="../resources/img/flower.jpg"
                alt=""
                class="w-[60px] h-[60px]"
              />
              <div class="flex flex-col">
                <p class="font-semibold text-xl text-blue-800">Success Store</p>
                <p>456 followers</p>
              </div>
            </div>
          </div>
          <!--End box5-->
        </div>

        <!--End chat lists-->
        <div class="w-full flex flex-col justify-between">
          <div class="flex flex-col border-b-2 sm:border-blue-600 w-auto">
            <!--Start chatname-->
            <div class="flex flex-row py-2 px-2 items-center">
              <div class="flex items-center space-x-2">
                <img
                  src="../resources/img/flower.jpg"
                  alt=""
                  class="w-[60px] h-[60px]"
                />
                <p class="font-semibold text-xl text-blue-800">Trendy Tread</p>
              </div>
            </div>
          </div>
          <!--End chatname-->
          <div class="flex justify-end mb-1 pr-5 mt-3">
            <!--chat1-->
            <div class="flex flex-col">
              <div
                class="ml-2 py-3 px-4 sm:w-[135px] md:w-[150px] bg-gray-400 rounded-bl-3xl rounded-tl-3xl rounded-br-xl text-white"
              >
                Hello
              </div>
              <p class="text-xs text-gray-600 flex justify-end">10:36 pm</p>
            </div>
          </div>
          <!--chat1-->
          <div class="flex justify-end mb-4 pr-5">
            <!--chat2-->
            <div class="flex flex-col">
              <div
                class="ml-2 py-3 px-4 sm:w-[280px] md:w-[400px] bg-gray-400 rounded-bl-3xl rounded-tl-3xl rounded-br-xl text-white"
              >
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
              <div
                class="ml-2 py-3 px-4 sm:w-[280px] md:w-[400px] bg-gray-400 rounded-tl-3xl rounded-tr-3xl rounded-br-xl text-white"
              >
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
            <ion-icon
              name="add-circle"
              class="text-blue-800 text-[50px]"
            ></ion-icon>
            <!--textbox-->
            <input
              type="text"
              placeholder="Write message ........"
              class="text-blue-800 border p-3 rounded-md w-[550px]"
            />
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
