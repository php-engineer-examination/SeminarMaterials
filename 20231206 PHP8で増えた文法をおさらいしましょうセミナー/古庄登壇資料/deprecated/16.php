<?php
/* strpos()等, strstr(), strchr()等の needle 引数は常に文字列として解釈されるようになりました */
//declare(strict_types=1); // 第二引数に「本来stringの所、intを渡す」のでコメントアウトしておく
error_reporting(-1);

// PHP7までは0x20(半角空白)を見つけ出し、PHP8以降はfalseとなる
$pos = strpos('a b c', 32);
var_dump($pos);

// PHP7までは0x20(半角空白)を見つけ出し、PHP8以降は'32'の文字列を見つけ出す
$pos = strpos('a b c 32 d', 32);
var_dump($pos);

// PHP7まではfalseとなり、PHP8以降は'1024'の文字列を見つけ出す
$pos = strpos('a b c 1024 d', 1024);
var_dump($pos);
