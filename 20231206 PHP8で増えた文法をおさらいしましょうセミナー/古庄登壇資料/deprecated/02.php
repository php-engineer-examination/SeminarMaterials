<?php
/* クラス名と同じ名前のメソッドは、コンストラクタと解釈されなくなりました */
declare(strict_types=1);
error_reporting(-1);

// __construct()と「クラス名ど同じ名前のメソッド」がある場合は、PHP5以降なら __construct() が呼び出される
class Hoge
{
    public function __construct()
    {
        echo "const\n";
    }
    public function Hoge()
    {
        echo "Hoge\n";
    }
}
$obj = new Hoge();

// 「クラス名ど同じ名前のメソッド」しかない場合、PHP7は「Deprecated」を出しつつもコンストラクタとしてFooが呼び出されるが、PHP8だと単純に無視される
class Foo
{
    public function Foo()
    {
        echo "Foo\n";
    }
}
$obj = new Foo();
