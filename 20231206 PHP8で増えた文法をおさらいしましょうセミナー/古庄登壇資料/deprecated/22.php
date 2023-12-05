<?php
/* 引数を渡さずに get_class()/get_parent_class() をコールする */
declare(strict_types=1);
error_reporting(-1);

class Hoge
{
    public function func()
    {
        var_dump(get_class());
    }
}
//
$obj = new Hoge();
$obj->func();
