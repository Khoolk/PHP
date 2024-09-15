<?php
//for loop iterate over an array & refer to member of array using changing index
//initialize iterator variable $i = 0
//loop stops when condition is unmet
//increment statement is excuted in every iteration to increase index variable
$numbers = [1,2,3,4,5];
for ($i = 0; $i < count($numbers); $i++) {
    $number = $numbers[$i];
    echo $number . "\n";
}
?>