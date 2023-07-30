<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Supplier</title>
  <link rel="stylesheet" href="../View/resources/css/contact.css" defer />
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&family=Plus+Jakarta+Sans&family=Racing+Sans+One&display=swap" rel="stylesheet" />
</head>

<body class="overflow-x-hidden bg-gray-50 w-full">
  <?php include "../components/navbarForHome.php"; ?>
  <!--Start body-->
  <div class="hero md:px-20 px-0 flex flex-col justify-center items-center md:justify-start md:items-start">
    <p>Reachout and will get in touch within 24 hours.</p>
    <div class="box1 mt-2">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Email Address</label>
      <input type="email" id="email" name="email" class="bg-white-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg block w-[200px] p-2.5 placeholder-gray-400" placeholder="name@gmail.com" required />
    </div>
    <div class="box2 mt-2">
      <label for="phone number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Phone Number</label>
      <input type="text" id="phone" name="phone" class="bg-white-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg block w-[200px] p-2.5 placeholder-gray-400" placeholder="09-123456789" required />
    </div>
    <div class="box3 mt-2">
      <label for="order number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Order ID</label>
      <input type="text" id="order" name="order_num" class="bg-white-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg block w-[200px] p-2.5 placeholder-gray-400" placeholder="Order Number" required />
    </div>
    <div class="box4 mt-2">
      <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
        Subject</label>
      <input type="text" id="subject" name="subject" class="bg-white-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg block w-[200px] p-2.5 placeholder-gray-400" placeholder="Write your subject!" required />
    </div>
    <div class="box5 mt-2">
      <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
      <textarea id="description" name="description" class="bg-white-50 border cursor-pointer border-gray-300 text-gray-900 text-sm rounded-lg block w-[200px] h-[150px] md:w-[600px] md:h-[200px] p-2.5 placeholder-gray-400" placeholder="Description of question" required></textarea>
    </div>
  </div>
  <button class="bg-orange-500 hover:bg-gray-300 hover:text-black mt-3 w-[70px] p-1 rounded-md md:ml-[610px] ml-[210px] text-white mb-5 drop-shadow-lg">
    Send
    <ion-icon name="paper-plane-outline" class="hover:text-black"></ion-icon>
  </button>
  <!--Start footer-->
  <?php include "../components/footer.php"; ?>
</body>

</html>