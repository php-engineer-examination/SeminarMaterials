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
if (funcTrue() || funcFalse()) {
    echo "one is true \n";
} else {
    echo "no true \n";
}
echo "\n";

// if (funcTrue() && funcFalse()) {
    // echo "all true \n";
// } else {
    // echo "not all true \n";
// }
// echo "\n";

// //
// if (funcFalse() && funcTrue()) {
//     echo "all true \n";
// } else {
//     echo "not all true \n";
// }
// echo "\n";

