<?php

function getNumberFibonacci(int $number): ?array
{
    if ($number < 0) {
        return null;
    }
    $firstNumber = 0;
    $secondNumber = 1;
    $fibonacciNumber = [$firstNumber, $secondNumber];
    for ($i = 1; $i < $number; $i++) {
        $fibonacciNumber[] = $fibonacciNumber[$i] + $fibonacciNumber[$i - 1];
    }
    return $fibonacciNumber;
}

echo "<pre>";
var_dump(getNumberFibonacci(15));