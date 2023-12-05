<?php
/* static でないメソッドを、staticメソッドとしてコールできる機能が削除 */
declare(strict_types=1);
error_reporting(-1);

class Hoge
{
    public function nonStaticMethod() {
        echo __METHOD__ , "\n";
    }
}
// 以下どちらも、PHP8以降は「Fatal error」になる
Hoge::nonStaticMethod();
call_user_func([Hoge::class, 'nonStaticMethod']);
