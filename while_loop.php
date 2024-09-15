<?php
//While loops are simple blocks that execute repeatedly until the condition is not met
//for loop iterate over an array or object, while loop execute unknown number of times depending on variable conditions
$counter = 0;
while ($counter < 10) {
    $counter += 1;
//break statement stops the loop in the middle of block
    if ($counter > 8) {
        echo "Larger than 8, stop \n";
        break;
    }
//continue statement returns to the top of the while loop (skip), re-checking if the condition is met
if ($counter % 2 == 0) {
    echo "Skip even number $counter \n";
    continue;
}
echo "Executing counter $counter \n";
}
?>