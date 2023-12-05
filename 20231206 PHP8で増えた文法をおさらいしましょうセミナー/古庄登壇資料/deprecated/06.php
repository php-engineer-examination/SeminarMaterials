<?php
/* 親クラスがないクラスでparentを使うと、致命的なエラーが発生するようになりました */
declare(strict_types=1);
error_reporting(-1);

class Hoge
{
    public function func() {
        parent::func();
    }
}

$obj = new Hoge();
var_dump($obj);
