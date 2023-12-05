<?php
/* オブジェクトのクラス名を $object::class と書くことで取得できるようになりました */
declare(strict_types=1);
error_reporting(-1);

class Hoge
{
}
$obj = new Hoge();
var_dump( $obj::class );
