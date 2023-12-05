<?php
/* str_contains(), str_starts_with(), str_ends_with() が追加されました */
declare(strict_types=1);
error_reporting(-1);

$haystack = 'abcdefg';

// 文字列が指定された部分文字列で始まるかを調べる
$b = str_starts_with($haystack, 'ab');
var_dump($b);
$b = str_starts_with($haystack, 'bc');
var_dump($b);
$b = str_starts_with($haystack, 'fg');
var_dump($b);
// bool(true)
// bool(false)
// bool(false)
echo "\n";

// 指定された部分文字列が、文字列に含まれるかを調べる
$b = str_contains($haystack, 'ab');
var_dump($b);
$b = str_contains($haystack, 'bc');
var_dump($b);
$b = str_contains($haystack, 'fg');
var_dump($b);
// bool(true)
// bool(true)
// bool(true)
echo "\n";

// 文字列が、指定された文字列で終わるかを調べる
$b = str_ends_with($haystack, 'ab');
var_dump($b);
$b = str_ends_with($haystack, 'bc');
var_dump($b);
$b = str_ends_with($haystack, 'fg');
var_dump($b);
// bool(false)
// bool(false)
// bool(true)
