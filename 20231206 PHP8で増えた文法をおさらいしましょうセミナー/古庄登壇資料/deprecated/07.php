<?php
/* 大文字小文字を区別しない定数を定義できる機能が削除されました */
declare(strict_types=1);
error_reporting(-1);

define('TEST_VALUE', 123, true); // PHP 7.3以降はここでDeprecatedまたはWarning
var_dump(Test_value); //PHP8以降はここで Fatal error: Uncaught Error: Undefined constant
