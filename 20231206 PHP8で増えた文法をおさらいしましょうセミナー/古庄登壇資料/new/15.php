<?php
/* 読み取り専用プロパティ */
declare(strict_types=1);
error_reporting(-1);

class Hoge
{
    public function __construct(
        private readonly string $str, // 初回は値が設定できる
    ) {
    }
    // メソッドの作成自体ではエラーは出ない(が、呼び出すと Fatal error
    public function setStr(string $s)
    {
        $this->str = $s;
    }
}
//
$obj = new Hoge('string value');
var_dump($obj);
// $obj->setStr('hoge'); // Fatal error: Uncaught Error: Cannot modify readonly property
// var_dump($obj);

class Foo
{
    private readonly string $str;
    public function __construct() {
    }
    public function setStr(string $s)
    {
        $this->str = $s;
    }
}
//
$obj = new Foo();
var_dump($obj);
$obj->setStr('hoge'); // 初回は設定できる
var_dump($obj);
$obj->setStr('piyo'); // 2回目は Fatal error: Uncaught Error: Cannot modify readonly property
var_dump($obj);
