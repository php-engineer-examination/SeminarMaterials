<?php
/* Never 型 */
declare(strict_types=1);
error_reporting(-1);

function func(): Never
{
    echo __FUNCTION__ , "\n";
    // return ; returnを書いたら Fatal error

    // 例外を投げるか、またはexitのみが許されている
    throw new Exception('hoge');
    exit;
}
func();
