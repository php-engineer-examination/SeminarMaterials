<?php
/* 動的なプロパティの利用 */
declare(strict_types=1);
error_reporting(-1);

class Hoge
{
}
$hobj = new Hoge();
$hobj->num = 123; // これが非推奨になった
var_dump($hobj);

// stdClass(とその継承クラス)は動的プロパティを問題なく扱えます
class ExStdClass extends stdClass
{
}
$exobj = new ExStdClass();
$exobj->num = 345;
var_dump($exobj);

// アトリビュートを使うと動的プロパティを問題なく扱えます
#[\AllowDynamicProperties]
class AttrHoge
{
}
$ahobj = new AttrHoge();
$ahobj->num = 567;
var_dump($ahobj);

// 継承した子クラスも動的プロパティを問題なく扱えます
class AttrFoo extends AttrHoge
{
}
$afobj = new AttrFoo();
$afobj->num = 789;
var_dump($afobj);
