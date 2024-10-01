<?php
declare(strict_types=1);

// DBハンドル格納用変数
$dbh = null;

// DBに接続する(疑似)
// 接続したハンドルはglobal変数に格納してある(のでどこからでもアクセス可能)
function connectDb() {
    // echo "in to connectDb \n";
    global $dbh;
    // XXX 本当はDB接続ハンドルが入っている想定
    if ($dbh == null) {
        $dbh = new class() {
            public function __call(string $name, array $arguments): mixed {
                echo "__call: " , $name , "\n";
                var_dump($arguments);

                return true;
            }
        };
    }
}

function dbInsert($data) {
    global $dbh;
// var_dump("Trap 3", $dbh);

    // 保存処理のつもり
    $dbh->insert($data);
}
function dbUpdate($data) {
    global $dbh;
// var_dump("Trap 6", $dbh);

    // 保存処理のつもり
    $dbh->update($data);
}

function f1() {
    global $dbh;
    if ($dbh == null) {
        connectDb();
    }
// var_dump("Trap 2", $dbh);
    // なんか処理

    // 保存処理のつもり
    dbInsert([1,2]);
}
function f2() {
    global $dbh;
    if ($dbh = null) {
        connectDb();
    }
// var_dump("Trap 5", $dbh);
    // なんか処理

    // 保存処理のつもり
    dbUpdate(['a', 'b']);
}

// var_dump("Trap 1", $dbh);
f1();
// var_dump("Trap 4", $dbh);
f2();
