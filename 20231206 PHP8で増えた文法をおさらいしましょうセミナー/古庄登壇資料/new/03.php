<?php
/* union 型 */
declare(strict_types=1);
error_reporting(-1);

function hoge(int|float|string $v): void
{
    var_dump($v);
}
hoge(1);
hoge(3.14);
hoge('str');

// この2つはエラー
hoge(false);
hoge(null);
