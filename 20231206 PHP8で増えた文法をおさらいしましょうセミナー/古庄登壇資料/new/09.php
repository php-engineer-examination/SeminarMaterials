<?php
/* 8進数の整数リテラルのプレフィックス指定 */
declare(strict_types=1);
error_reporting(-1);

// 10進数
$i = 123;
var_dump($i);
$i = 12_345;
var_dump($i);
echo "\n";

// 16進数
$hex = 0x20;
var_dump($hex);
$hex = 0Xaa;
var_dump($hex);
$hex = 0XFF;
var_dump($hex);
echo "\n";

// 8進数
$oct = 0755;
var_dump($oct);
$oct = 0o755; // PHP 8.1で追加された書式
var_dump($oct);
$oct = 0O755; // PHP 8.1で追加された書式
var_dump($oct);
echo "\n";

// 2進数
$bin = 0b11110000;
var_dump($bin);
$bin = 0B00001111;
var_dump($bin);
echo "\n";
