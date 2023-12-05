<?php
/* 列挙型(Enum) */
declare(strict_types=1);
error_reporting(-1);

// Pure Enum
enum EnumType
{
    case Hoge;
    case Foo;
    case Piyo;
    case Bar;
}
// 値の把握
$val = EnumType::Hoge;
var_dump($val); // enum(EnumType::Hoge)
// 定義していないものは指定できない
// $val = EnumType::Fuga; // Fatal error: Uncaught Error: Undefined constant
// var_dump($val);
// 値の比較
var_dump($val === EnumType::Hoge);
var_dump($val === EnumType::Piyo);
echo "\n";


// 値に依存した列挙型(Backed Enum)
enum EnumTypeWithValue: string
{
    case Hoge = 'hogera';
    case Foo = 'foobar';
    case Piyo = 'piyopiyo';
    case Unknown = '???';

    // メソッドが実装できます
    public function func()
    {
        echo __METHOD__ , "\n";
        var_dump($this); // enum(EnumTypeWithValue::Hoge)
        // $this = static::Foo; // 自身の書き換えはできない
    }
}
// 値の把握
$val = EnumTypeWithValue::Hoge;
var_dump($val); // enum(EnumTypeWithValue::Hoge)
var_dump($val->value); // 値が取得できる // string(6) "hogera"
// メソッドのcall
$val->func();
// 値の推測
$val = EnumTypeWithValue::from('piyopiyo');
var_dump($val); // enum(EnumTypeWithValue::Piyo)
// $val = EnumTypeWithValue::from('dummy'); // from だと、存在しないときは Fatal error
// var_dump($val);
$val = EnumTypeWithValue::tryFrom('dummy'); // tryFromだと、存在しない時はnull
var_dump($val); // NULL
