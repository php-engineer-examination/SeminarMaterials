<?php
/* 非推奨)デフォルト値を持つ引数の後に必須の引数が続く */
declare(strict_types=1);
error_reporting(-1);

//
function func1(string $a = '', string $b)
{
    var_dump($a, $b);
}
//
// func1('a'); // Too few arguments to function等のエラーが出るのでこの呼び方はできない
func1('a', 'b');

// このケースは(PHP 8.2までは)許容されている
function func2(string|null $a = null, string $b)
{
    var_dump($a, $b);
}
// func2('a'); // Too few arguments to function等のエラーが出るのでこの呼び方はできない
func2('a', 'b');
