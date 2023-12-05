<?php
/* 名前付き引数 */
declare(strict_types=1);
error_reporting(-1);

function hoge(string $key, string $value, int $num)
{
    echo "key: {$key}, value:{$value}, num:{$num}\n";
}
// 通常の呼び方
hoge('key', 'val', 123);
// 名前付き
hoge(num: 456, key: 'key2', value: 'val2');
