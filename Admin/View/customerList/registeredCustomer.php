<?php
ini_set('display_errors', 1);
include "../../Controller/customerListController.php";
$today = date("Y-m-d");
// print_r($customerLists);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CustomerLists</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/customer.css">
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <script src="../resources/js/searchCustomer.js" defer></script>
</head>

<body class="overflow-x-hidden ">
    <!-- main div -->
    <!-- <a href="../../Controller/searchCustomerController.php"></a> -->
    <div class="min-h-screen flex text-gray-800 relative ">
        <!-- dashboard div -->
        <?php
        include "../components/menu.php";
        ?>
        <!-- data display div -->
        <div class="w-5/6 flex flex-col  items-center justify-start bg-gray-200 space-y-5 font-['Poppins']  ">
            <div class="w-5/6 flex items-center justify-center h-14  space-x-20">
                <div class="w-32 h-10 flex items-center justify-center bg-[#003366] text-white text-xs rounded-md font-semibold hover:text-[#003366] hover:bg-white">
                    <button>Registered Customers</button>
                </div>
                <div class="w-auto h-8 flex items-center justify-center  text-[#003366] text-xs rounded-md">
                    <input type="text" id="search" name="" class="w-64 text-xs bg-white text-[#003366] rounded-l-md font-semibold  hover:bg-gray-200" placeholder="Type customer name to search">
                    <button class="w-12 py-[0.55rem] rounded-r-md bg-[#003366] text-white text-xs hover:text-white hover:bg-[#66CC33]"><ion-icon name="search" class="text-white"></ion-icon></button>
                </div>
                <div class="w-32 h-8 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    <input type="date" name="" id="" value="<?= $today ?>" class=" text-xs bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                </div>
            </div>
            <div class="w-auto flex items-center justify-center bg-[#00336659] font-['Poppins'] rounded-md shadow-sm shadow-black ">
                <table cellspacing="" cellpadding="8" class="w-auto table-fixed text-white text-center text-xs">
                    <thead class=" bg-[#00336661] text-white text-sm font-semibold h-14 w-auto">
                        <tr>
                            <th>No.</th>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <!-- <th>Region</th>
                            <th>Township</th> -->
                            <th>Created Date</th>
                            <th>Promotions</th>
                        </tr>
                    </thead>
                    <tbody id="searchResult">
                        <?php

                        $count = (($page - 1) * $rowLimits) + 1;

                        foreach ($customerLists as $customer) {
                        ?>
                            <tr class="h-10 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td><?= $count++; ?></td>
                                <td>
                                    <img src="../<?= $customer["cus_photo"] ?>" width="100%" class="rounded-full w-10 h-10" alt="profile">
                                </td>
                                <td> <?= $customer["cus_name"] ?></td>
                                <td> <?= $customer["cus_email"] ?></td>
                                <td> <?= $customer["cus_phone"] ?></td>
                                <td> <?php
                                        if ($customer["gender"] == 0) echo "Male";
                                        else if ($customer["gender"] == 1) echo "Female";
                                        else echo "Other";
                                        ?></td>
                                <!--  -->
                                <td> <?= $customer["create_date"] ?></td>
                                <td><a href="../../Controller/customerNotifyController.php?id=<?= $customer["customer_id"] ?>"><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-white hover:bg-[#66CC33]">Notify</button></a></td>
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
                        <li class="w-5 h-6 flex items-center justify-center bg-white text-[#003366] text-xs rounded-sm font-semibold active:bg-[#66CC33]  
                        <?php
                        if ($page == $i) {
                            echo "active";
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

<!-- else if ($customer["region_id"] == 2) echo "Kayah State";
                                        else if ($customer["region_id"] == 3) echo "Kayin State
                                        ";
                                        else if ($customer["region_id"] == 4) echo "Chin State";
                                        else if ($customer["region_id"] == 5) echo "Sagaing Region";
                                        else if ($customer["region_id"] == 6) echo "Tanintharyi Region";
                                        else if ($customer["region_id"] == 7) echo "Bago Region";
                                        else if ($customer["region_id"] == 8) echo "Mon State";
                                        else if ($customer["region_id"] == 9) echo "Magway Region";
                                        else if ($customer["region_id"] == 10) echo "Mandalay Region";
                                        else if ($customer["region_id"] == 11) echo "Shan State";
                                        else if ($customer["region_id"] == 12) echo "Yangon Region";
                                        else if ($customer["region_id"] == 13) echo "Rakhine State";
                                        else if ($customer["region_id"] == 14) echo "Ayeyarwady Region";
                                        else echo "Naypyidaw Union Territory";  -->