<?php


class LineSearch
{
    public function lineSearchInArray(array $myArray, int $index): ?int
    {
        for ($i = 0; $i <= $index; $i++) {
            if ($i == $index) {
                return $index;
            } else {
               return $index += $i;
            }
        }
    }
}
$array = [0, 5, 7, 10, 15];
$test = new LineSearch();
var_dump($test->lineSearchInArray($array, 7));