<?php
ini_set('display_errors', 1);
include "../../Controller/subscriptionIncomeController.php";
$today = date("Y-m-d");
// print_r($subIncome);
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
    <link rel="stylesheet" href="../resources/css/active.css">
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <script src="../resources/js/subIncomeSearch.js" defer></script>
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
                </div>
                <div class="w-auto h-8 flex items-center justify-center  text-[#003366] text-xs rounded-md">
                    <input type="text" id="search" name="" class="w-64 text-xs bg-white text-[#003366] rounded-l-md font-semibold  hover:bg-gray-200" placeholder="Type shop name to search">
                    <button class="w-12 py-[0.55rem] rounded-r-md bg-[#003366] text-white text-xs hover:text-white hover:bg-[#66CC33]"><ion-icon name="search" class="text-white"></ion-icon></button>
                </div>
                <div class="w-32 h-8 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    <input type="date" name="" id="" value="<?php echo $today?>" class=" text-xs bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
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
                <table cellspacing="10" cellpadding="10" class=" w-auto table-fixed text-white text-center">
                    <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16">
                        <tr>
                            <th>No</th>
                            <th>Shop Name</th>
                            <th>Shop Email</th>
                            <th>Subscribed Plan</th>
                            <th>Duration</th>
                            <th>Bank Account</th>
                            <th>Total Amount</th>
                            <th>Activated Date</th>
                            <th>Expired Date</th>
                            <th>Edit</th>
                            <!-- <th>Remove</th> -->
                        </tr>
                    </thead>
                    <tbody class=" text-sm" id="searchResult">
                        <?php

                        $count = (($page - 1) * $rowLimits) + 1;

                        foreach ($subIncome as $income) {
                        ?>
                            <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td><?= $count++; ?></td>
                                <td><?= $income["sup_shop_name"] ?></td>
                                <td><?= $income["sup_email"] ?></td>
                                <td>
                                    <?php
                                    if ($income["pack_id"] == 0) echo "Basic";
                                    else if ($income["pack_id"] == 1) echo "Silver";
                                    else echo "Gold";
                                    ?></td>
                                </td>
                                <td><?= $income["pack_actual_duration"] ?> months</td>
                                <td><?= $income["bank_account"] ?></td>
                                <td><?php
                                    $period = $income["pack_actual_duration"];
                                    if ($income["pack_id"] == 1) {
                                        $totalAmt = $period * 100000;
                                        $numberFormat = number_format($totalAmt);
                                        echo $numberFormat;
                                    } else if ($income["pack_id"] == 2) {
                                        $totalAmt = $period * 150000;
                                        $numberFormat = number_format($totalAmt);
                                        echo $numberFormat;
                                    } else echo "0";
                                    ?>&nbsp;MMK</td>
                                <td><?= $income["create_date"] ?></td>
                                <td>
                                    <?php
                                    $createdDateString = $income["create_date"];
                                    $durationMonths = $income["pack_actual_duration"];
                                    $createdDate = new DateTime($createdDateString);
                                    // Calculate the expiration date
                                    $originalCreatedDate = clone $createdDate;
                                    $expiredDate = $originalCreatedDate->modify("+$durationMonths months");
                                    // Handle potential overflow from months to years
                                    while ($expiredDate < $originalCreatedDate) {
                                        $expiredDate->modify('+1 month');
                                    }
                                    $expiredFormatted = $expiredDate->format('Y-m-d');
                                    echo $expiredFormatted;
                                    ?>
                                </td>
                                <td><a href="../../Controller/subscriptionEditController.php?id=<?= $income["id"] ?>"><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
                                <!-- <td><a href=""><button class="w-16 py-1 rounded-md bg-red-600 text-white text-xs hover:text-red-600 hover:bg-gray-700">Remove</button></a></td> -->
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- pagination -->
            <div class="w-auto flex items-center justify-center h-10 mb-5 ">
                <ul class="w-auto flex items-center justify-center h-10 mb-5 ">
                    <li class="w-14 h-6 flex items-center justify-center bg-[#003366] text-white text-xs rounded-l-md font-semibold hover:text-white hover:bg-[#66CC33] enabled
                    <?php
                    if ($page <= 1) {
                        echo "pointer-events-none";
                    }
                    ?>
                    ">
                        <a href="?page=<?= $page - 1 ?>">Previous</a>
                    </li>
                    <?php
                    for ($i = 1; $i <= $pageList; $i++) { ?>
                        <li class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold  
                        <?php
                        if ($page == $i) {
                            echo "color";
                        }
                        ?> hover:text-white hover:bg-[#003366]">
                            <a href="?page=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php } ?>
                    <li class="w-14 h-6 flex items-center justify-center rounded-r-md bg-[#003366] text-white text-xs rounded-sm font-semibold hover:text-white hover:bg-[#66CC33]
                    <?php
                    if ($page >= $pageList) {
                        echo "pointer-events-none";
                    }
                    ?>
                    ">
                        <a href="?page=<?= $page + 1 ?>">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>


<!-- -->