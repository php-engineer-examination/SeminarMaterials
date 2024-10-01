<?php
declare(strict_types=1);

// 「1つのバフ/デバフ」で上下するパラメタの値を保持する
class Modifier {
    private int $amount;
    public function __construct(PC $pc, int|float $rate) {
        // [memo]本当は計算するが、今回は仮に「rateそのもの」を使う
        $this->amount = (int)$rate;
    }
    public function get(): int {
        if (0 >= $this->amount) {
            return 0;
        }
        return $this->amount;
    }
}

// 「1人のキャラクタ」を意味するクラス
// [memo]サンプルなんで雑です
class PC {
    private array $buffStr;
    private array $buffIq;

    public function __construct(
        private int $str,
        private int $iq,
    ){}

    public function pushBuffStr(Modifier $m): void {
        $this->buffStr[] = $m;
    }
    public function str(): int {
        $str = $this->str;
        foreach($this->buffStr as $m) {
            // echo "{$str} + {$m->get()} = ";
            $str += $m->get();
            // echo "{$str} \n";
        }
        return $str;
    }
    // IQは略
}

// PCを作成する
$pc = new PC(str:10, iq:11);
var_dump($pc);

// strバフ/デバフ用のインスタンスをいくつか作成する
// [memo]処理は「今回のコード診断」用。本当はもうちょっと色々あるのが普通
foreach([5, 3, -2, 4] as $r) {
    $pc->pushBuffStr(new Modifier($pc, $r));
}
// strを取り出す: 10 + 5 + 3 - 2 + 4 なので20が期待値
$str = $pc->str();
var_dump($str);
