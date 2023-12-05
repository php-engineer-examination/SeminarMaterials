<?php
/* 加算子/減算子 に対する変更 */
declare(strict_types=1);
error_reporting(-1);

// PHP 8.3からDeprecated
$str = '';
$str ++;
var_dump($str);

// PHP 8.3以降、soft-deprecated 扱い(E_DEPRECATED は発生しないものの、新しいコードではこの機能を使うべきではない)
$str = 'aaa';
$str ++;
var_dump($str);

// 上述は、PHP 8.3以降は str_increment() を使う事が推奨されています
if (version_compare(PHP_VERSION, '8.3.0') >= 0) {
    $str = 'abc';
    $str = str_increment($str);
    var_dump($str);
}    
