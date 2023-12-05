<?php
/* 多くのnoticeが警告に変換されるようになりました */
declare(strict_types=1);
error_reporting(-1);

// 未定義の変数を読み取ろうとした場合
var_dump($dummy);

// 未定義のプロパティを読み取ろうとした場合
$obj = new stdClass();
var_dump($obj->dummy);

// 未定義の配列のキーを読み取ろうとした場合
$awk = [];
var_dump($awk[0]);

// オブジェクトでない値のプロパティを読み取ろうとした場合
$num = 123;
var_dump($num->dummy);

// 配列でない値のインデックスにアクセスしようとした場合
var_dump($num[0]);

// 配列を文字列に変換しようとした場合
var_dump((string)$awk);

// リソースを配列のキーとして使おうとした場合
$fp = fopen(__FILE__, 'r');
$awk[$fp] = 123;

// null や bool 値や float の値を文字列オフセットとして使おうとした場合
$str = 'string';
var_dump($str[null]);
var_dump($str[true]);
var_dump($str[1.0]);

// 境界を超えて文字列のオフセットを読み取ろうとした場合
var_dump($str[strlen($str)]);

// 文字列のオフセットに複数バイトを割り当てようとすると、警告が発生するようになりました。
$str[0] = 'あ';

// 文字列のオフセットに空文字列を割り当てようとした場合
// XXX PHP8以降は Fatal error: Uncaught が発生します(PHP7まではWarningになります)
$str[0] = '';
