<?php
//foreach loop iterates over an element, providing members in a specific variable one at a time
//get item from array directly into the variable using "as"
$numbers = [1,2,3];
foreach ($numbers as $number) {
    echo $number . "\n";
}
$fruits = [
    "kiwi" => "green",
    "apple" => "red",
];
foreach ($fruits as $fruit => $colour) {
    echo $fruit . " is " . $colour . "\n";
}
?>