<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEGA SHOP</title>

    <!-- <link rel="stylesheet" href="../resources/lib/tailwind/output.css"> -->
    <link href="../resources/lib/tailwind/output.css?id=<?= time() ?>" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&family=Wallpoet&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js%22%3E"></script>
    <link rel="stylesheet" href="../resources/css/home.css">
    <script src="../resources/lib/jquery3.6.0.js"></script>
    <?php 
        if($hasCssFile) {
            foreach ($cssFiles as $file) :
    ?>
        <link rel="stylesheet" href="../resources/css/<?= $file ?>.css">
    <?php  
            endforeach;
        } 
    ?>
    <?php 
        if($hasJsFile) {
            foreach ($jsFiles as $file) :
    ?>
        <script src="../resources/js/<?= $file ?>.js" defer></script>
    <?php  
            endforeach;
        } 
    ?>
    
</head>