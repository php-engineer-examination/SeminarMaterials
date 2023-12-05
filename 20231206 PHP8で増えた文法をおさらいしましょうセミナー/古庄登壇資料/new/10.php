<?php
/* 文字列をキーとして持つ配列のアンパック */
declare(strict_types=1);
error_reporting(-1);

// PHP 7.4からある配列のアンパック
$n_awk1 = [1, 2, 3];
$n_awk2 = [100 => 100, 101, 102];
$awk = [...$n_awk1, ...$n_awk2];
var_dump($n_awk1, $n_awk2, $awk);

// PHP 8.1で追加された文字キー配列のアンパック
$k_awk1 = [
    'key1' => '1',
    'key2' => '2',
];
$k_awk2 = [
    'key2' => '222',
    'key3' => '33',
];
$awk = [...$k_awk1, ...$k_awk2];
var_dump($awk);
