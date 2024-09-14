<?php
//multidimensional array may contain an array as a value for a specific index
$multiarray = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
    ];
//print the array by index
print_r($multiarray[0]);
//get value from inner array
print_r($multiarray[1][1] . "\n");
//sum all value of inner array
echo "Inner sum is \n";
foreach($multiarray as $numbers) {
    $sum = 0;
    foreach($numbers as $number) {
        $sum += $number;
    }
echo "{$sum}\n";
}
//associative dimensional array
$fruit = [
    "kiwi" => [
        "name" => "Kiwi",
        "colour" => "green",
        "price" => 2,
    ],
    "apple" => [
        "name" => "Apple",
        "colour" => "red",
        "price" => 3,
    ]
    ];
print_r("Kiwi price is " . $fruit['kiwi']['price'] . "\n");
?>