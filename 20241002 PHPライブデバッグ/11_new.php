<?php
declare(strict_types=1);

function funcTrue(): bool {
    echo __FUNCTION__ , "\n";
    return true;
}
function funcFalse(): bool {
    echo __FUNCTION__ , "\n";
    return false;
}


// funcTrue();
// funcFalse();
// echo "\n";

//
$r1 = funcTrue();
$r2 = funcFalse();
if ($r1 || $r2) {
    echo "one is true \n";
} else {
    echo "no true \n";
}
echo "\n";

$r1 = funcTrue();
$r2 = funcFalse();
if ($r1 && $r2) {
    echo "all true \n";
} else {
    echo "not all true \n";
}
echo "\n";

$r1 = funcFalse();
$r2 = funcTrue();
if ($r1 && $r2) {
    echo "all true \n";
} else {
    echo "not all true \n";
}
echo "\n";
