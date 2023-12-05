<?php
/* 文字列をキーとして持つ配列のアンパック */
declare(strict_types=1);
error_reporting(-1);

// PHP 7.4からある配列のアンパック
$n_awk1 = [1, 2, 3];
$n_awk2 = [100 => 100, 101, 102];
$awk = [...$n_awk1, ...$n_awk2];
var_dump($n_awk1, $n_awk2, $awk);
// array(6) {
//   [0]=>
//   int(1)
//   [1]=>
//   int(2)
//   [2]=>
//   int(3)
//   [3]=>
//   int(100)
//   [4]=>
//   int(101)
//   [5]=>
//   int(102)
// }

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
// array(3) {
//   ["key1"]=>
//   string(1) "1"
//   ["key2"]=>
//   string(3) "222"
//   ["key3"]=>
//   string(2) "33"
// }
