<?php
session_start();

include "../../Controller/supplierListController.php";

// print_r($supLists);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Supplier</title>
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
    <div class="min-h-screen flex text-gray-800">
        <!-- dashboard div -->
        <?php
        include "../components/menu.php";
        ?>
        <!-- data display div -->
        <div class="w-full flex flex-col  items-end justify-center bg-gray-200 space-y-5 font-['Poppins']">
            <div class="w-full flex items-center justify-center h-20  space-x-80">
                <div class="flex items-center justify-center space-x-3">
                    <a href="./approveList.php">
                        <div class="w-32 h-10 flex items-center justify-center bg-[#66CC33] text-white text-xs rounded-md font-semibold hover:text-[#66CC33] hover:bg-white">
                            <button>Approved</button>
                        </div>
                    </a>
                    <a href="./pendingList.php">
                        <div class="w-32 h-10 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
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
            <div class="w-auto flex items-center justify-center bg-[#00336659] font-['Poppins'] rounded-md shadow-sm shadow-black mr-3">
                <table cellspacing="10" cellpadding="15" class=" w-auto table-fixed text-white text-center text-xs">
                    <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16 w-auto">
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Shop Name</th>
                            <th>Shop Email</th>
                            <th>Plan</th>
                            <th>Township</th>
                            <th>View Count</th>
                            <th>Phone</th>
                            <th>Bank Account</th>
                            <th>Created Date</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php

                             $count = 1;

                            foreach ($supLists as $supplier) {
                                # code...
                            
                        ?>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td><?= $count++; ?></td>
                            <td>
                               <?= $supplier["sup_name"] ?>
                            </td>
                            <td> <?= $supplier["sup_shop_name"] ?></td>
                            <td> <?= $supplier["sup_email"] ?></td>
                            <td> <?php
                                if($supplier["pack_id"]==0) echo "Basic";
                                else if ($supplier["pack_id"]==1)echo "Silver";
                                else echo "Gold";
                            ?></td>
                            <td> <?= $supplier["township"] ?></td>
                            <td> <?= $supplier["view_count"] ?></td>
                            <td> <?= $supplier["sup_phone"] ?></td>
                            <th> <?= $supplier["bank_account"] ?></th>
                            <td> <?= $supplier["create_date"] ?></td>
                            <td><a href="../../Controller//supplierEditController.php?id=<?=$supplier["id"]?>"><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Edit</button></a></td>
                        </tr> 
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- pagination -->
            <div class="w-auto flex items-center justify-center h-10 mb-5 mr-3">
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

