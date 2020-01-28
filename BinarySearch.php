<?php

class BinarySearch
{
    function binarySearchInArray(array $sortArray, int $desiredItem, $leftSide = 0, $rightSide = null): ?int
    {
        if ($desiredItem > count($sortArray)) {
            return null;
        } elseif ($desiredItem < 0) {
            return null;
        }
        if ($rightSide == null) {
            $rightSide = count($sortArray) - 1;
        }
        if ($leftSide > $rightSide) {
            return null;
        }
        $midPoint = floor(($leftSide + $rightSide) / 2);
        if ($sortArray[$midPoint] == $desiredItem) {
            return $midPoint;
        } elseif ($sortArray[$midPoint] > $desiredItem) {
            return $this->binarySearchInArray($sortArray, $desiredItem, $leftSide, $midPoint -1 );
        } else {
            return $this->binarySearchInArray($sortArray, $desiredItem, $midPoint + 1, $rightSide);
            }
    }
}
$array = [1,2,3,4,5,6,7,8,9];
$test = new BinarySearch();
var_dump($test->binarySearchInArray($array, 5));
