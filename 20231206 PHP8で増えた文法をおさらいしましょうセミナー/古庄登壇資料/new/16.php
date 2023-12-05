<?php
/* バックトレースから機密情報を削除するためのアトリビュート */
declare(strict_types=1);
error_reporting(-1);

class Hoge {
    public function login(
        string $id,
        #[\SensitiveParameter]
        string $rawpassword,
    ) {
        throw new Exception('Error!');
    }
}

$obj = new Hoge();
$obj->login('id', 'password');

/*
// PHP 8.1まで
Stack trace:
#0 /home/user/scripts/code.php(17): Hoge->login('id', 'password')

// PHP 8.2から
Stack trace:
#0 /home/user/scripts/code.php(17): Hoge->login('id', Object(SensitiveParameterValue))

*/
