<?php
/* たくさんの警告が Error 例外に変換されるようになりました */
declare(strict_types=1);
error_reporting(-1);

// オブジェクトでない値にプロパティを書き込もうとした場合。 これより前のバージョンでは、 null については stdClass オブジェクトが暗黙のうちに作られ、 空文字列については false となっていました。
$obj = 'string';
$obj->pro = 123;
var_dump($obj);

// PHP_INT_MAX キーが既に使われている配列に対して、 要素を追加しようとした場合。
$awk[PHP_INT_MAX] = 123;
$awk[] = 'abc';
var_dump($awk);

// 不正な型(配列やオブジェクト) を配列のキーや文字列のオフセットとして使おうとした場合。
$awk[ [] ] = 123;
var_dump($awk);

// スカラー値に配列のインデックスを書き込もうとした場合
$num = 123;
$num[1] = 456;
var_dump($num);

// 配列やTraversable でない値をアンパックしようとした場合
// XXX PHP 7.4.0でもFatal errorになった
$num = 123;
$awk = [1,2, ...$num, 3];
var_dump($awk);

// 未定義の、非修飾の定数にアクセスしようとした場合。 これより前のバージョンでは、 非修飾の定数にアクセスしようとすると、警告が発生し、 文字列として解釈されていました。
var_dump(DUMMY_CONST);

// 可変長引数でない組み込み関数に、間違った数の引数を渡した場合、 ArgumentCountError がスローされるようになりました。
// XXX PHP 7.0はTypeError、PHP 7.1以降はArgumentCountErrorになった
$i = abs(-1, -2, -3);
var_dump($i);
