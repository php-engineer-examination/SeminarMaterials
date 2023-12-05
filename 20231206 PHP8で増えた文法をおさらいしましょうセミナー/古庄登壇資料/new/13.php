<?php
/* 第一級callableを生成する記法 */
declare(strict_types=1);
error_reporting(-1);

function hoge()
{
    echo __FUNCTION__ , "\n";
}
class Hoge
{
    public function func()
    {
        echo __METHOD__ , "\n";
    }
    public static function funcStatic()
    {
        echo __METHOD__ , "\n";
    }
}
// 古い書き方の一例
$s = 'strlen';
var_dump( $s($s) );

// 新しくできるようになった書き方
$fn = strlen(...);
var_dump( $fn($s) );

$fn = hoge(...);
$fn();

$obj = new Hoge();
$fn = $obj->func(...);
$fn();

$fn = Hoge::funcStatic(...);
$fn();

