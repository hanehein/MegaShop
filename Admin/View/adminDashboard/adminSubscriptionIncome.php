<?php 
ini_set('display_errors', 1);
include "../../Controller/subscriptionEditController.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subscription income</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/income.css">
</head>

<body class="overflow-x-hidden ">
    <!-- main div -->
    <div class="min-h-screen flex  text-gray-800 relative ">
        <!-- dashboard div -->
        <?php
        include "../components/menu.php";
        ?>
        <!-- data display div -->
        <div class="w-5/6 flex flex-col  items-center justify-start bg-gray-200 space-y-5 font-['Poppins']">
            <div class="w-full flex items-center justify-center h-15 space-x-20 mt-5">
                <div class="flex items-center justify-center space-x-3">
                    <a href="./adminSubscriptionIncome.php">
                        <div class="w-32 h-10 flex items-center justify-center bg-[#66CC33] text-white text-xs rounded-md font-semibold hover:text-[#66CC33] hover:bg-white">
                            <button>Subscription</button>
                        </div>
                    </a>
                    <a href="./adminAdsIncome.php">
                        <div class="w-32 h-10 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                            <button>Advertisement</button>
                        </div>
                    </a>
                </div>
                <div class="w-auto h-8 flex items-center justify-center  text-[#003366] text-xs rounded-md">
                    <input type="text" id="search" name="" class="w-64 text-xs bg-white text-[#003366] rounded-l-md font-semibold  hover:bg-gray-200" placeholder="Type shop name to search">
                    <button class="w-12 py-[0.55rem] rounded-r-md bg-[#003366] text-white text-xs hover:text-white hover:bg-[#66CC33]"><ion-icon name="search" class="text-white"></ion-icon></button>
                </div>
                <div class="w-32 h-8 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    <input type="date" name="" id="" class=" text-xs bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                </div>
            </div>
            <!-- plan desc -->
            <div class="w-auto px-2 py-2 flex items-center justify-center space-x-10 h-8 bg-white rounded-md shadow-sm">
                <div class="flex items-center justify-center text-xs text-[#66CC33] font-semibold space-x-3">
                    <span>[Gold Plan</span>
                    <ion-icon name="chevron-forward-circle"></ion-icon>
                    <span>150,000 Ks/per one month]</span>
                </div>
                <div class="flex items-center justify-center text-xs text-[#66CC33] font-semibold space-x-3">
                    <span>[Silver Plan</span>
                    <ion-icon name="chevron-forward-circle"></ion-icon>
                    <span>100,000 Ks/per one month]</span>
                </div>
                <div class="flex items-center justify-center text-xs text-[#66CC33] font-semibold space-x-3">
                    <span>[Trial Plan</span>
                    <ion-icon name="chevron-forward-circle"></ion-icon>
                    <span>FOC for 5 days]</span>
                </div>
            </div>
            <div class="w-auto flex items-start justify-start bg-[#00336659] font-['Poppins'] rounded-md shadow-sm shadow-black">
                <table cellspacing="10" cellpadding="15" class=" w-auto table-fixed text-white text-center">
                    <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16">
                        <tr>
                            <th>Shop Name</th>
                            <th>Subscribed Plan</th>
                            <th>Duration</th>
                            <th>Payment</th>
                            <th>Activated Date</th>
                            <th>Expired Date</th>
                            <th>Edit</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class=" text-xs">
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>A</td>
                            <td>Silver</td>
                            <td>3 Months</td>
                            <td>300,000 Ks</td>
                            <th>25 July,2023</th>
                            <th>25 Oct,2023</th>
                            <td><a href="../../Controller/subscriptionEditController.php"><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
                            <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Remove</button></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- pagination -->
            <div class="w-auto flex items-start justify-center h-10 mb-5">
                <div class="w-5 h-6 flex items-center justify-center bg-[#003366] text-white text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>1</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>2</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>3</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>4</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>5</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>6</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>7</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>8</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>9</button></a>
                </div>
                <div class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold hover:text-white hover:bg-[#003366]">
                    <a href=""><button>10</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>