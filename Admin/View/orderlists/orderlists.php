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
        <!-- nav -->
        <div class="w-full h-auto flex justify-center items-center bg-[#003366] px-5 py-5 ml-64">
            <input type="text" class="w-1/3 mx-auto py-2 rounded-lg" placeholder="Search">
            <p class="text-lg font-semibold text-white mx-auto">
                28 July 2023
            </p>

        </div>

        <div class="w-full flex flex-col  items-center justify-start bg-gray-200 space-y-8 font-['Poppins'] ">
            <div class="w-full flex items-center justify-center h-20 bg-[#00336659] space-x-80">
                Order by
                <select name="" id="" class="text-black px-5 font-semibold rounded-lg py-2">
                    <option value="">Order ID</option>
                    <option value="">Product Name</option>
                    <option value="">Qty</option>
                    <option value="">Price Per Item</option>
                    <option value="">Discount</option>
                    <option value="">Date</option>
                    <option value="">Total Price</option>
                    
                </select>
                <div class="w-32 h-8 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    <input type="text" name="" id="" class="text-xs bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white" placeholder="Search by ID Number ">

                </div>
            </div>
            <div class="w-1/2 h-auto flex items-evenly justify-evenly bg-[#00336659] font-['Poppins'] rounded-md shadow-sm shadow-black">
                <table class=" w-full table-auto border-collapse text-white text-center">
                    <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16">
                        <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th>Qty</th>
                            <th>Price Per Item</th>
                            <th>Discount</th>
                            <th>Date</th>
                            <th>Delivery</th>
                            <th>Total Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>#112233</td>
                            <td>Instant Coffee Mix</td>
                            <td>3</td>
                            <td>15,000 MMK</td>
                            <td>5%</td>
                            <td>09:34 pm, 09 Jun, 2023</td>
                            <td>COD</td>
                            <td>42,750 MMK</td>

                            
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>#112233</td>
                            <td>Instant Coffee Mix</td>
                            <td>3</td>
                            <td>15,000 MMK</td>
                            <td>5%</td>
                            <td>09:34 pm, 09 Jun, 2023</td>
                            <td>COD</td>
                            <td>42,750 MMK</td>

                           
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>#112233</td>
                            <td>Instant Coffee Mix</td>
                            <td>3</td>
                            <td>15,000 MMK</td>
                            <td>5%</td>
                            <td>09:34 pm, 09 Jun, 2023</td>
                            <td>COD</td>
                            <td>42,750 MMK</td>

                          
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>#112233</td>
                            <td>Instant Coffee Mix</td>
                            <td>3</td>
                            <td>15,000 MMK</td>
                            <td>5%</td>
                            <td>09:34 pm, 09 Jun, 2023</td>
                            <td>COD</td>
                            <td>42,750 MMK</td>

                           
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>#112233</td>
                            <td>Instant Coffee Mix</td>
                            <td>3</td>
                            <td>15,000 MMK</td>
                            <td>5%</td>
                            <td>09:34 pm, 09 Jun, 2023</td>
                            <td>COD</td>
                            <td>42,750 MMK</td>

                           
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>#112233</td>
                            <td>Instant Coffee Mix</td>
                            <td>3</td>
                            <td>15,000 MMK</td>
                            <td>5%</td>
                            <td>09:34 pm, 09 Jun, 2023</td>
                            <td>COD</td>
                            <td>42,750 MMK</td>

                           
                        </tr>
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>#112233</td>
                            <td>Instant Coffee Mix</td>
                            <td>3</td>
                            <td>15,000 MMK</td>
                            <td>5%</td>
                            <td>09:34 pm, 09 Jun, 2023</td>
                            <td>COD</td>
                            <td>42,750 MMK</td>

                           
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