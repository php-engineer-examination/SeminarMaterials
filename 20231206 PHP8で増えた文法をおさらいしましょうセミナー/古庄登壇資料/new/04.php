<?php
/* union 型 */
declare(strict_types=1);
error_reporting(-1);

$v = '2';

// switchは比較が「緩やか」
switch($v) {
    case 1:
    case 3:
        echo "switch: int 1 or 3\n";
        break;
    case 2:
    case 4:
        echo "switch: int 2 or 4\n";
        break;
    case '1':
    case '2':
        echo "switch: string 1 or 2\n";
        break;
    default:
        echo "switch: any\n";
        break;
}

// matchは「厳密」
// matchは「式」なので値を返してくる
$r = match($v) {
    1, 3 => "match: int 1 or 3\n",
    2, 4 => "match: int 2 or 4\n",
    '1', '2' => "match: string 1 or 2\n",
    default => "match: any\n",
};
echo $r;

// defaultがなく、かつ「条件のいずれにもmatchしない」とFatal errorになる
$v = 123;
$r = match($v) {
    1, 3 => "match: int 1 or 3\n",
    2, 4 => "match: int 2 or 4\n",
    '1', '2' => "match: string 1 or 2\n",
};
echo $r;
