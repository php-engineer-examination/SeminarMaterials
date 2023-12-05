<?php
/* トレイトで定数 */
declare(strict_types=1);
error_reporting(-1);

trait HogeTrait
{
    public const NUM = 123;
}
class Hoge
{
    use HogeTrait;
}

var_dump(Hoge::NUM);
