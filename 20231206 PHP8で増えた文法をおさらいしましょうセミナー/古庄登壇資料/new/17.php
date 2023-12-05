<?php
/* 型システムの改善 */
declare(strict_types=1);
error_reporting(-1);

function func(null $n, false $f, true $t)
{
    var_dump($n, $f, $t);
}
func(null, false, true);
