<?php

$lineCnt = 5; // кол-во строк
$columnCnt = 7; // кол-во столбцов
$result = $sumByLine = $sumByColumn = [];
$numbers = range(1, 1000);
shuffle($numbers);

for ($i = 0; $i < $lineCnt; $i++) {
    for ($j = 0; $j < $columnCnt; $j++) {
        $result[$i][$j] = $val = array_shift($numbers);
        $sumByLine[$i] = $sumByLine[$i] + $val;
        $sumByColumn[$j] = $sumByColumn[$j] + $val;
    }
}

echo "Массив:\n";
print_r($result);

echo "Массив сумм по строкам:\n";
print_r($sumByLine);

echo "Массив сумм по колонкам:\n";
print_r($sumByColumn);
