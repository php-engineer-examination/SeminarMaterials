<?php
/* create_function() 関数は削除されました */
declare(strict_types=1);
error_reporting(-1);

$func = create_function('$a,$b', 'return "{$a} + {$b} = " . $a + $b;');
var_dump($func);
echo $func(7, 8) . "\n";
