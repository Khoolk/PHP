<?php
//string
$file = "image";
$extension = ".png";
//format string using variable
$file_name = "$file$extension";
//concatenate using dot. operator
echo $file_name . "\n";
echo "File name is " . $file_name . "\n";
//strlen function measures string length
echo strlen($file_name) . "\n";
//substr function cut part of string & return it as new string
$type = substr($file_name, strlen($file_name)-3);
echo "File type is " . $type . "\n";
//explode function splits a string into an array, separated by separator
$alpha = "a,b,c,d";
$alpha_array = explode(",", $alpha);
echo $alpha_array[0] . "\n";
//implode function join an array into a string separated by comma,
$char_list = ["A","B","C"];
$char = implode(",", $char_list);
echo $char . "\n";
?>