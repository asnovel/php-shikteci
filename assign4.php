<?php
//Problem 02: Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
function concatenation($a,$b){
    $c=$a.$b;
    echo $c;
}
$a="Foot";
$b="ball";
concatenation($a,$b);
//Problem 03: Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
function remove1stAndLast($array){
array_shift($array);
array_pop($array);
$newArray=$array;
return $newArray;
}
 $array=['rahim','karim','hira','bossi'];
 $newArray=remove1stAndLast($array);
 print_r($newArray);

//problem 04: Write a PHP function to check if a string contains only letters and whitespace.
function containsOnlyLettersAndWhitespace($str) {
    return preg_match('/^[a-zA-Z\]+$/', $str);
}
