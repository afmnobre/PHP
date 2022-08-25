<?php

echo "Your task is to make a function that can take any non-negative integer as an argument and return it with its digits in descending order. Essentially, rearrange the digits to create the highest possible number.</h2>";
echo "<p>";
echo "Examples:";
echo "Input: 42145 Output: 54421";
echo "<br>";
echo "Input: 145263 Output: 654321";
echo "<br>";
echo "Input: 123456789 Output: 987654321";
echo "<p>";

function descendingOrder(int $n): int {
    $order = 0;
    $result = 0;
    $integer = str_split($n);
    arsort($integer);
    foreach($integer as $order){
        $result .= $order;
    }
    return $result;
}

echo descendingOrder(0)."<br>";
echo descendingOrder(1)."<br>";
echo descendingOrder(15)."<br>";
echo descendingOrder(1021)."<br>";
echo descendingOrder(123456789)."<br>";