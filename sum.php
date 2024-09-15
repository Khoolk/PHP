<?php
//function is code block to call from anywhere
//Library function is part of PHP Library and can be used by everyone (eg. array_push)
//Can write own function to use acroos code, arguments become variable inside function block, but are not defined outside function block
function sum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}
//sum function is loaded and used in another file (function.php)
?>
