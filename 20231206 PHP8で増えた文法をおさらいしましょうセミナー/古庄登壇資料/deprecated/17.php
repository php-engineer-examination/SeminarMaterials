<?php
/* htmlspecialchars()等 のデフォルト値が、 ENT_COMPAT から変更されました */
declare(strict_types=1);
error_reporting(-1);

$base_str = '\'"&<>';
$str = htmlspecialchars($base_str);
var_dump($str);
