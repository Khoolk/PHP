<?php
//PHP array is ordered map, where all values have keys, and items in array preserve order
$list = [
    "a" => "11",
    "b" => "12",
    "c" => "13",
];
print_r($list);
echo $list["b"];
//add item using a key []
$list["d"] = 14;
//array_key_exists function check if a key is in array
if (array_key_exists("d", $list)) {
    echo "got " . $list["d"] . "\n";
} else {
    echo "no";
}
//array_keys function extract only the keys
print_r(array_keys($list));
//array_values function only get the values
print_r(array_values($list));