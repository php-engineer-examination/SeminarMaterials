<?php
/* readonly 機能の修正 */
declare(strict_types=1);
error_reporting(-1);

$num = 123;
$str = 'string';
$obj = new readonly class(num: $num, str: $str) {
    public function __construct(
        public int $num,
        public string $str,
    ) {
    }
};
var_dump($obj->num);
var_dump($obj->str);

// $obj->num = 987; // Fatal error
