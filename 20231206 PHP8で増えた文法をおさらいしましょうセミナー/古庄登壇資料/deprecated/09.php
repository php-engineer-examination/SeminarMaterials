<?php
/* ビットシフトや加算、減算に対する連結演算子の優先順位が変更されました */
declare(strict_types=1);
error_reporting(-1);

$i = 1;
$j = 2;

echo "add is " . $i + $j . "\n"; //PHP7までは、ここが「2」となる
echo "add is " . ($i + $j) . "\n"; // このように「括弧を付ける」と明示的に優先順位を指定できる
