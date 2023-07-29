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
</head>

<body class="overflow-x-hidden ">
    <!-- main div -->
    <div class="min-h-screen flex   bg-black text-gray-800 relative ">
        <!-- dashboard div -->
        <?php 
            include "../components/menu.php";
        ?>
        <!-- data display div -->
        <div class="w-full flex flex-col  items-center justify-start bg-gray-200 space-y-8 font-['Poppins'] ">
            <div class="w-full flex items-center justify-center h-20 bg-[#00336659] space-x-80">
                <div class="w-32 h-10 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    <button>Registered Customers</button>
                </div>
                <div class="w-32 h-8 flex items-center justify-center bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                    <input type="date" name="" id="" class=" text-xs bg-white text-[#003366] text-xs rounded-md font-semibold hover:text-white hover:bg-[#003366]">
                </div>
            </div>
            <div class="w-[45rem] h-[36rem] flex items-start justify-start bg-[#00336659] font-['Poppins'] rounded-md shadow-sm shadow-black">
                <table class=" w-[45rem] table-fixed border-collapse text-white text-center">
                    <thead class=" bg-[#00336661] text-white text-sm font-semibold h-16">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created Date</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <tr class="h-14 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>1</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>2</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>3</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>4</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>5</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>6</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>7</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>8</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            
                        </tr>
                        <tr class="h-12 border-b-2 border-b-white hover:bg-[#00336618]">
                            <td>9</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            
                        </tr>
                        <tr class="h-14 hover:bg-[#00336618]">
                            <td>10</td>
                            <td>Lily Deep</td>
                            <td>lilydeep@gmail.com</td>
                            <td>25 July,2023</td>
                            
                        </tr>
                    </tbody>
                </table>

            </div>
            <!-- pagination -->
            <?php 
                include "../components/pagination.php";
            ?>
        </div>
    </div>
</body>

</html>