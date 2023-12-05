<?php
/* 読み取り専用クラス */
declare(strict_types=1);
error_reporting(-1);

// #[\AllowDynamicProperties] // プロパティの動的追加は Fatal error
readonly class Hoge
{
    // private static int $i; // staticなプロパティは Fatal error
    
    public function __construct(
        private int $num,
        private string $str,
        // private $bool, // 型指定なしは Fatal error
    ) {
    }
    public function setNum(int $i)
    {
        $this->num = $i;
    }
}
//
$obj = new Hoge(123, 'string');
var_dump($obj);
// $obj->setNum(123); // 値の変更は Fatal error

// 無名クラスにも使えるので「プロパティはpublicにしておくからゲッターは作らないけどデータを変更しようとしたらエラーになる」なんて事もできるようになります
$obj = new readonly class(num: 123, str: 'hello') {
    public function __construct(
        public int $num,
        public string $str,
    ) {
    }
};
var_dump($obj->num);
var_dump($obj->str);
// 変更しようとするとエラー
// $obj->num = 987;
// var_dump($obj->num);
