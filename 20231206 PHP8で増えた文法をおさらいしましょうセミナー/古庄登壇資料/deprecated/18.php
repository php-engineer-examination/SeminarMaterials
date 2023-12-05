<?php
/* 暗黙の float から int への変換 */
// declare(strict_types=1); // 引数の「型の自動変換」をさせたいのでコメントアウト
error_reporting(-1);

// 
function hoge(int $num)
{
    var_dump($num);
}
//
hoge(3.14);

// 配列
$awk = [];
$awk[1.0] = 123; // こちらは問題ない
$awk[1.123] = 456; // こちらはPHP 8.1以降 Deprecated が出る
