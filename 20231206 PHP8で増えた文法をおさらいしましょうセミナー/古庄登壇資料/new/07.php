<?php
/* throw が式として使えるようになりました */
declare(strict_types=1);
error_reporting(-1);

$awk = [];

try {
    $r = $awk['hoge'] ?? throw new Exception('なんちゃら例外');
} catch(Throwable $e) {
    echo $e->getMessage();
}
