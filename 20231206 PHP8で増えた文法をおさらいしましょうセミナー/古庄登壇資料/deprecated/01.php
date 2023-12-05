<?php
/* 文字列と数値の比較 */
declare(strict_types=1);
error_reporting(-1);

// コメントは PHP7系以下 / PHP8以降
var_dump('"123" == 123', "123" == 123); // true/true
var_dump('"   123" == 123', "   123" == 123); // true/true

var_dump('"2a" == 2', "2a" == 2); // true/false
var_dump('"false" == 0', "false" == 0); // true/false
var_dump('"" == 0', "" == 0); // true/false
