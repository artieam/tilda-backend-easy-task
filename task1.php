<?php

$minValue = 1;
$maxValue = 400;
$range = range($minValue, $maxValue);
$slice = [0];

for ($i = $minValue; $i <= $maxValue; $i++) {
    $slice = array_slice($range, max($slice), $i);
    if (!$slice) {
        break;
    }
    echo implode(' ', $slice), PHP_EOL;
}