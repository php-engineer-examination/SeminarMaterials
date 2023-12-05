<?php
/* 数値形式の文字列の扱いが変更されました */
declare(strict_types=1);
error_reporting(-1);

// 先頭から始まる数値形式の文字列の場合
// PHP7.1以降はNoticeが、PHP8からはWarningが発生します
$str = '2a';
$num = $str + 1;
var_dump($num);

// 文字列が数値でない場合
// PHP7.1以降はWarningが、PHP8からはFatal errorとなります
$str = 'string';
$num = $str + 1;
var_dump($num);

// 文字列が数値でない場合(先頭が数値でない場合は「文字列が数値でない場合」に含まれる)
// PHP7.1以降はWarningが、PHP8からはFatal errorとなります
$str = 'a2a';
$num = $str + 1;
var_dump($num);
