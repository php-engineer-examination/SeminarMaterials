<?php
/* オフセットを指定してアクセスするための波括弧のサポートが削除されました */
declare(strict_types=1);
error_reporting(-1);

$awk = [1, 2, 3];
var_dump( $awk{0} );
