<?php

$array = [1,4,8,13,5,6,2,67,88,65,100,34,22,45,33,35];
quickSort($array);
function quickSort(&$array) {

    $left = 0;
    $right = count($array) - 1;
    my_sort($array, $left, $right);
}
function my_sort(&$array, $left, $right) {
    $copyLeft = $left;
    $copyRight = $right;
    $midPoint = $array[(int)($left + $right) / 2];
    do {
        while ($array[$copyRight] > $midPoint) {
            $copyRight--;
        }
        while ($array[$copyLeft] < $midPoint) {
            $copyLeft++;
        }
        if ($copyLeft <= $copyRight) {
            list($array[$copyRight], $array[$copyLeft]) = array($array[$copyLeft], $array[$copyRight]);
            $copyLeft++;
            $copyRight--;
        }
    } while ($copyLeft <= $copyRight);
    if ($copyRight > $left) {
        my_sort($array, $left, $copyRight);
    }
    if ($copyLeft < $right) {
        my_sort($array, $copyLeft, $right);
    }
}
print_r($array);