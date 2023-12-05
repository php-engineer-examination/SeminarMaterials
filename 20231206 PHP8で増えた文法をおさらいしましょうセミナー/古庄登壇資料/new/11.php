<?php
/* 引数を展開した後の名前付き引数 */
declare(strict_types=1);
error_reporting(-1);

function func1(int $num, float $decimals, string $str)
{
    var_dump($num, $decimals, $str);
}
// これは PHP 8.0から可能
$awk = [];
$awk['str'] = 'string';
$awk['num'] = 123;
$awk['decimals'] = 3.14;
func1(...$awk);

// これが PHP 8.1から追加
// パラメタの一部を名前付き引数で指定する
$awk = [];
$awk['num'] = 123;
$awk['decimals'] = 3.14;
func1(...$awk, str: 'hogera');

// これはPHP 8.3までのいずれのバージョンでもFatal error(Uncaught Error: Named parameter $str overwrites previous argument in ...)
$awk = [];
$awk['str'] = 'string';
$awk['num'] = 123;
$awk['decimals'] = 3.14;
func1(...$awk, str: 'hogera');
