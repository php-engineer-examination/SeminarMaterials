<?php
/* クラス定数への動的なアクセス構文 */
declare(strict_types=1);
error_reporting(-1);

class Hoge
{
    public const NUM = 123;
}

$str = 'NUM';
var_dump(Hoge::{$str});
