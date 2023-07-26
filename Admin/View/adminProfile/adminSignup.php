<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="overflow-x-hidden bg-black">
    <!-- main div -->
    <div class="w-auto h-screen container flex mx-auto justify-center items-center">
      <!-- inner container -->
      <div
        class="md:w-[30rem] w-[18rem] container mx-auto flex-col items-center justify-center bg-[#2A2A2A] rounded-md"
      >
        <!-- logo section -->
        <div class="flex space-x-1.5 items-center justify-center">
          <div>
            <ion-icon
              name="game-controller"
              size="large"
              class="text-white pt-5"
            ></ion-icon>
          </div>
          <div class="text-white text-9xl">
            <p class="text-lg font-['Iceberg']">MAX</p>
            <p class="text-sm font-['Iceberg'] leading-[8px]">Gaming Store</p>
          </div>
        </div>
        <!-- Inner Container section -->
        <div class="container md:w-[25rem] mx-auto font-['Inter']  flex-col justify-center items-center py-5">
          <!-- Sign up section -->
          <p class="text-white text-[22px] font-bold text-center ">Sign Up </p>
          <!-- username -->
          <div
            class="md:w-[18rem] w-[16rem] bg-[#2A2A2A] border border-white rounded-[5px] mx-auto mt-4 flex py-1.5 px-4 space-x-5 justify-center items-center"
          >
            <ion-icon name="person" class="text-[#A19393]"></ion-icon>
            <input type="text" name="" id="name" placeholder="Username"
            class="text-sm bg-[#2A2A2A] focus:outline-none text-white">
          </div>
          <!-- email -->
          <div
            class="md:w-[18rem] w-[16rem] bg-[#2A2A2A] border border-white rounded-[5px] mx-auto mt-7 flex py-1.5 px-4 space-x-5 justify-center items-center"
          >
            <ion-icon name="mail" class="text-[#A19393]"></ion-icon>
            <input
              type="email"
              name=""
              id="email"
              placeholder="Email Address"
              class="text-sm bg-[#2A2A2A] focus:outline-none text-white"
            />
          </div>
          <!-- password -->
          <div
            class="md:w-[18rem] w-[16rem] bg-[#2A2A2A] border border-white rounded-[5px] mx-auto mt-7 flex py-1.5 px-4 space-x-5 justify-center items-center"
          >
          <ion-icon name="lock-closed" class="text-[#A19393]"></ion-icon>
          <input
              type="password"
              name=""
              id="password"
              placeholder="Password"
              class="text-sm bg-[#2A2A2A] focus:outline-none text-white"
            />
          </div>
          <!-- confirm password -->
          <div
            class="md:w-[18rem] w-[16rem] bg-[#2A2A2A] border border-white rounded-[5px] mx-auto mt-7 flex py-1.5 px-4 space-x-5 justify-center items-center"
          >
          <ion-icon name="lock-closed" class="text-[#A19393]"></ion-icon>
          <input
              type="password"
              name=""
              id="password"
              placeholder="Confirm Password"
              class="text-sm bg-[#2A2A2A] focus:outline-none text-white"
            />
          </div>
          <!-- login -->
          <div
            class="md:w-[18rem] w-[16rem] bg-blue-500 rounded-[8px] mx-auto mt-8 flex py-2 justify-center items-center"
          >
            <p class="text-[16px] text-white font-semibold">REGISTER NOW</p>
          </div>
          <p class="mt-10 text-center text-white text-sm underline font-semibold">Privacy Policy</p>
          <p class="mt-4 text-center text-white text-[13px]">Already have an account?<span class="underline text-[12px]">  Sign In</span></p>
        </div>
      </div>
    </div>
</body>

</html>