<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Welcome Page</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-14">
                <span class="mb-3 text-4xl font-bold text-[#002D74]">MEGA SHOP</span>
                <span class="font-light text-[#002D74] mb-8">
                    Stay Comfortable  Trade Smart
                </span>

                <div class="text-center text-[#002D74] my-5">
                    Are you
                </div>

                <button
                    class="w-full bg-[#002D74] text-white p-2 rounded-lg mb-6 hover:bg-blue-300 hover:text-[#002D74] hover:border hover:border-gray-300">
                    Customer
                </button>

                <div class="text-center font-bold text-xl text-[#002D74]">
                    OR
                  </div>
                
                <div class="text-center text-[#002D74] my-5">
                    Are you
                </div>

                <button
                    class="w-full bg-[#002D74] text-white p-2 rounded-lg mb-6 hover:bg-blue-300 hover:text-[#002D74] hover:border hover:border-gray-300">
                    Supplier
                </button>

            </div>
            <!-- {/* right side */} -->
            <div class="relative">
                <img src="../resources/img/wel2.jpg" alt="img" class="w-auto h-full hidden rounded-2xl md:block object-cover" 
                 />
                
            </div>
        </div>
    </div>
</body>

</html>

<?php $_SESSION["loginerror"] = "" ?>