<?php 
    function getpwd($size = 128){
        $character = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $randomString = "";
        for ($i = 0; $i < $size; $i++) {
            $index = rand(0,strlen($character) - 1);
            $randomString .= $character[$index];
        }
        return $randomString;
    }
?>