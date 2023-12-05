<?php
/* falseな変数への、配列を自動で生成する処理 */
declare(strict_types=1);
error_reporting(-1);

// PHP 8.1以降、これがエラーになるようになった
$bool = false;
$bool[] = 123;

// これは PHP 8.3現在まで、エラーにならない
$null = null;
$null[] = 456;

// これは PHP 8.0からエラー
$boolTrue = true;
$boolTrue[] = 789;
