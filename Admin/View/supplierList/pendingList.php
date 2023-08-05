<?php 
session_start();

include "../../Controller/supplierPendingListController.php";


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pending suppliers </title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/supplier.css">
</head>

<body class="overflow-x-hidden ">
    <!-- main div -->
    <div class="min-h-screen flex   bg-black text-gray-800 relative ">
        <!-- dashboard div -->
        <?php
        include "../components/menu.php";
        ?>
        <!-- data display div -->
        <div class="w-5/6 flex flex-col  items-center justify-start bg-gray-200 space-y-5 font-['Poppins'] ">
            <div class=" flex items-center justify-center h-20  space-x-80">
                <div class="flex items-center justify-center space-x-3">
                    <a href="./approveList.php">
                        <div class="w-32 h-10 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                            <button>Approved</button>
                        </div>
                    </a>
                    <a href="./pendingList.php">
                        <div class="w-32 h-10 flex items-center justify-center bg-[#66CC33] text-white text-xs rounded-md font-semibold hover:text-[#66CC33] hover:bg-white">
                            <button>Pending</button>
                        </div>
                    </a>
                </div>
                <div class="flex items-center justify-center space-x-3">
                    <a href="./createSupplier.php">
                        <div class="w-32 h-10 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                            <button>Create Supplier Account</button>
                        </div>
                    </a>
                    <div class="w-32 h-10 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                        <input type="date" name="" id="" class="border-none text-xs bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    </div>
                </div>
            </div>
            <div class="w-auto h-auto flex items-center justify-center bg-[#00336659] font-['Poppins'] rounded-md shadow-sm shadow-black ">
                <table cellpadding="10" class="w-auto table-fixed border-collapse text-white text-center text-xs">
                    <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16">
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <td>Shop Name</td>
                            <th>Shop Email</th>
                            <th>Plan</th>
                            <th>Township</th>
                            <th>Phone</th>
                            <th>Bank Account</th>
                            <th>Created Date</th>
                            <th>Approve</th>
                            <th>Denied</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php 
                            $count = 1;
                            foreach ($supPendingLists as $pending ) {
                                
                            
                        ?>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td><?= $count++ ?></td>
                            <td><?= $pending["sup_name"] ?></td>
                            <td><?= $pending["sup_shop_name"] ?></td>
                            <td><?= $pending["sup_email"] ?></td>
                            <td>
                            <?php
                                if($pending["pack_id"]==0) echo "Basic";
                                else if ($pending["pack_id"]==1)echo "Silver";
                                else echo "Gold";
                            ?>
                            </td>
                            <td><?= $pending["township"] ?></td>
                            <td><?= $pending["sup_phone"] ?></td>
                            <th><?= $pending["bank_account"] ?></th>
                            <td><?= $pending["create_date"] ?></td>
                            <td><a href="../../Controller/approveController.php?id=<?=$pending["id"]?>"><button value="" class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Approve</button></a></td>
                            <td><a href="../../Controller/deniedController.php?id=<?=$pending["id"]?>"><button value="" class="w-16 py-1 rounded-md bg-gray-700 text-white text-xs hover:text-red-600 hover:bg-gray-700">Denied</button></a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- pagination -->
            <div class="w-auto flex items-start justify-center h-10 mb-5 ">
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