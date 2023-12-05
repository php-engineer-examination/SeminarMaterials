<?php
/* readonly 機能の修正 */
declare(strict_types=1);
error_reporting(-1);

$num = 123;
$str = 'string';
$obj = new readonly class($num, $str) {
    public function __construct(
        private int $num,
        private string $str,
    ) {
    }
};
var_dump($obj);
