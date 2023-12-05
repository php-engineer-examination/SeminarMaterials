<?php
/* nullsafe 演算子 */
declare(strict_types=1);
error_reporting(-1);

class Hoge
{
    public function func1(): static|null
    {
        echo __METHOD__ , "\n";
        return $this;
    }
    public function func2(): static|null
    {
        echo __METHOD__ , "\n";
        return null;
    }
    public function func3(): static|null
    {
        echo __METHOD__ , "\n";
        return $this;
    }
}
$r = (new Hoge())?->func1()?->func2()?->func3();
var_dump($r);

// 以前ならこんな書き方でした
$r = (new Hoge())->func1();
if (null !== $r) {
    $r = $r->func2();
    if (null !== $r) {
        $r = $r->func3();
    }
}
var_dump($r);
