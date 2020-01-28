<?php


class LineSearch
{
    public function search($array, $desiredItem): ?int
    {
        for($i = 0; $i < count($array); $i++) {
            if($array[$i] == $desiredItem) {
                return $i;
            }
        }
        return null;
    }
}
$array = [0, 5, 7, 10, 15];
$test = new LineSearch();
var_dump($test->search($array, 0));