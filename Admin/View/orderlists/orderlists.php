<?php

include '../../Controller/orderListsController.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Lists</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/order.css">
</head>

<body class="flex justify-center items-center overflow-x-hidden">
    <!-- sidebar -->
    <div class="w-1/3 min-h-screen flex flex-col flex-auto bg-gray-50 text-gray-800">
        <div class="fixed flex flex-col top-0 left-0 w-64 bg-white h-full border-r">
            <div class="flex justify-center items-center mt-3">
                <div class="font-['Wallpoet'] text-2xl text-[#024486] leading-none cursor-pointer">
                    <p class="">MEGA</p>
                    <p>SHOP</p>
                </div>
            </div>
            <!-- Menu -->
            <div class="overflow-y-auto overflow-x-hidden flex-grow font-['Poppins']">
                <!-- ul list -->
                <?php include '../components/menu.php'; ?>
            </div>
        </div>

        <div class="w-full flex flex-col  items-center justify-start bg-gray-200 space-y-8 font-['Poppins'] ">
            <div class="w-full flex items-center justify-center h-20 bg-[#00336659] space-x-80">

            </div>
            <div class="w-1/2 h-screen flex items-evenly justify-evenly bg-[#00336659] font-['Poppins'] rounded-md shadow-sm shadow-black mt-14">
                <table class=" w-full table-auto border-collapse text-white text-center">
                    <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16">
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Shop Name</th>
                            <th>Qty</th>
                            <th>Date</th>
                            <th>Payment Type</th>
                            <th>Total Amount</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php foreach ($orderlists as $order) { ?>
                            <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td>#<?php echo $order["order_id"]; ?></td>
                                <td><?php echo $order["cus_name"]; ?></td>
                                <td><?php echo $order["sup_name"]; ?></td>
                                <td><?php echo $order["total_quantity"]; ?></td>
                                <td><?php echo $order["create_date"]; ?></td>
                                <td>COD</td>
                                <td><?php echo $order["total_amount"]; ?> MMK</td>
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