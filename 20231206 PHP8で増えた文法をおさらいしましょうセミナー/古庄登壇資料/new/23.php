<?php
/* static 変数の初期化 */
declare(strict_types=1);
error_reporting(-1);

function hoge()
{
    static $obj = (function() {
        $ran = new \Random\Randomizer();
        $obj = new stdClass();
        $obj->num = $ran->getInt(0, 999);
        $obj->bar = $ran->getInt(0, 999);
        
        return $obj;
    })();
    return $obj;
}

$obj = hoge();
$obj2 = hoge();
var_dump($obj, $obj2);
