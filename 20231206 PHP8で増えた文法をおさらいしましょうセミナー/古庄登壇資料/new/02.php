<?php
/* コンストラクタのプロパティ昇格機能 */
declare(strict_types=1);
error_reporting(-1);

class Hoge
{
    public function __construct(
        private string $str,
        private int $num, // 引数のリストに付ける最後のカンマも、オプションで許可されるようになりました
    ) {
    }
}
$obj = new Hoge(num: 123, str:'string');
var_dump($obj);
