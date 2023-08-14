<?php

include '../../Controller/approvedProductsController.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pending list</title>
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../resources/css/product.css">
</head>

<body class="overflow-x-hidden ">
    <!-- main div -->
    <div class="min-h-screen flex   bg-black text-gray-800 relative ">
        <!-- dashboard div -->
        <div class="fixed flex flex-col top-0 left-0 w-64 bg-white h-full border-r ">
            <div class="flex justify-center items-center mt-3">
                <div class="font-['Wallpoet'] text-2xl text-[#024486] leading-none cursor-pointer">
                    <p class="">MEGA</p>
                    <p>SHOP</p>
                </div>
            </div>
            <!-- Menu -->
            <div class="overflow-y-auto overflow-x-hidden flex-grow font-['Poppins']">
                <!-- ul list -->
                <?php include '../components/menu.php';?>
            </div>
        </div>
        <!-- data display div -->
        <div class="w-full flex flex-col  items-center justify-start bg-gray-200 space-y-5 font-['Poppins'] ">
            <div class="w-full flex items-center justify-center h-20 bg-[#00336659] space-x-80">
                <div class="flex items-center justify-center space-x-3">
                    <div class="w-32 h-10 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                        <a href="./productLists.php"><button>Pending</button></a>
                    </div>
                    <div class="w-32 h-10 flex items-center justify-center bg-[#66CC33] text-white text-xs rounded-md font-semibold hover:text-[#66CC33] hover:bg-white">
                        <a href="./approvedProductLists.php"><button>Approved</button></a>
                    </div>
                </div>
                <select name="" id="" class="text-black px-5 font-semibold rounded-lg py-2">
                    <option value="">Title</option>
                    <option value="">Store</option>
                    <option value="">Category</option>
                    <option value="">Brand</option>
                    <option value="">Discount</option>
                    <option value="">Buy Price</option>
                    <option value="">Sell Price</option>
                    
                </select>
            </div>
            <div class="w-1/2 h-auto flex items-start justify-start bg-[#00336659] font-['Poppins'] rounded-md shadow-sm shadow-black">
                <table cellpadding="14" class="w-full table-auto border-collapse text-white text-center text-xs">
                    <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16">
                        <tr>
                        <th>No.</th>
                            <th>Title</th>
                            <th>Store</th>
                            <th>Category</th>
                            <th>Brand</th>
                            <th>Discount(%)</th>
                            <th>Buy Price</th>
                            <th>Selling Price</th>
                           
                            
                           
                        </tr>
                    </thead>
                    <tbody class="">
                    <?php $count = 0; ?>
                        <?php foreach ($result as $m_products) { ?>

                            <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                                <td><?php echo ++$count; ?></td>
                                <td>
                                    <div class="flex justify-evenly items-center">
                                        <img src="../<?php echo $m_products["p_photo1"]; ?>" class="w-1/4 rounded-lg h-1/2">
                                        <p><?php echo $m_products["p_name"]; ?></p>
                                    </div>
                                </td>
                                <td><?php echo $m_products["supplier_id"]; ?></td>

                                <td><?php echo $m_products["p_category"]; ?></td>
                                <td><?php echo $m_products["p_brand"]; ?></td>
                                <td><?php echo $m_products["p_discount"]; ?></td>
                                <td><?php echo $m_products["p_buy_price"]; ?></td>
                                <td><?php echo $m_products["p_sell_price"]; ?></td>
                                
                            </tr>
                        <?php } ?>
                        
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