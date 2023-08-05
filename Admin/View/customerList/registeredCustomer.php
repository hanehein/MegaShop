<?php
ini_set('display_errors', 1);
include "../../Controller/customerListController.php";

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
</head>

<body class="overflow-x-hidden ">
    <!-- main div -->
    <div class="min-h-screen flex   bg-black text-gray-800 relative ">
        <!-- dashboard div -->
        <?php
        include "../components/menu.php";
        ?>
        <!-- data display div -->
        <div class="w-5/6 flex flex-col  items-center justify-start bg-gray-200 space-y-5 font-['Poppins']  ">
            <div class="w-5/6 flex items-center justify-center h-20  space-x-80">
                <div class="w-32 h-10 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    <button>Registered Customers</button>
                </div>
                <div class="w-32 h-8 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    <input type="date" name="" id="" class=" text-xs bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                </div>
            </div>
            <div class="w-auto flex items-center justify-center bg-[#00336659] font-['Poppins'] rounded-md shadow-sm shadow-black ">
                <table cellspacing="" cellpadding="10" class=" w-auto table-fixed text-white text-center text-xs">
                    <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16 w-auto">
                        <tr>
                            <th>No.</th>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>Township</th>
                            <th>Address</th>
                            <th>Created Date</th>
                            <th>Promotions</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php

                        $count = 1;

                        foreach ($customerLists as $customer) {
                            # code...

                        ?>
                            <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td><?= $count++; ?></td>
                                <td>
                                    
                                    <img src="../resources/img/<?= $customer["cus_photo"]?>" width="100%" class="rounded-full w-10 h-10" alt="profile">
                                </td>
                                <td> <?= $customer["cus_name"] ?></td>
                                <td> <?= $customer["cus_email"] ?></td>
                                <td> <?= $customer["cus_phone"] ?></td>
                                <td> <?php
                                        if ($customer["gender"] == 0) echo "Male";
                                        else if ($customer["gender"] == 1) echo "Female";
                                        else echo "Other";
                                        ?></td>
                                <td> <?php if ($customer["township"] == 1) echo "Yankin";
                                        else if ($customer["township"] == 2) echo "Dagon";
                                        else echo "Kamayut"; ?></td>
                                <td> <?= $customer["cus_address"] ?></td>
                                <td> <?= $customer["create_date"] ?></td>
                                <td><a href="../../Controller/customerNotifyController.php?id=<?=$customer["id"]?>"><button class="w-16 py-1 rounded-md bg-[#003366] text-white text-xs hover:text-[#003366] hover:bg-white">Notify</button></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- pagination -->
            <div class="w-auto flex items-center justify-center h-10 mb-5 ">
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

                            