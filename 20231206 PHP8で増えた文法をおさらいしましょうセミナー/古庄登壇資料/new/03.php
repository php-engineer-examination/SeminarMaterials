<?php
/* union 型 */
declare(strict_types=1);
error_reporting(-1);

function hoge(int|float|string $v): void
{
    var_dump($v);
}
hoge(1);
hoge(3.14);
hoge('str');

// この2つはエラー
// hoge(false);
// hoge(null);

// 数値(int または float)は、本当によく使います
function add(int|float $i, int|float $j): int|float
{
    return $i + $j;
}
var_dump( add(1, 2) );
var_dump( add(1, 3.14) );
