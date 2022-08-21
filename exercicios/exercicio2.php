<?php

function highAndLow($numbers)
{
  $num = explode(" ", $numbers);
    $max = max($num);
    $min = min($num);
  return $max." ".$min;
}

highAndLow("8 3 -5 42 -1 0 0 -9 4 7 4 -4");
highAndLow("1 2 3");