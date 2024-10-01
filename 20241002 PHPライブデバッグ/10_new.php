<?php
declare(strict_types=1);

// 小数点比較時の許容誤差の設定
// [memo]0.00001(1e-5) ～ 0.0000001(1e-7) くらいの許容誤差を想定したい
const EPSILON = 1e-6;

// 数値が一致しているかどうかの比較
function assertNumeric(float|int $f1, float|int $f2): bool {
	// echo "{$f1}, {$f2}\t: ";

    /* ざっくり書くなら */
    // return $f1 == $f2;

    /* 丁寧に書くなら */
    // 型が両方ともintならそのまま比較
    if (is_int($f1) && is_int($f2)) {
        // echo "T1:";
        // printf("%d, %d \n", $f1, $f2);
        return $f1 === $f2;
    }
    // floatが含まれている場合、floatにして比較
    if (is_int($f1)) {
        // echo "T3:";
        $f1 = floatval($f1);
    }
    if (is_int($f2)) {
        // echo "T3:";
        $f2 = floatval($f2);
    }
    // printf("%f, %f \n", $f1, $f2);
    // printf("%.28f \n", abs($f1 - $f2));
    return abs($f1 - $f2) < EPSILON;
}
//
var_dump( assertNumeric(10, 10) );
var_dump( assertNumeric(1.23, 1.23) );
var_dump( assertNumeric(10, 10.0) );
var_dump( assertNumeric(10.0, 10) );
//
echo "\n";
var_dump( assertNumeric(10*1.1, 11) );
var_dump( assertNumeric(10.1*1.1, 11.11) );
