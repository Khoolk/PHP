<?php
$list = [11,12,13,14,15];
//array_slice function returns a new array after discarding n element, can indicate slice length to take
print_r(array_slice($list, 2));
print_r(array_slice($list, 2, 2));
//array_splice function does the same, but it also remove slice from original array
print_r(array_splice($list, 2, 2));
print_r($list);