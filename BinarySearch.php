<?php

class BinarySearch
{
    function binarySearchInArray(array $array, int $item, $start = 0, $end = null): int
    {
        if ($end == null) {
            $end = count($array) - 1;
        }
        if ($start > $end) {
            throw new LogicException('Item not found');
        }
        $halfIndex = ($start + $end) / 2;
        if ($array[$halfIndex] !== $item) {
            if ($array[$halfIndex] < $item) {
                $start = $halfIndex + 1;
            } else {
                $end = $halfIndex - 1;
            }
            return $this->binarySearchInArray($array, $item, $start, $end);
        }

        return $halfIndex;
    }
}
$array = [1];
$item = 1;
$test = new BinarySearch();
print_r($test->binarySearchInArray($array, $item));
