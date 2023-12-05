<?php
/* 数値キーnを持つ配列は、nが負の値でも次の暗黙のキーは n+1 を使うようになります */
declare(strict_types=1);
error_reporting(-1);

$awk = [
    -10 => 'aaa',
];
$awk[] = 'bbb';
$awk[] = 'ccc';

// PHP7までは添字が「-10, 0, 1」となるが、PHP8以降は「-10, -9, -8」となる
var_dump($awk);
