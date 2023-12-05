<?php
/* get_debug_type() 関数が追加されました */
declare(strict_types=1);
error_reporting(-1);

class Hoge
{
}

function d(string $name, mixed $v): void
{
    $gt = gettype($v);
    $gdt = get_debug_type($v);
    echo "{$name}:\t{$gt} / {$gdt}\n";
}

echo "\tgettype / get_debug_type \n";
d('string', 'str');
d('int', 123); // integer / int
d('float', 3.14); // double / float
d('bool', true); // boolean / bool
d('null', null);
d('array', []);
d('resource', fopen(__FILE__, 'r')); // resource / resource (stream)
d('object', new Hoge());    // object / Hoge
d('無名object', new class() {}); // object / class@anonymous
